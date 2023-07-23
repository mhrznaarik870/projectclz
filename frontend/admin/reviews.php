<?php
session_start();
include('../../backend/partials/_dbconnect.php');
?>
<?php if (!isset($_SESSION['admin_username'])): ?>
    <script>
        // Check if the user is not logged in, then show the alert
        alert("Please log in to our website to access this page.");
        // Redirect to index.php after the alert is displayed
        window.location.href = "index.php";
    </script>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
</head>

<body>
    <header>
        <?php include('navbar.php'); ?>
    </header>

    <section class="bike-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Client Reviews</h2>
                    <?php
                    $sql = "SELECT * FROM reviews";
                    $result = $conn->query($sql);

                    if ($result === false) {
                        echo "Error: " . $conn->error;
                    } elseif ($result->num_rows === 0) {
                        echo "No clients found.";
                    } else {
                        echo "<table class='table'>
                                <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Comments</th>
                                <th>Feedback Date</th>
                                </tr>";

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["comments"] . "</td>
                                    <td>" . $row["feedback_date"] . "</td>
                                </tr>";
                        }

                        echo "</table>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>