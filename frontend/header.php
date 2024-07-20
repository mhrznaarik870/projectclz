<?php
$server = "localhost";
$username = "root";
$password = "mysql";
$db = "admotors";

$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Error" . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AD Motors Store</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        class="stylesheet">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.png" />
    <link rel="stylesheet" href="./assets/css/style.css" />

    <?php include_once('content-header.php'); ?>
</head>

<body>

    <script href="./js/script.js"></script>

</body>

</html>