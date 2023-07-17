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
$ordered_bike = $_GET['ordered_bike'];

// Prepare and execute the SQL query to insert the order
$stmt = $conn->prepare("INSERT INTO orders (username, email, phoneno, ordered_bike) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $username, $email, $phoneno, $ordered_bike);

// Execute the statement
if ($stmt->execute()) {
    echo '<script>
    if (confirm("Are you sure you want to place the order?")) {
        // User confirmed, proceed with inserting the order data
        window.location.href = "insert_order.php?ordered_bike=' . $ordered_bike . '";
    } else {
        // User cancelled, do something else or redirect
        window.location.href = "../frontend/trending.php";
    }
</script>';
}
// Close the statement and the database connection
$stmt->close();
$conn->close();
?>