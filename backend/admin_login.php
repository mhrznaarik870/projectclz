<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = 'admin';
    $password = 'admin';

    if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username'] === $username && $_POST['password'] === $password) {
        $_SESSION['admin_username'] = $username;

        header("Location: ../frontend/admin/admin_dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password";
        echo '<script>alert("Invalid username or password"); window.location.href = "../frontend/admin/index.php";</script>';
        exit();
    }

}
?>