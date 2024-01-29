<?php
session_start();

// Hardcoded user credentials for demonstration purposes
$users = [
    'chaitu' => 'chaitu',
    'user2' => 'password2',
    'user3' => 'password3',
    'user4' => 'password4',
    'user5' => 'password5',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if user credentials are valid
    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['authenticated'] = true;
        header('Location: index.php');
        exit();
    } else {
        $errorMessage = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php include 'login_form.php'; ?>
</body>
</html>
