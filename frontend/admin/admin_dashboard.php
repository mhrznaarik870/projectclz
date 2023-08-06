<?php session_start() ?>
<?php include('navbar.php') ?>
<?php

// Check if the admin is logged in
if (!isset($_SESSION['admin_username'])) {
    header("Location: index.php");
    exit();
}
?>


<html>

<head>
    <title> Dashboard</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center ">
        <div class="dash col-md-6 ">
            <h1>Welcome,
                <?php echo $_SESSION['admin_username']; ?>
            </h1>
            <br>
            <h4>Please make the changes according to the requirement and the clients.</h4>

            <h2>Dashboard</h2>
            <p>
                This is the admin dashboard where you can manage various aspects of the website.
                You can view and manage orders, customer details, and reviews, among other things.
                Use the navigation menu to access different sections of the dashboard.
            </p>

            <h3>Terms and Conditions</h3>
            <p>
                By accessing and using this website, you agree to comply with the terms and conditions
                outlined in our policies. It is important to review and understand these terms before
                engaging in any activities on the site. If you have any questions or concerns, please
                contact our support team for assistance.
            </p>
        </div>
    </div>
</body>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../js/script.js"></script>
</body>

</html>