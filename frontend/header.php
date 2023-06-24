<?php
$showAlert = false;
$showError = false;
$errorMessage = "";

require_once '../backend/partials/_dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (isset($_POST['terms']) && $_POST['terms'] === "1") {
        // Check if the username already exists
        $checkQuery = "SELECT * FROM clients WHERE name='$name'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            $showError = true; // Set the error flag if username exists
            $errorMessage = "Username already exists. Please reset your password and try to login!";
        } else {
            // Check if the email already exists
            $checkEmailQuery = "SELECT * FROM clients WHERE email='$email'";
            $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

            if (mysqli_num_rows($checkEmailResult) > 0) {
                $showError = true; // Set the error flag if email exists
                $errorMessage = "Email already exists. Please try resetting your password!";
            } else {
                // Insert the new user into the database
                $sql = "INSERT INTO `clients` (`name`, `password`, `email`, `Reg_date`) VALUES ('$name', '$password', '$email', current_timestamp())";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $showAlert = true; // Set the success flag if insertion is successful
                } else {
                    $showError = true; // Set the error flag if insertion fails
                    $errorMessage = "Unable to create your account. Please try again later.";
                }
            }
        }
    } else {
        // Checkbox not checked, show error message
        $showError = true;
        $errorMessage = "Please accept the terms and conditions.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>A.D MOTORS</title>

    <!-- Bootstrap and icon links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        class="stylesheet">
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.png" />
    <link rel="stylesheet" href="./assets/css/style.css" />

</head>

<body style="background-color: rgb(87, 80, 80)">
    <header>
        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brands" href="./index.php">
                    <img class="logo" src="./assets/img/logo.png" alt="logo" />
                    A.D. MOTORS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="loading-overlay">
                    <div class="loading-spinner">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto my-2 my-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="./index.php">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="./trending.php">TRENDING</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./store.php">STORE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./contactUs.php">CONTACT US</a>
                                </li>
                            </ul>
                            <button class="btnlogin-popup">Login</button>

                            <!-- the cart -->
                            <span class="cart-icon">
                                <ion-icon size="large" name="cart-outline"></ion-icon>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>


        <?php if ($showAlert): ?>
            <div class="show-alerts ">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>SUCCESS!!</strong> Your account is created. Please verify your email-address by visiting your
                    gmail account.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        <?php elseif ($showError): ?>
            <div class="show-alerts ">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!!</strong>
                    <?php echo $errorMessage; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        <?php endif; ?>

        <!-- registration and login form -->
        <div class="big-wrapper">

            <!-- registration button -->
            <div class="wrapper">
                <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>

                <!-- login page box -->
                <div class="register-wrapper d-none">
                    <div class="form-box register">
                        <div class="registration">
                            <h2>Registration</h2>
                        </div>
                        <img src="./assets/img/logo.png" alt="logo" class="registerico" />

                        <!-- Form action post -->
                        <form action="/projectclz/frontend/index.php" method="POST">
                            <div class="input-box">
                                <span class="icon"><ion-icon name="people"></ion-icon> </span>
                                <input type="text" id="name" name="name" placeholder="Username" required>
                            </div>
                            <div class="input-box">
                                <span class="icon"><ion-icon name="mail"></ion-icon> </span>
                                <input type="email" id="email" name="email" placeholder="E-Mail Address" required>
                            </div>
                            <div class="input-box">
                                <span class="icon"> <ion-icon name="lock-closed"></ion-icon></span>
                                <input type="password" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="register-box ">
                                <label><input type="checkbox" name="terms" value="1">
                                    I agree to the <a href="#">terms & conditions</a> </label>
                                <button type="submit" class="regbtn">Register</button>
                            </div>
                            <div class="login-register">
                                <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- login-box -->
                <div class="form-box login">
                    <h2>Login</h2>
                    <img src="./assets/img/logo.png" alt="logo" class="loginico" />
                    <form action="#">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon> </span>
                            <input type="mail" placeholder="E-Mail Address" required>
                            <!-- <label> E-Mail Address</label> -->
                        </div>
                        <div class="input-box">
                            <span class="icon"> <ion-icon name="lock-closed"></ion-icon></span>
                            <input type="password" placeholder="Password" required>
                            <!-- <label> Password</label> -->
                        </div>

                        <div class="forget-password">
                            <p> <a href="#" class="login-link">Reset password??</a></p>
                        </div>
                        <div class="remember-forget">
                            <button type="submit" class="btn">Login</button>

                        </div>
                        <div class="login-register">
                            <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <script>
        // Get the current page URL
        const currentURL = window.location.href;

        // Get all nav-link elements
        const navLinks = document.querySelectorAll('.nav-link');

        // Loop through each nav-link
        navLinks.forEach(navLink => {
            // Get the URL of the nav-link
            const linkURL = navLink.href;

            // Check if the URL matches the current page URL
            if (linkURL === currentURL) {
                // Add the "active" class to the matching nav-link
                navLink.classList.add('active');
            }
        });

        // Add event listener for login button
        const loginButton = document.querySelector('.btnlogin-popup');
        loginButton.addEventListener('click', () => {
            const wrapper = document.querySelector('.big-wrapper');
            wrapper.classList.toggle('show-register-wrapper');
        });

        // Add event listener for register link in login form
        const registerLink = document.querySelector('.register-link');
        registerLink.addEventListener('click', () => {
            const wrapper = document.querySelector('.big-wrapper');
            wrapper.classList.toggle('show-register-wrapper');
        });

        // Add event listener for login link in register form
        const loginLink = document.querySelector('.login-link');
        loginLink.addEventListener('click', () => {
            const wrapper = document.querySelector('.big-wrapper');
            wrapper.classList.toggle('show-register-wrapper');
        });

        // Add event listener for close icon
        const closeIcon = document.querySelector('.icon-close');
        closeIcon.addEventListener('click', () => {
            const wrapper = document.querySelector('.big-wrapper');
            wrapper.classList.remove('show-register-wrapper');
        });
    </script>
</body>

</html>