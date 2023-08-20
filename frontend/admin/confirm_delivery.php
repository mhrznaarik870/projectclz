<?php
session_start();
include('../../backend/partials/_dbconnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['orderno'])) {
        $orderno = $_POST['orderno'];
        $deliveredComments = $_POST['delivered_comments'];

        // Fetch order 
        $sql = "SELECT * FROM orders WHERE orderno = '$orderno'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $orderData = $result->fetch_assoc();

            // Insert data 
            $insertSql = "INSERT INTO `delivery_completed`(`orderno`, `username`, `email`, `phoneno`, `ordered_bike`, `ordered_date`, `delivered_comments`) 
                          VALUES ('{$orderData['orderno']}', '{$orderData['username']}', '{$orderData['email']}', '{$orderData['phoneno']}', '{$orderData['ordered_bike']}', '{$orderData['ordered_date']}', '$deliveredComments')";

            if ($conn->query($insertSql) === TRUE) {
                // Delete data from orders table
                $deleteSql = "DELETE FROM orders WHERE orderno = '$orderno'";
                if ($conn->query($deleteSql) === TRUE) {
                    $_SESSION['success_message'] = "Order delivery confirmed and data moved.";
                } else {
                    $_SESSION['error_message'] = "Failed to delete order data.";
                }
            } else {
                $_SESSION['error_message'] = "Failed to insert data into delivery_completed table.";
            }
        } else {
            $_SESSION['error_message'] = "Order data not found.";
        }

        header("Location: order_list.php");
        exit();
    } else {
        $_SESSION['error_message'] = "Order number not provided.";
        header("Location: order_list.php");
        exit();
    }
} else {
    $_SESSION['error_message'] = "Invalid request.";
    header("Location: order_list.php");
    exit();
}
?>