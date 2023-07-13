<?php
session_start();
require('./partials/_dbconnect.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email, $v_code)
{
    require("phpmailer/PHPMailer.php");
    require("phpmailer/SMTP.php");
    require("phpmailer/Exception.php");

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'mhrznaa.980@gmail.com'; // SMTP username
        $mail->Password = 'mhrznaarik123'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
        $mail->Port = 465; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        // Recipients
        $mail->setFrom('mhrznaa.980@gmail.com', 'AD. Motors');
        $mail->addAddress($email); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'EMAIL-VERIFICATION from AD. Motors';
        $mail->Body = "Thanks for the registration!!
            <b>Click on the link below to verify the email address.</b>
            <a href='http://localhost/projectclz/verify.php?email=$email&v_code=$v_code'>Click to verify</a>";
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

# For login
if (isset($_POST['login'])) {
    $email_username = $_POST['email_username'];
    $password = $_POST['password'];

    // Check if the email or username exists in the database
    $query = "SELECT * FROM `clients` WHERE `email`='$email_username' OR `username`='$email_username'";
    $result_fetch = mysqli_query($conn, $query);

    if ($result_fetch) {
        if (mysqli_num_rows($result_fetch) == 1) {
            $result = mysqli_fetch_assoc($result_fetch);

            if ($password === $result['password']) {
                // Password matched
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $result['username'];
                header("location: ../frontend/dashboard.php");
                exit();
            } else {
                // Password does not match
                echo "
                    <script>
                    alert('Incorrect Password!');
                    window.location.href='../frontend/index.php';
                    </script>
                    ";
                exit();
            }
        } else {
            // No user found with the provided email or username
            echo "
                <script>
                alert('User not found!');
                window.location.href='../frontend/index.php';
                </script>
                ";
            exit();
        }
    } else {
        // Error in running the query
        echo "
            <script>
            alert('Cannot Run Query');
            window.location.href='../frontend/index.php';
            </script>
            ";
        exit();
    }
}

# For registration
if (isset($_POST['register'])) {


    $user_exist_query = "SELECT * FROM `clients` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result = mysqli_query($conn, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $result_fetch = mysqli_fetch_assoc($result);

            // Error for username or email already registered
            if ($result_fetch['username'] == $_POST['username']) {
                echo "
                    <script>
                    alert('$result_fetch[username] - Username Already Exist');
                    window.location.href='../frontend/index.php';
                    </script>
                    ";
                exit();
            } else {
                echo "
                    <script>
                    alert('$result_fetch[email] - Email Already Exist');
                    window.location.href='../frontend/index.php';
                    </script>
                    ";
                exit();
            }
        } else {
            // It will be executed if no one has taken the username or the email
            $v_code = bin2hex(random_bytes(12));
            $query = "INSERT INTO `clients`(`username`, `password`, `email`, `phoneno`, `Reg_date`, `verification_code`, `is_verified`) 
                VALUES ('$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[phoneno]', current_timestamp(), '$v_code', '0')";

            if (mysqli_query($conn, $query) && sendMail($_POST['email'], $v_code)) {
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['phoneno'] = $_POST['phoneno'];


                // If data inserted successfully
                echo "
                    <script>
                    alert('Registration Success!! Please verify your email address by visiting your email inbox!');
                    window.location.href='../frontend/index.php';
                    </script>
                    ";
                exit();
            } else {
                // If data cannot be inserted
                echo "
                        <script>
                        alert('SERVER DOWN!! Please try again later.');
                        window.location.href='../frontend/index.php';
                        </script>
                        ";
                exit();
            }
        }
    } else {
        echo "
            <script>
            alert('Cannot Run Query');
            window.location.href='../frontend/index.php';
            </script>
            ";
        exit();
    }
}
?>