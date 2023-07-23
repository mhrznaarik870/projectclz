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

// Get the ordered bike and bike_name from the URL parameters
$bike_id = $_GET['bike_id'];
$ordered_bike = $_GET['bike_name'];

// Get the user's email and phoneno from the clients table
$stmt_clients = $conn->prepare("SELECT email, phoneno FROM clients WHERE username = ?");
$stmt_clients->bind_param("s", $username);
$stmt_clients->execute();
$result_clients = $stmt_clients->get_result();

if ($result_clients->num_rows == 1) {
    $row_clients = $result_clients->fetch_assoc();
    $email = $row_clients['email'];
    $phoneno = $row_clients['phoneno'];
} else {
    // User details not found
    echo '<script>alert("User details not found."); window.location.href = "../frontend/index.php";</script>';
    exit();
}

// Get the bike_name from the products table
$stmt_bikes = $conn->prepare("SELECT bike_name FROM products WHERE bike_id = ?");
$stmt_bikes->bind_param("i", $bike_id);
$stmt_bikes->execute();
$result_bikes = $stmt_bikes->get_result();

if ($result_bikes->num_rows == 1) {
    $row_bikes = $result_bikes->fetch_assoc();
    $ordered_bike = $row_bikes['bike_name'];
} else {
    // Bike details not found
    echo '<script>alert("Bike details not found."); window.location.href = "../frontend/trending.php";</script>';
    exit();
}

// Close the statements for clients and bikes
$stmt_clients->close();
$stmt_bikes->close();

// Prepare and execute the SQL query to insert the order into the orders table
$stmt = $conn->prepare("INSERT INTO orders (username, email, phoneno, ordered_bike) VALUES ( ?, ?, ?, ?)");
$stmt->bind_param("ssis", $username, $email, $phoneno, $ordered_bike);

// Execute the statement
if ($stmt->execute()) {
    // Display a successful alert message
    echo '<script>alert("Order placed successfully for ' . $ordered_bike . '!"); window.location.href="../frontend/purchase_success.php?ordered_bike=' . urlencode($bike_id) . '";</script>';
} else {
    // Error placing the order
    echo '<script>alert("Error placing the order."); window.location.href = "../frontend/trending.php";</script>';
}

// Close the statement and the database connection
$stmt->close();
$conn->close();

// Add the following code to fetch the data from the two tables and insert it into the new table

$stmt_new_order = $conn->prepare("INSERT INTO new_orders (username, email, phoneno, bike_id, bike_name) SELECT username, email, phoneno, bike_id, bike_name FROM orders INNER JOIN products ON orders.ordered_bike = products.bike_name WHERE orders.username = ?");
$stmt_new_order->bind_param("s", $username);
// Execute the statement
if ($stmt_new_order->execute()) {
    // Order successfully inserted into new table
    echo '<script>alert("Order successfully inserted into new table!");</script>';
} else {
    // Error inserting order into new table
    echo '<script>alert("Error inserting order into new table!");</script>';
}

// Close the statement and the database connection
$stmt_new_order->close();
$conn->close();
?>