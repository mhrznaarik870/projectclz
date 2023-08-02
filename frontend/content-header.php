<header style="background-color: rgba(0 0 0 / 50%); backdrop-filter: blur(8px);">

    <!-- navigation bar -->
    <?php include('navbar.php'); ?>
    <link href="./bootstrap/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.png" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- registration and login form -->
    <div class="big-wrapper">

        <!-- registration button -->
        <div class="wrapper">
            <span class="icon-close"><ion-icon name="close"></ion-icon></span>

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
                            <span class="icon"> <ion-icon name="lock"></ion-icon></span>
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
                        <span class="icon"><ion-icon name="lock"></ion-icon></span>
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
    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</header>