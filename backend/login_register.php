<?php
session_start();
require('./partials/_dbconnect.php');

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
            } else {
                // Password does not match
                echo "
                <script>
                alert('Incorrect Password!');
                window.location.href='../frontend/index.php';
                </script>
                ";
            }
        } else {
            // No user found with the provided email or username
            echo "
            <script>
            alert('User not found!');
            window.location.href='../frontend/index.php';
            </script>
            ";
        }
    } else {
        // Error in running the query
        echo "
        <script>
        alert('Cannot Run Query');
        window.location.href='../frontend/index.php';
        </script>
        ";
    }
}


#for registration
if (isset($_POST['register'])) {
    $user_exist_query = "SELECT * FROM `clients`   WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result = mysqli_query($conn, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $result_fetch = mysqli_fetch_assoc($result);

            #error for username or email already registered
            if ($result_fetch['username'] == $_POST['username']) {
                echo "
                <script>
                alert('$result_fetch[username] - Username Already Exist');
                window.location.href='../frontend/index.php';
                </script>
                ";

            } else {
                echo "
                <script>
                alert('$result_fetch[email] - Email Already Exist');
                window.location.href='../frontend/index.php';
                </script>
                ";
            }

        } else {
            #it will be executed if no one has taken username or the email
            // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $query = "INSERT INTO `clients`( `username`, `password`, `email`, `phoneno`, `Reg_date`) VALUES ('$_POST[username]','$_POST[password]','$_POST[email]','$_POST[phoneno]', current_timestamp())";
            if (mysqli_query($conn, $query)) {
                #if data inserted successfully
                echo "
                <script>
                alert('Registration Success!! Plz verify your email address by visiting gmail!');
                window.location.href='../frontend/index.php';
                </script>
                ";
            } else {
                #if data cannot be inserted
                echo "
                    <script>
                    alert(('Cannot Run Query');
                    window.location.href='../frontend/index.php';
                    </script>
                    ";
            }
        }
    } else {
        echo "
        <script>
        alert(('Cannot Run Query');
        window.location.href='../frontend/index.php';
        </script>
        ";
    }
}

?>