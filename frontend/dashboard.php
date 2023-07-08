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
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        echo "<h1 style='text-align:center; margin-top:300px;margin-bottom:20px; color: #fff; font-family: \"rakkas\", sans-serif; text-shadow: 0 0 20px #ffcc00, 0 0 40px #ffcc00, 0 0 60px #ffcc00, 0 0 80px #ffcc00, 0 0 100px #ffcc00;'>SUCCESS!!</h1>";
        echo "<h3 style='text-align: center; color: #fff;'>WELCOME TO OUR WEBSITE - $_SESSION[username]</h3>";
        echo "<h4 style='text-align:center; color: #fff;'>Now you can order through our website! Please buy the desired propducts so that we can have our best deals.</h4>";
    }

    ?>

</body>

</html>