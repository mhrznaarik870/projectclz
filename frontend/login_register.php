<?php
require('../backend/partials/_dbconnect.php');

# for registration
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['register'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];

    $query = "SELECT * FROM `clients` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 0) {
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['email'] == $email) {
                echo "
                echo '<script>';
                echo 'alert('$result_fetch[email] - The email already exists. Please reset and try to login');';
                echo 'window.location.href='index.php';';
                echo '</script>';
                
                ";
            } else {
                $sql = "INSERT INTO `clients` (`name`, `password`, `email`, `phoneno`, `Reg_date`) VALUES ('$name', '$password', '$email','$phoneno', current_timestamp())";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>";
                    echo "alert('Registration Successful!!');";
                    echo "window.location.href='index.php';";
                    echo "</script>";
                } else {
                    echo "
                    <script>
                    alert('Registration Failed');
                    window.location.href='index.php';
                    </script>
                    ";
                }
            }
        } else {
            echo "
            <script>
            alert('Email or Username Not Registered');
            window.location.href='index.php';
            </script>
            ";
        }
    } else {
        // Display error message
        echo "Error inserting data: " . mysqli_error($conn);
    }
}
?>