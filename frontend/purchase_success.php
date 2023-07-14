<?php
session_start();
include_once('../backend/partials/_dbconnect.php');

// Check if the user is not logged in
if (!isset($_SESSION['username']) || $_SESSION['logged_in'] !== true) {
    // Redirect to the login page
    header("Location: ../frontend/login.php");
    exit();
}

// Get the logged-in user's username
$username = $_SESSION['username'];

// Retrieve the purchased bike details from the session or database
if (isset($_SESSION['ordered_bike'])) {
    $ordered_bike = $_SESSION['ordered_bike']; // Example: You need to set this session variable after successful purchase
} else {
    // No bike details found
    echo '<script>alert("No bike details found."); window.location.href = "../frontend/index.php";</script>';
    exit();
}

// Query the database to retrieve the bike details
$stmt = $conn->prepare("SELECT * FROM bikes WHERE bike_id = ?");
$stmt->bind_param("s", $ordered_bike);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $bike_image = $row['bike_image'];
} else {
    // Bike details not found
    echo '<script>alert("Bike details not found."); window.location.href = "../frontend/index.php";</script>';
    exit();
}

// Close the statement
$stmt->close();

// Clear the purchased bike details from the session
unset($_SESSION['ordered_bike']);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Success</title>
    <style>
        /* CSS for the animated website */
        body {
            background-color: #111;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .bike-photo {
            max-width: 600px;
            margin: 0 auto;
            padding: 50px;
            animation: rotate 5s infinite linear;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        h1 {
            font-size: 36px;
            margin-top: 30px;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .success-message {
            animation: fade-in 2s;
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Celebration Effects */
        .celebration {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none;
        }

        .blast-effect {
            width: 100px;
            height: 100px;
            background-color: #ffcc00;
            border-radius: 50%;
            animation: blast 2s ease-out;
        }

        @keyframes blast {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Additional CSS for cool effects */
        .celebration .blast-effect {
            animation-delay: 0.5s;
        }
    </style>
</head>

<body>
    <h1>Congratulations,
        <?php echo $username; ?>!
    </h1>
    <div class="bike-photo">
        <img src="<?php echo $bike_image; ?>" alt="Bike Image">
        <div class="celebration">
            <div class="blast-effect"></div>
        </div>
    </div>
    <p>Thank you for your purchase!</p>
</body>

</html>