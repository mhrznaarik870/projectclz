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

// Close the statement for clients
$stmt_clients->close();

// Prepare and execute the SQL query to insert the order into the orders table
$stmt = $conn->prepare("INSERT INTO orders (username, email, phoneno, ordered_bike) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $username, $email, $phoneno, $ordered_bike);

// Execute the statement
if ($stmt->execute()) {
    // Display a successful alert message
    echo '<script>alert("Order placed successfully for ' . $ordered_bike . '!");</script>';
} else {
    // Error placing the order
    echo '<script>alert("Error placing the order."); window.location.href = "../frontend/trending.php";</script>';
    exit();
}

// Close the statement for orders
$stmt->close();

// Prepare and execute the SQL query to insert data into the cart table
$quantity = 1;
$stmt_cart = $conn->prepare("INSERT INTO cart (username, bike_name, price, bike_id, quantity) VALUES (?, ?, ?, ?,?)");
$stmt_cart->bind_param("ssiii", $username, $ordered_bike, $price, $bike_id, $quantity);

// Fetch data from the products table based on bike_id
$stmt_products = $conn->prepare("SELECT bike_name, new_price FROM products WHERE bike_id = ?");
$stmt_products->bind_param("i", $bike_id);
$stmt_products->execute();
$result_products = $stmt_products->get_result();

if ($result_products->num_rows == 1) {
    // Fetch the row
    $row_products = $result_products->fetch_assoc();

    // Extract the data
    $ordered_bike = $row_products['bike_name'];
    $price = $row_products['new_price'];

    // Close the statement
    $stmt_products->close();

    // Execute the statement to insert into the cart table
    if ($stmt_cart->execute()) {
        // Display success message
        echo '<script>alert("Item added to cart successfully!"); window.location.href = "../frontend/Aarik_Maharjan_cart.php";</script>';
    } else {
        // Display error message
        echo '<script>alert("Error adding item to cart."); window.location.href = "../frontend/trending.php";</script>';
        exit();
    }
} else {
    // Bike details not found
    echo '<script>alert("Bike details not found."); window.location.href = "../frontend/trending.php";</script>';
    exit();
}

// Close the statement and the database connection
$stmt_cart->close();
$conn->close();
?>