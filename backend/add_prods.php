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

    $imageTargetDir = '../frontend/bikedetails/assets/img/products/';
    $gifTargetDir = '../frontend/bikedetails/assets/gif/';

    $imageFullPath = $imageFileName;
    $gifFullPath = './bikedetails/assets/gif/' . $gifFileName;

    if (
        move_uploaded_file($imageTmpName, $imageTargetDir . $imageFileName) &&
        move_uploaded_file($gifTmpName, $gifTargetDir . $gifFileName)
    ) {
        $sql = "INSERT INTO products (bike_name, specs, description, rating, old_price, new_price, bike_image, gif_path) 
            VALUES ('$bikeName', '$specs', '$description', '$rating', '$oldPrice', '$newPrice', '$imageFullPath', '$gifFullPath')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Product added successfully!");</script>';
            echo '<script>window.location.href = "../frontend/admin/view_prods.php";</script>';

        } else {
            $errorLog = fopen("error_log.txt", "a");
            fwrite($errorLog, "Database Error: " . $sql . "\n" . $conn->error . "\n");
            fclose($errorLog);

            echo '<script>alert("Failed to add the product. Please try again later.");</script>';
        }
    } else {
        $errorLog = fopen("error_log.txt", "a");
        fwrite($errorLog, "File Upload Error: Failed to move uploaded files to target directories.\n");
        fclose($errorLog);

        echo "<p>File Upload Error: Failed to move uploaded files to target directories.</p>";
    }
}
?>