<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform the authentication (replace with your own authentication logic)
    // Here, we assume the correct username is 'admin' and password is 'password'
    if ($username === 'admin' && $password === 'password') {
        // Authentication successful, set the admin username in the session
        $_SESSION['admin_username'] = $username;

        // Redirect to the admin dashboard page
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Authentication failed, display an error message
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Admin Login</h1>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger mt-3"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
