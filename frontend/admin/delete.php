<?php
session_start();
include('../../backend/partials/_dbconnect.php');

if (isset($_GET['orderno'])) {
    $orderno = $_GET['orderno'];

    $sql = "SELECT * FROM orders WHERE orderno = '$orderno'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $orderData = $result->fetch_assoc();
    } else {
        $_SESSION['error_message'] = "Order not found.";
        header("Location: order_list.php");
        exit();
    }
} else {
    $_SESSION['error_message'] = "Order number not provided.";
    header("Location: order_list.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm'])) {
    $cancellationRemarks = $_POST['cancellation_remarks'];

    $deleteSql = "DELETE FROM orders WHERE orderno = '$orderno'";
    if ($conn->query($deleteSql) === TRUE) {

        $insertSql = "INSERT INTO cancelled_orders (orderno, username, email, phoneno, cancelled_bike, cancellation_remarks, ordered_date)
                      VALUES ('$orderno', '{$orderData['username']}', '{$orderData['email']}', '{$orderData['phoneno']}', '{$orderData['ordered_bike']}', '$cancellationRemarks', '{$orderData['ordered_date']}') ";
        if ($conn->query($insertSql) === TRUE) {
            $_SESSION['success_message'] = "Order has been cancelled successfully!";
        } else {
            $_SESSION['error_message'] = "Failed to insert the order into the cancelled_orders table.";
        }
    } else {
        $_SESSION['error_message'] = "Failed to delete the order from the orders table.";
    }

    header("Location: order_list.php");
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
</head>

<body>
    <header>
        <?php include('navbar.php'); ?>
    </header>

    <section class="bike-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Delete Order</h2>
                    <!-- the code will confirmDelete only when the user confirms -->
                    <form method="POST" onsubmit="return confirmDelete();">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <strong>Order Number: </strong>
                                <?php echo $orderData['orderno']; ?>
                            </li>
                            <li class="list-group-item">
                                <strong>Username: </strong>
                                <?php echo $orderData['username']; ?>
                            </li>
                            <li class="list-group-item">
                                <strong>Email: </strong>
                                <?php echo $orderData['email']; ?>
                            </li>
                            <li class="list-group-item">
                                <strong>Phone Number: </strong>
                                <?php echo $orderData['phoneno']; ?>
                            </li>
                            <li class="list-group-item">
                                <strong>Cancelled Bike: </strong>
                                <?php echo $orderData['ordered_bike']; ?>
                            </li>
                            <li class="list-group-item">
                                <strong>Order Date: </strong>
                                <?php echo $orderData['ordered_date']; ?>
                            </li>

                            <li class="list-group-item">
                                <strong><label for="cancellation_remarks">Cancellation Remarks:</label></strong>
                                <input type="text" id="cancellation_remarks" name="cancellation_remarks" required>
                            </li>
                            <li class="list-group-item">
                                <button type="submit" name="confirm" class="btn btn-danger mb-2">Confirm
                                    Cancellation</button>
                                <a href="order_list.php" class="btn btn-primary">Cancel</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>


    <script>
        // confirmation for the user
        function confirmDelete() {
            const confirmation = confirm('Are you sure you want to delete this order?');
            if (confirmation) {
                return true;
            } else {
                return false;
            }
        }
    </script>

</body>

</html>