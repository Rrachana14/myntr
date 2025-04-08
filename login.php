<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

try {
    $sql = "SELECT * FROM Users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['username']; 
        header("Location: index.php"); // Redirect to index.html
        exit;
    } else {
        echo "Invalid login credentials.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
