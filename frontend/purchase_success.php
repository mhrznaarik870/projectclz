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
    <link rel="stylesheet" href="./assets/css/style.css" !important />
    <link rel="stylesheet" href="./assets/css/prostyle.css" !important />

    <?php include('content-header.php') ?>

</head>

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

    .btn {
        position: relative;
        top: 90%;
        left: 30%;
        transform: translate(-50%, -50%);
        width: 20rem;
        border-radius: 25px;
        text-align: center;
        outline: none;
        margin-top: 95px;
        background-color: #f5f5f5;
        color: #555555;
        box-shadow: 0 0 5px 2px #888888;
    }

    .btn:hover {
        transform: translate(-50%, -50%);
        background-color: #555555;
        color: white;
        box-shadow: 0 0 7px 5px #888888;
    }
</style>
</head>


<body>
    <div class="container">
        <div class="row">
            <div class="column">
                <!-- Image column -->
                <?php
                $servername = "localhost";
                $username_db = "root";
                $password_db = "mysql";
                $dbname = "admotors";

                $conn = new mysqli($servername, $username_db, $password_db, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch the GIF path based on the ordered bike
                
                $ordered_bike_id = isset($_GET['ordered_bike']) ? $_GET['ordered_bike'] : '';
                $stmt = $conn->prepare("SELECT gif_path FROM products WHERE bike_id = ?");
                $stmt->bind_param("i", $ordered_bike_id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $gifPath = $row['gif_path'];
                } else {
                    $gifPath = "./bikedetails/assets/gif/default.gif";
                }

                $stmt->close();
                $conn->close();
                ?>

                <img src="<?php echo $gifPath; ?>" alt="Background Image" class="img-fluid" />
            </div>
            <div class="column">
                <!-- Text column -->
                <?php
                $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

                echo '<h1 class="congrats">CONGRATULATIONS!!!</h1>';
                echo '<h3 class="message">Your order is successfully placed, ' . $username . '!</h3>';
                echo '<p class="message1">
                We are thrilled to hear that you have purchased a new bike. Enjoy the thrill of the open road and the freedom that comes with it. May your journeys be filled with adventure and memorable experiences. Ride safe and have a fantastic time exploring! <br> <br>
                 You will be receiving the <b><u>CALL THROUGH OUR REGISTERED CONTACT NO.</u></b> Please be patient until then!  
                </p>';
                ?>
                <form action="./Aarik_Maharjan_cart.php">
                    <input type="hidden" name="bike_id" value="<?php echo $ordered_bike_id; ?>">
                    <button type="submit" class="btn">See Your Cart <ion-icon name="cart"></ion-icon></button>
                </form>

            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>