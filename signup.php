<?php
include 'db.php';

$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$passwordRaw = $_POST['password'] ?? '';

// Basic validation
if (empty($username) || empty($email) || empty($passwordRaw)) {
    echo "All fields are required. <a href='signup.html'>Try again</a>";
    exit;
}

$password = password_hash($passwordRaw, PASSWORD_DEFAULT);

try {
    // Check if username or email already exists
    $checkSql = "SELECT * FROM Users WHERE username = ? OR email = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->execute([$username, $email]);

    if ($checkStmt->fetch()) {
        echo "Username or Email already exists. <a href='signup.html'>Try again</a>";
        exit;
    }

    // Insert new user
    $sql = "INSERT INTO Users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username, $email, $password]);

    // ✅ Send POST request to Azure Logic App after signup
    $logicAppUrl = "https://prod-14.centralindia.logic.azure.com:443/workflows/3b2a0b04a16b4da48127e191b20a2deb/triggers/When_a_HTTP_request_is_received/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2FWhen_a_HTTP_request_is_received%2Frun&sv=1.0&sig=a-LAvivRKvq4InYCI0tixUySMyJjSYAp66ZBD7El5Ug";

    $data = [
        "username" => $username,
        "email" => $email,
        "event" => "New user signup"
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/json",
            'method'  => 'POST',
            'content' => json_encode($data),
        ],
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($logicAppUrl, false, $context);

    // Optional logging
    if ($result === FALSE) {
        error_log("⚠️ Failed to notify Logic App.");
    } else {
        error_log("✅ Logic App notified: $result");
    }

    // Redirect to login
    header("Location: login.html");
    exit;
} catch (PDOException $e) {
    echo "Error during signup: " . $e->getMessage();
}
?>
