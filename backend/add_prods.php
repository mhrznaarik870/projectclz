<?php
include('./partials/_dbconnect.php');

if (isset($_POST['add_bikes'])) {
    // Get form data
    $bikeName = $_POST['bike_name'];
    $specs = implode(', ', $_POST['specs']);
    $description = $_POST['description'];
    $rating = $_POST['rating'];
    $oldPrice = $_POST['old_price'];
    $newPrice = $_POST['new_price'];

    // File Uploads
    $imageFileName = $_FILES['bike_image']['name'];
    $imageTmpName = $_FILES['bike_image']['tmp_name'];
    $gifFileName = $_FILES['bike_gif']['name'];
    $gifTmpName = $_FILES['bike_gif']['tmp_name'];

    // Define target directories
    $imageTargetDir = '../frontend/bikedetails/assets/img/products/';
    $gifTargetDir = '../frontend/bikedetails/assets/gif/';

    $imageFullPath = $imageTargetDir . $imageFileName;
    $gifFullPath = $gifTargetDir . $gifFileName;

    if (
        move_uploaded_file($imageTmpName, $imageFullPath) &&
        move_uploaded_file($gifTmpName, $gifFullPath)
    ) {
        $sql = "INSERT INTO products (bike_name, specs, description, rating, old_price, new_price, bike_image, gif_path) 
            VALUES ('$bikeName', '$specs', '$description', '$rating', '$oldPrice', '$newPrice', '$imageFullPath', '$gifFullPath')";

        // Execute the SQL query and handle errors
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Product added successfully!");</script>';
            echo '<script>window.location.href = "add_products.php";</script>';

        } else {
            $errorLog = fopen("error_log.txt", "a");
            fwrite($errorLog, "Database Error: " . $sql . "\n" . $conn->error . "\n");
            fclose($errorLog);

            // Display an error message using JavaScript
            echo '<script>alert("Failed to add the product. Please try again later.");</script>';
        }
    } else {
        // Log the file upload error to a file for debugging purposes
        $errorLog = fopen("error_log.txt", "a");
        fwrite($errorLog, "File Upload Error: Failed to move uploaded files to target directories.\n");
        fclose($errorLog);

        // Debug: Print the error message
        echo "<p>File Upload Error: Failed to move uploaded files to target directories.</p>";
    }
}
?>