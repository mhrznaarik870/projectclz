<!-- html linking and posting the values in the dbms -->
<?php
$showAlert = false;
$showError = false;

require '../backend/partials/_dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $exists = false;
    if ($exists == false) {
        $sql = "INSERT INTO `clients` (`name`, `password`, `email`, `Reg_date`) VALUES ('$name', '$password', '$email', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
        }
    } else {
        $showError = true;
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

    <!-- Bootstrap  and icon links-->
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
                    A.D MOTORS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">HOME</a>
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
                    <span class="admin-icon  fa-2x">
                        <ion-icon name="arrow-dropdown-circle"></ion-icon>
                    </span>
                </div>
            </div>
        </nav>

        <!-- show alerts whether account is created or not -->
        <?php
        if ($showAlert) {
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>SUCCESS!! </strong>Your account is created. Now you can login to our WebSite.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            // header('Location: ./index.php');
        }
        if ($showError) {
            echo '
            <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              <strong> ERROR!! </strong> in creating your account!
            </div>
          </div>';
        }
        ?>



        <div class="big-wrapper">

            <!-- registration button -->
            <div class="wrapper">
                <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>

                <!-- login page box -->
                <div class="register-wrapper d-none">

                    <div class="form-box register">
                        <h2>Registration</h2>
                        <img src="./assets/img/logo.png" alt="logo" class="registerico" />
                        <form action="/projectclz/frontend/header.php" method="POST">

                            <div class="input-box">
                                <span class="icon"><ion-icon name="people"></ion-icon> </span>
                                <input type="text" id="name" name="name" placeholder="Name" required>
                                <!-- <label> Full Name</label> -->
                            </div>

                            <div class="input-box">
                                <span class="icon"><ion-icon name="mail"></ion-icon> </span>
                                <input type="email" id="email" name="email" placeholder="E-Mail Address" required>
                                <!-- <label> E-Mail Address</label> -->
                            </div>
                            <div class="input-box">
                                <span class="icon"> <ion-icon name="lock-closed"></ion-icon></span>
                                <input type="password" id="password" name="password" placeholder="Password" required>
                                <!-- <label> Password</label> -->
                            </div>
                            <div class="register-box ">
                                <label><input type="checkbox">I agree to the terms & conditions</label>

                                <button type="submit" class="regbtn">Register</button>

                            </div>
                            <div class="login-register">
                                <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
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
                        <div class="remember-forget">
                            <label><input type="checkbox"> Remember Me</label>
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