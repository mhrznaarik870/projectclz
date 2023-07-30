<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Products</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
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
                    <input type="text" name="bike_name" placeholder="Name of the bike.">
                </div>
                <div class="mb-3">
                    <label for="specs">Specifications:</label>
                    <textarea name="specs[]" rows="4"
                        placeholder=" PLZ USE COMMA when one line of specification list is over."></textarea>
                </div>
                <div class=" mb-3">
                    <label for="description">Description:</label>
                    <textarea name="description" placeholder="DESCRIPTION"></textarea>
                </div>
                <div class="mb-3">
                    <label for="rating">Rating:</label>
                    <input type="number" name="rating" step="0.1" min="0" max="5" placeholder="Rate between 0-5">
                </div>
                <div class="mb-3">
                    <label for="old_price">Old Price:</label>
                    <input type="text" name="old_price" placeholder="Initial Price">
                </div>
                <div class="mb-3">
                    <label for="new_price">New Price:</label>
                    <input type="text" name="new_price" placeholder="Final Price">
                </div>
                <div class="mb-3">
                    <label for="bike-image">Bike Image:</label>
                    <input type="file" name="bike_image">
                </div>
                <div class="mb-3">
                    <label for="bike-gif">Bike GIF:</label>
                    <input type="file" name="bike_gif">
                </div>
                <button type="submit" name="add_bikes">Add Product</button>
            </form>
        </div>
    </section>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>

</body>

</html>