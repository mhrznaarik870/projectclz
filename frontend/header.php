<?php require('../backend/partials/_dbconnect.php'); ?>
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
                        <form action="../backend/login_register.php" method="POST">
                            <div class="input-box">
                                <span class="icon"><ion-icon name="people"></ion-icon> </span>
                                <input type="text" id="username" name="username" placeholder="Username" required>
                            </div>
                            <div class="input-box">
                                <span class="icon"><ion-icon name="mail"></ion-icon> </span>
                                <input type="email" id="email" name="email" placeholder="E-Mail Address" required>
                            </div>
                            <div class="input-box">
                                <span class="icon"><ion-icon name="call"></ion-icon> </span>
                                <input type="tel" id="phoneno" name="phoneno" placeholder="Phone Number" required>
                            </div>
                            <div class="input-box">
                                <span class="icon"> <ion-icon name="lock-closed"></ion-icon></span>
                                <input type="password" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="register-box ">
                                <button type="submit" class="regbtn" name="register">Register</button>
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
                    <form action="../backend/login_register.php" method="POST">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input type="text" id="email_username" name="email_username"
                                placeholder="E-Mail Address / Username" required>
                        </div>

                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input type="password" id="password" name="password" placeholder="Password" required>
                        </div>

                        <div class="forget-password">
                            <p><a href="#" class="login-link">Reset password?</a></p>
                        </div>
                        <div class="remember-forget">
                            <button type="submit" class="btn" name="login">Login</button>
                        </div>
                        <div class="login-register">
                            <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                        </div>
                    </form>
                </div>

            </div>
    </header>

    <script href="./js/script.js"></script>
</body>

</html>