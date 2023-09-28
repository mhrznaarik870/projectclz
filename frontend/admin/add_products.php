<?php session_start() ?>
<?php
if (!isset($_SESSION['admin_username'])): ?>
    <script>
        alert("Please log into our website to access this page. ");
        window.location.href = "./index.php";
    </script>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Products</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bikedetails/assets/css/prostyle.css">
    <script src="../bootstrap/css/bootstrap.min.css"></script>

</head>

<body>
    <header>
        <?php include('navbar.php') ?>
    </header>

    <section>
        <div class="add-procard">
            <form action="../../backend/add_prods.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="bike-name">Bike Name:</label>
                    <input type="text" name="bike_name" placeholder="Name of the bike"
                        title="Enter the name of the bike" required>
                </div>
                <div class="mb-3">
                    <label for="specs">Specifications:</label>
                    <textarea name="specs[]" rows="4" placeholder="Add Specification"
                        title="Enter the specifications of bike" required></textarea>
                </div>
                <div class=" mb-3">
                    <label for="description">Description:</label>
                    <textarea name="description" placeholder="DESCRIPTION" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="rating">Rating:</label>
                    <input type="number" name="rating" step="0.1" min="0" max="5" placeholder="Rate between 0-5"
                        required>
                </div>
                <div class="mb-3">
                    <label for="old_price">Old Price:</label>
                    <input type="text" name="old_price" placeholder="Initial Price" pattern="[0-9]+"
                        title="Please enter the positive value!" required>
                </div>
                <div class="mb-3">
                    <label for="new_price">New Price:</label>
                    <input type="text" name="new_price" placeholder="Final Price" pattern="[0-9]+"
                        title="Please enter the positive value!" required>
                </div>
                <div class="mb-3">
                    <label for="bike-image">Bike Image:</label>
                    <input type="file" name="bike_image" title="Please enter the correct file format!" required>
                </div>
                <div class="mb-3">
                    <label for="bike-gif">Bike GIF:</label>
                    <input type="file" name="bike_gif" title="Please use correct file format!" required>
                </div>
                <button type="submit" name="add_bikes" class="btn btn-primary">Add Product</button>
                <div class="mt-3">
                    <a class=" btn0  " href="./view_prods.php">Check For The Added Products</a>
                </div>
            </form>
        </div>
    </section>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>

</body>

</html>