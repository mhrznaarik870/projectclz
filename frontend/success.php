<?php
session_start();
include('../backend/partials/_dbconnect.php');

if (!empty($_GET)) {
    // Loop through the GET parameters to extract product details
    foreach ($_GET as $key => $value) {
        if (strpos($key, 'item_name') !== false) {
            $products[] = urldecode($value);
        }
    }

    // Store product details in session
    $_SESSION['products'] = $products;

    // Store other payment-related information in session
    $_SESSION['txn_id'] = $_GET['tx'];
    $_SESSION['amount'] = $_GET['amt'];
    $_SESSION['currency'] = $_GET['cc'];
    $_SESSION['status'] = $_GET['st'];
    $_SESSION['payer_id'] = $_GET['payer_id'];
    $_SESSION['payer_email'] = $_GET['payer_email'];
    $_SESSION['payer_name'] = $_GET['first_name'] . ' ' . $_GET['last_name'];
    header('location:success.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payment Successful</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">

        <div class="alert alert-success">
            <strong>Success!</strong> Payment is Successful!
        </div>
        <table class="table" border="2">

            <tbody>
                <tr>
                    <td>Transaction ID</td>
                    <td>
                        <?php echo $_SESSION['txn_id'] ?>
                    </td>
                </tr>
                <?php foreach ($_SESSION['products'] as $product) { ?>
                    <tr class="table-primary">
                        <td>Product Name</td>
                        <td>
                            <?php echo $product; ?>
                        </td>
                    </tr>
                <?php } ?>
                <tr class="table-success">
                    <td>Amount</td>
                    <td>
                        <?php echo $_SESSION['amount'] . ' ' . $_SESSION['currency']; ?>
                    </td>
                </tr>
                <tr class="table-danger">
                    <td>Payment Status</td>
                    <td>
                        <?php echo $_SESSION['status']; ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary ">Go to Homepage</a>

    </div>

</body>

</html>