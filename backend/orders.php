<?php
session_start(); // Start the session

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    // Display an alert using JavaScript
    echo '<script>alert("Please login to our website to purchase the order."); window.location.href = "../frontend/index.php";</script>';
    exit(); // Stop further execution
}


// Include the header.php file
include_once('./partials/_dbconnect.php');

// Check if the user has submitted the form
if (isset($_POST['purchased'])) {
    // Get the user's information from the session
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $phoneno = $_SESSION['phoneno'];
    $ordered_bike = $_GET['ordered_bike'];

    // Connect to the database and insert the order
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "admotors";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert the order
    $stmt = $conn->prepare("INSERT INTO orders (username, email, phoneno, ordered_bike) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $username, $email, $phoneno, $ordered_bike);
    $stmt->execute();

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();

    echo '<script>alert("Order placed successfully."); window.location.href = "orders.php";</script>';
    exit();
}
?>