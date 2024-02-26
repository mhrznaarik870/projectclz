<?php
session_start();
include('./partials/_dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    // Validate the required fields
    if (empty($name) || empty($email) || empty($comments)) {
        $_SESSION['error_message'] = "Please fill in all required fields.";
    } else {
        // Insert the data into the new table
        $sql = "INSERT INTO reviews (name, email, comments, feedback_date) 
                VALUES ('$name', '$email', '$comments', NOW())";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success_message'] = "Form submitted successfully!";
        } else {
            $_SESSION['error_message'] = "Failed to submit the form. Error: " . $conn->error;
        }
    }

    header("Location: ../frontend/contactUs.php");
    exit();
}
?>