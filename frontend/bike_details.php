<?php
session_start();
include('navbar.php');
include('../backend/partials/_dbconnect.php');

if (isset($_GET['bike_id'])) {
    $bikeID = $_GET['bike_id'];
    $sql = "SELECT * FROM products WHERE bike_id = $bikeID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $bikeName = $row['bike_name'];
        $specs = $row['specs'];
        $description = $row['description'];
        $rating = $row['rating'];
        $oldPrice = $row['old_price'];
        $newPrice = $row['new_price'];
        $bikeImage = $row['bike_image'];
    } else {
        echo "Bike not found.";
    }
} else {
    echo "Invalid bike ID.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php echo $bikeName; ?> - A.D MOTORS
    </title>
    <!-- Bootstrap and icon links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./bikedetails/assets/css/prostyle.css" />
</head>

<body>
    <header>
        <?php include('navbar.php'); ?>
    </header>

    <section class="bike-details" style="margin-top: 90px;">
        <div class=" container">
            <div class="row">
                <div class="col-md-6 mt-12 proimg">
                    <div class="proimg">
                        <img src="./bikedetails/assets/img/products/<?php echo $bikeImage; ?>"
                            alt="<?php echo $bikeName; ?>" class="img-fluid" />
                    </div>
                    <div class="purchase-info">
                        <h2>
                            <?php echo $bikeName; ?>
                        </h2>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>
                                <?php echo $rating; ?>
                            </span>
                        </div>
                        <p>
                            <?php echo $description; ?>
                        </p>
                        <div class="price-info">
                            <div class="old-price">Old Price: <span>Rs.
                                    <?php echo $oldPrice; ?> /-
                                </span></div>
                            <div class="new-price">New Price: <span>Rs.
                                    <?php echo $newPrice; ?> /-
                                </span></div>
                        </div>
                        <form action="../backend/orders.php?bike_id=<?php echo $bikeID; ?>" method="post">
                            <div class="purchase-info">
                                <button type="submit" name="purchased" class="btn">
                                    Buy Now
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 specs">
                    <h4>Specifications</h4>
                    <ul>
                        <li>Engine:
                            <?php echo $specs; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include('./footer.php'); ?>

    <!-- Bootstrap and JavaScript links -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>