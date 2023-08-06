<?php
session_start();
include('navbar.php');
include('../backend/partials/_dbconnect.php');
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>A.D MOTORS</title>

    <!-- Bootstrap and icon links -->
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        class="stylesheet">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.png" />
    <link rel="stylesheet" href="./assets/css/style.css" />

</head>
<?php include_once('content-header.php'); ?>

<section class="more_bikes">
    <div class="container py-5">
        <h2 class="mt-5" align="center">The more bikes</h2>
        <h2 align="center">Available in the store!!</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 py-5">
            <?php
            while ($row = $result->fetch_assoc()) {
                $bikeID = $row['bike_id'];
                $bikeName = $row['bike_name'];
                $rating = $row['rating'];
                $newPrice = $row['new_price'];
                $bikeImage = $row['bike_image'];
                ?>
                <div class="col mb-4">
                    <a href="bike_details.php?bike_id=<?php echo $bikeID; ?>" class="card-link">
                        <div class="card">
                            <img src="./bikedetails/assets/img/products/<?php echo $bikeImage; ?>" class="card-img-top"
                                alt="Bike Image">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $bikeName; ?>
                                </h5>
                                <p class="card-text">Rating:
                                    <?php echo $rating; ?>
                                </p>
                                <p class="card-text">Price:
                                    <?php echo $newPrice; ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

</html>