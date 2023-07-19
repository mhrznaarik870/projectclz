<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password
    $username = 'admin';
    $password = 'admin';

    if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username'] === $username && $_POST['password'] === $password) {
        $_SESSION['admin_username'] = $username;

        // Redirect to the admin dashboard page
        header("Location: ../frontend/admin/admin_dashboard.php");
        exit();
    } else {
        // Authentication failed, display an error message and redirect
        $error = "Invalid username or password";
        echo '<script>alert("Invalid username or password"); window.location.href = "../frontend/admin/index.php";</script>';
        exit();
    }

}
?>