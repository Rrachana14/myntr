<?php
include 'db.php';

$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$passwordRaw = $_POST['password'] ?? '';

// Basic validation (optional but good)
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

    header("Location: login.html");
    exit;
} catch (PDOException $e) {
    echo "Error during signup: " . $e->getMessage();
}
?>
