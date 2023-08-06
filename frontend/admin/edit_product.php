<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add your head content -->
</head>

<body>
    <header>
        <?php include('navbar.php') ?>
    </header>

    <div class="container">
        <?php
        include('../../backend/partials/_dbconnect.php');

        if (isset($_GET['bike_id'])) {
            $bikeID = $_GET['bike_id'];
            $sql = "SELECT * FROM products WHERE bike_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $bikeID);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $bikeName = $row['bike_name'];
                $specs = $row['specs'];
                $description = $row['description'];
                $rating = $row['rating'];
                $oldPrice = $row['old_price'];
                $newPrice = $row['new_price'];
                $bikeImage = $row['bike_image'];

                // Display the product details in a form for editing
                ?>
                <div class="row">
                    <h2 class="text-center mb-5">Edit
                        Product of:
                        <?php echo $bikeName; ?>
                    </h2>
                    <div class="col-md-6">
                        <form action="" method="post" id="updateForm">
                            <div class="mb-3">
                                <label for="bikeName">Bike Name:</label>
                                <input type="text" name="bikeName" value="<?php echo $bikeName; ?>" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="specs">Specs:</label>
                                <textarea name="specs" rows="6" class="form-control"><?php echo $specs; ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="rating">Rating:</label>
                                <input type="text" name="rating" value="<?php echo $rating; ?>" class="form-control">
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="description">Description:</label>
                            <textarea name="description" rows="6" class="form-control"><?php echo $description; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="oldPrice">Old Price:</label>
                            <input type="text" name="oldPrice" value="<?php echo $oldPrice; ?>" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="newPrice">New Price:</label>
                            <input type="text" name="newPrice" value="<?php echo $newPrice; ?>" class="form-control">
                        </div>
                    </div>
                    <!-- Add any other fields you want to edit -->
                    <div class="col-md-12 text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Update Product</button>
                    </div>
                    </form>
                </div>
                <?php
            } else {
                echo "Product not found.";
            }
        } else {
            echo "Invalid product ID.";
        }

        // Check if the form is submitted and update the product in the database
        if (isset($_POST['submit'])) {
            $bikeName = $_POST['bikeName'];
            $specs = $_POST['specs'];
            $description = $_POST['description'];
            $rating = $_POST['rating'];
            $oldPrice = $_POST['oldPrice'];
            $newPrice = $_POST['newPrice'];

            // Prepare the update query with placeholders
            $sql = "UPDATE products SET bike_name=?, specs=?, description=?, rating=?, old_price=?, new_price=? WHERE bike_id=?";
            $stmt = $conn->prepare($sql);

            // Bind the parameters to the prepared statement
            $stmt->bind_param('ssssddi', $bikeName, $specs, $description, $rating, $oldPrice, $newPrice, $bikeID);

            // Execute the update query
            if ($stmt->execute()) {
                echo "<script>alert('Success! The product is updated successfully'); window.location.href = 'bike_details.php?bike_id=$bikeID';</script>";
            } else {
                echo "Error updating product: " . $conn->error;
            }
        }

        $conn->close();
        ?>
    </div>

</body>

</html>