<?php
session_start();
include('navbar.php');
include('../../backend/partials/_dbconnect.php');

if (isset($_GET['bike_id']) && !empty($_GET['bike_id'])) {
    $bike_id = $_GET['bike_id'];

    // Fetch the bike record to get the bike name
    $sql = "SELECT bike_name FROM products WHERE bike_id = $bike_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $bikeName = $row['bike_name'];

        // Check if the user has confirmed the deletion
        if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
            // Create the SQL DELETE query
            $sql = "DELETE FROM products WHERE bike_id = $bike_id";

            // Execute the query
            if ($conn->query($sql) === true) {
                echo "<script>alert('Bike product with ID $bike_id ($bikeName) has been deleted.'); window.location.href = 'view_prods.php';</script>";
                exit;
            } else {
                echo "Error deleting bike product: " . $conn->error;
            }
        } else {
            // Show the confirmation alert
            echo "<script>
                var confirmed = confirm('Are you sure you want to delete the bike product with ID $bike_id and name $bikeName?');
                if (confirmed) {
                    window.location.href = 'delete_product.php?bike_id=$bike_id&confirm=yes';
                } else {
                    window.location.href = 'view_prods.php'; // Redirect back to the products page if not confirmed
                }
            </script>";
        }
    } else {
        echo "Bike product with ID $bike_id not found.";
    }
} else {
    echo "Invalid bike_id provided.";
}

// Close the database connection
$conn->close();
?>