<?php
session_start();
include_once('./partials/_dbconnect.php');

// Check if the user is not logged in
if (!isset($_SESSION['username']) || $_SESSION['logged_in'] !== true) {
    // Display an alert using JavaScript
    echo '<script>alert("Please log in to our website to purchase the order."); window.location.href = "../frontend/index.php";</script>';
    exit(); // Stop further execution
}

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
$ordered_bike = $_GET['ordered_bike'];

// Prepare and execute the SQL query to insert the order
$stmt = $conn->prepare("INSERT INTO orders (username, email, phoneno, ordered_bike) SELECT ?, ?, ?, ? FROM DUAL WHERE NOT EXISTS (SELECT * FROM orders WHERE username = ?)");
$stmt->bind_param("sssss", $username, $email, $phoneno, $ordered_bike, $username);

// Execute the statement
if ($stmt->execute()) {
    // Display a successful alert message
    echo '<script>alert("Order placed successfully!"); window.location.href="../frontend/index.php";</script>';
} else {
    echo '<script>alert("Error placing the order.");</script>';
}

// Close the statement and the database connection
$stmt->close();
$conn->close();
?>