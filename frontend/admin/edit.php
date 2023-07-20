<?php
session_start();
include('../../backend/partials/_dbconnect.php');

if (isset($_GET['orderno'])) {
    $orderno = $_GET['orderno'];

    // Retrieve order details from the orders table
    $sql = "SELECT * FROM orders WHERE orderno = '$orderno'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $orderno = $_POST['orderno'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $ordered_bike = $_POST['ordered_bike'];
    $ordered_date = $_POST['TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'];

    // Update the order details in the orders table
    $stmt = $conn->prepare("UPDATE orders SET username = ?, email = ?, phoneno = ?, ordered_bike = ?, ordered_date = ? WHERE orderno = ?");
    $stmt->bind_param("sssssi", $username, $email, $phoneno, $ordered_bike, $ordered_date, $orderno);
    $stmt->execute();

    if ($stmt) {
        $_SESSION['success_message'] = "Order updated successfully!";
    } else {
        $_SESSION['error_message'] = "Failed to update the order. Please try again.";
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
    <title>Edit Order</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
</head>

<body>
    <header>
        <?php
        include('navbar.php');
        ?>
    </header>

    <section class="bike-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edit Order</h2>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="orderno" class="form-label">Order Number:</label>
                            <input type="text" class="form-control" id="orderno" name="orderno"
                                value="<?php echo $row['orderno']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                value="<?php echo $row['username']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="<?php echo $row['email']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="phoneno" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phoneno" name="phoneno"
                                value="<?php echo $row['phoneno']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="ordered_bike" class="form-label">Ordered Bike</label>
                            <input type="text" class="form-control" id="ordered_bike" name="ordered_bike"
                                value="<?php echo $row['ordered_bike']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="ordered_date" class="form-label">Ordered Date</label>
                            <input type="text" class="form-control" id="ordered_date" name="ordered_date"
                                value="<?php echo $row['ordered_date']; ?>" readonly>
                        </div>
                        <button type="submit" name="update" class="btn btn-primary">Update Order</button>
                        <a href="order_list.php" class="btn btn-secondary mt-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>