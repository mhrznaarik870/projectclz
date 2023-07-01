<?php
$showAlert = false;
$showError = false;
$errorMessage = "";

require_once '../partials/_dbconnect.php';

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
    <link rel="icon" type="image/x-icon" href="../../frontend/assets/img/logo.png" />
    <link rel="stylesheet" href="./assets/css/style.css" />

</head>

<body style="background-color: rgb(87, 80, 80)">
    <header>
        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brands" href="./index.php">
                    <img class="logo" src="../../frontend/assets/img/logo.png" alt="logo" />
                    A.D. MOTORS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="loading-overlay">
                    <div class="loading-spinner">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav  my-2 my-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="./dashbard.php">DASHBOARD</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="./orders.php">ORDERS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./replaced_orders.php">REPLACED ORDERS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./cancelled_orders.php">CANCELLED ORDERS</a>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

</body>

</html>