<?php
session_start();
include_once('./partials/_dbconnect.php');

// Check if the user is not logged in
if (!isset($_SESSION['username']) || $_SESSION['logged_in'] !== true) {
    // Display an alert using JavaScript
    echo '<script>alert("Please log in to our website to purchase the order."); window.location.href = "../frontend/index.php";</script>';
    exit(); // Stop further execution
}

// Rest of your code...

// Get the user's information from the session
$username = $_SESSION['username'];

// Connect to the database
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "admotors";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query to fetch user details
$stmt = $conn->prepare("SELECT * FROM clients WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $email = $row['email'];
    $phoneno = $row['phoneno'];
} else {
    // User details not found
    echo '<script>alert("User details not found."); window.location.href = "../frontend/index.php";</script>';
    exit();
}

// Close the statement
$stmt->close();

// Get the ordered bike from the URL parameter
$bike_id = $_GET['bike_id'];

// Prepare and execute the SQL query to fetch bike_name from the products table
$stmt = $conn->prepare("SELECT bike_name FROM products WHERE bike_id = ?");
$stmt->bind_param("i", $bike_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if the bike_id exists in the products table
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $bike_name = $row['bike_name'];

    // Prompt the user for confirmation
    echo '<script>
        if (confirm("Are you sure you want to place the order for ' . $bike_name . '?")) {
            // User confirmed, proceed with inserting the order data
            window.location.href = "insert_order.php?bike_id=' . $bike_id . '&bike_name=' . urlencode($bike_name) . '";
        } else {
            // User cancelled, do something else or redirect
            window.location.href = "../frontend/trending.php";
        }
    </script>';
} else {
    // If bike_id doesn't exist in the products table, show an error message
    echo '<script>alert("Bike not found in the products table."); window.location.href = "../frontend/index.php";</script>';
}

// Close the statement and the database connection
$stmt->close();
$conn->close();
?>
?>