<?php
session_start();
include('../../backend/partials/_dbconnect.php');

if (isset($_GET['orderno'])) {
    $orderno = $_GET['orderno'];

    $sql = "SELECT * FROM orders WHERE orderno = '$orderno'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Error fetching order data: " . $conn->error;
        header("Location: order_list.php");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delivered'])) {
    $delivered_comments = $_POST['delivered_comments'];

    // Delete the order from the orders table
    $deleteSql = "DELETE FROM orders WHERE orderno = '$orderno'";
    if ($conn->query($deleteSql) === TRUE) {
        $delivered_date = date('Y-m-d H:i:s');

        // Insert into the delivery_completed table
        $insertSql = "INSERT INTO delivery_completed (orderno, username, email, phoneno, ordered_bike, delivered_date, delivered_comments)
                      VALUES ('$orderno', '{$row['username']}', '{$row['email']}', '{$row['phoneno']}', '{$row['ordered_bike']}', '$delivered_date', '$delivered_comments') ";
        if ($conn->query($insertSql) === TRUE) {
            $_SESSION['success_message'] = "Order has been marked as delivered and moved to completed orders!";
        } else {
            $_SESSION['error_message'] = "Failed to insert the order into the delivery_completed table.";
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
    <title>Confirm Delivery</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
    <header>
        <?php include('navbar.php'); ?>
    </header>

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Confirm Delivery</h2>
                <p>Are you sure you want to mark this order as delivered?</p>
                <form method="post">
                    <?php if (isset($row)) { ?>
                        <input type="hidden" name="orderno" value="<?php echo $row['orderno']; ?>">
                        <input type="hidden" name="username" value="<?php echo $row['username']; ?>">
                        <input type="hidden" name="email" value="<?php echo $row['email']; ?>">
                        <input type="hidden" name="phoneno" value="<?php echo $row['phoneno']; ?>">
                        <input type="hidden" name="ordered_bike" value="<?php echo $row['ordered_bike']; ?>">
                    <?php } ?>
                    <div class="mb-3">
                        <label for="delivered_comments" class="form-label">Delivery Comments:</label>
                        <textarea class="form-control" id="delivered_comments" name="delivered_comments" rows="3"
                            required></textarea>
                    </div>
                    <input type="submit" name="delivered" value="Confirm Delivery" class="btn btn-success">
                </form>
                <a href="order_list.php" class="btn btn-secondary mt-2">Cancel</a>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>