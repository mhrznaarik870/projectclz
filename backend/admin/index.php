<!DOCTYPE html>
<html>

<head>
    <title>ADMIN PANEL</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
    <?php
    require_once('./header.php');
    // Define the correct username and password
    $correctUsername = "admin";
    $correctPassword = "password";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the entered username and password from the form
        $enteredUsername = $_POST["username"];
        $enteredPassword = $_POST["password"];

        // Check if the entered credentials match the correct credentials
        if ($enteredUsername == $correctUsername && $enteredPassword == $correctPassword) {
            // Redirect to the employee_list.php page
            header("Location: ./dashboard.php");
            exit();
        } else {
            // Display an error message using JavaScript alert
            echo '<script>alert("The username or the password is incorrect. Please try again!");</script>';
        }
    }
    ?>

    <section class="main text-white" style="background-image: url('../../frontend/assets/img/bg.jpg')">

        <div class="container text-center col-md-2">
            <div class="login-box">
                <h2>Admin Login</h2>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group mt-4">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required class="form-control">
                    </div>
                    <div class="form-group mt-4">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required class="form-control">
                    </div>
                    <button type="submit" class="login-btn btn btn-primary mt-3">Login</button>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>


<script>
    document.getElementById("loginForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission

        // Get the entered username and password
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        // Perform validation (you can replace this with your own validation logic)
        if (username === "admin" && password === "password") {
            // If the credentials are correct, redirect to the dashboard page
            window.location.href = "dashboard.html";
        } else {
            // Display an error message if the credentials are incorrect
            alert("Invalid username or password. Please try again.");
        }
    });
</script>

</html>