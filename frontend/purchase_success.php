<?php session_start(); ?>
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
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.png" />
    <link rel="stylesheet" href="./assets/css/style.css" />

    <?php include('content-header.php') ?>

    <style>
        body {
            text-align: center;
            margin-top: 10%;
        }

        .row {
            display: flex;
            align-items: center;
        }

        .column {
            flex: 1;
            padding: 20px;
        }

        .column:first-child {
            border-right: 2px solid #fff;
        }

        .congrats {
            margin-bottom: 20px;
            color: #fff;
            font-family: 'rakkas', sans-serif;
            text-shadow: 0 0 20px #9E131C, 0 0 40px #9E131C, 0 0 60px #9E131C, 0 0 80px #9E131C, 0 0 100px #9E131C;
            font-size: 40px;
        }

        .message {
            color: #fff;
            margin-bottom: 20px;
            font-size: 28px;
            line-height: 1.5;
        }

        .message1 {
            color: #fff;
            line-height: 1.5;
            font-size: 17px;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column">
                <!-- Image column -->
                <img src="./bikedetails/assets/gif/01.gif" alt="Background Image" class="img-fluid" />
            </div>
            <div class="column">
                <!-- Text column -->
                <?php
                $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

                echo '<h1 class="congrats">CONGRATULATIONS!!!</h1>';
                echo '<h3 class="message">Your order is successfully placed, ' . $username . '!</h3>';
                echo '<p class="message1">
                We are thrilled to hear that you have purchased a new bike. Enjoy the thrill of the open road and the freedom that comes with it. May your journeys be filled with adventure and memorable experiences. Ride safe and have a fantastic time exploring! <br> <br>
                 You will be receivinag the <b> <u> CALL THROUGH THE REGISTERED CONTACT NO.</u> </b> Plz be patient till then!  
                </p>';
                ?>
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>