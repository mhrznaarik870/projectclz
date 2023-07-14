<?php
SESSION_START();
include('../backend/partials/_dbconnect.php');
include('./header.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Success</title>
</head>

<body>
    <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        echo "<h1 style='text-align:center; margin-top:200px;margin-bottom:20px; color: #fff; font-family: \"rakkas\", sans-serif; text-shadow: 0 0 20px #ffcc00, 0 0 40px #ffcc00, 0 0 60px #ffcc00, 0 0 80px #ffcc00, 0 0 100px #ffcc00;'>SUCCESS!!</h1>";
        echo "<h3 style='text-align: center; color: #fff;'>WELCOME TO OUR WEBSITE - " . $_SESSION['username'] . "</h3>";
        echo "<h4 style='text-align:center; color: #fff; padding: 0 128px'>
        We are excited to announce that ordering through our website is now available! We invite you to explore our wide range of high-quality products and take advantage of our best deals. Your satisfaction is our top priority, and we are committed to providing you with an exceptional shopping experience.</h4>";
    }
    ?>
</body>

</html>