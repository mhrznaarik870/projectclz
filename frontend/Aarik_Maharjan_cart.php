<style>
    .custom-style-margin {
        margin-top: 100px;
        color: antiquewhite;
    }

    tbody {
        color: antiquewhite;
    }

    thead {
        color: antiquewhite;
    }

    .pay_btn {
        height: 40px;
        width: 20%;
        outline: none;
        border: none;
        background: white;
        color: rgb(172, 98, 45);
        font-weight: 600;
        font-family: "Secular One", sans-serif;
        border-radius: 10px;
        transition: all 0.24s ease-in-out;
        margin-left: 60em;
        align-items: center;
    }

    .pay_btn:hover {
        transform: scale(1.05);
    }
</style>


<?php
session_start();
include_once('../backend/partials/_dbconnect.php');

// Check if the user is logged in
if (!isset($_SESSION['username']) || $_SESSION['logged_in'] !== true) {
    echo '<script>alert("Please log in to our website to view your purchase history."); window.location.href = "../frontend/index.php";</script>';
    exit();
}

include "./header.php";

// Retrieve the username of the logged-in user
$username = $_SESSION['username'];

// Query the database to fetch the required data
$sql = "SELECT * FROM cart WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if data is retrieved successfully
if ($result->num_rows > 0) {
    // Fetch the first row of data
    $row = $result->fetch_assoc();

    // Set the data to be used in the form
    $bike_name = $row['bike_name'];
    $bike_id = $row['bike_id'];
    $price = $row['price'];

} else {
    // Handle case where no data is found
    echo "No data found in the cart for the user.";
    exit();
}
?>
<div class="container custom-style-margin">
    <form method="POST" action="https://www.sandbox.paypal.com/cgi-bin/webscr" enctype="multipart/form-data">
        <input type="hidden" name="business" value="sb-yx3vp29125606@business.example.com">
        <input type="hidden" name="upload" value="1">

        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="no_shipping" value="1">
        <input type="hidden" name="return" value="http://localhost/projectclz/frontend/success.php">
        <input type="hidden" name="cancel_return" value="http://localhost/projectclz/frontend/cancel.php">


        <h2><u>
                <center>Your Purchase History</center>
            </u></h2><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_price = 0;
                $index = 1;
                while ($row = $result->fetch_assoc()) {
                    $total = $row['price'] * $row['quantity']; // Calculate total price for each product
                    $total_price += $total; // Add to the total price for all products
                    ?>
                    <input type="hidden" name="item_name_<?php echo $index ?>" value="<?php echo $row['bike_name']; ?>">
                    <input type="hidden" name="item_number_<?php echo $index ?>" value="<?php echo $row['bike_id']; ?>">
                    <input type="hidden" name="amount_<?php echo $index ?>" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="quantity_<?php echo $index ?>" value="<?php echo $row['quantity']; ?>">
                    <tr>
                        <td>
                            <?php echo $row['bike_name']; ?>
                        </td>
                        <td>$
                            <?php echo $row['price']; ?>
                        </td>
                        <td>
                            <?php echo $row['quantity']; ?>
                        </td>
                        <td>$
                            <?php echo $total; ?>
                        </td>
                        </td>
                    </tr>

                    <?php
                    $index++;
                } ?>
                <input type="hidden" name="total_price" value="<?php echo $total_price; ?>" />

                <tr>
                    <td colspan="3" align="right"><strong>Total:</strong></td>
                    <td><strong>$
                            <?php echo $total_price; ?>
                        </strong>
                    </td>
                </tr>
            </tbody>
        </table>

        <button type="submit" name="paypal_checkout" class="pay_btn">
            Pay
            <ion-icon name="logo-paypal"></ion-icon>
        </button>
    </form>
</div>