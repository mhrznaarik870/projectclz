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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
</head>

<body>
    <header>
        <?php include('navbar.php'); ?>
    </header>

    <section class="bike-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Confirmation for delivery!!</h2>
                    <form action="confirm_delivery.php" method="POST" onsubmit="return confirmDelete();">
                        <input type="hidden" name="orderno" value="<?php echo $orderData['orderno']; ?>">
                        <ul class="list-group">
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
                                <strong><label for="delivered_comments">Delivered Remarks:</label></strong>
                                <input type="text" id="delivered_comments" name="delivered_comments">
                            </li>
                            <li class="list-group-item">
                                <button id="deliveryCompletionBtn" class="btn btn-primary mt-2"> Confirm
                                    delivery</button>
                                <a href="order_list.php" class="btn btn-primary mt-2">Cancel</a>
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
        function confirmDelete() {
            const confirmation = confirm('Are you sure you want to confirm the delivery?');
            if (confirmation) {
                return true;
            } else {
                return false;
            }
        }
    </script>

</body>

</html>