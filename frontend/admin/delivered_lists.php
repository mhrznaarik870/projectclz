<?php
session_start();
include('../../backend/partials/_dbconnect.php');
?>
<?php if (!isset($_SESSION['admin_username'])): ?>
    <script>
        alert("Please log in to our website to access this page.");
        window.location.href = "index.php";
    </script>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed Deliveries</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
</head>

<body>
    <header>
        <?php
        include('navbar.php');
        ?>
    </header>

    <section class="bike-details">
        <div class="container">
            <div class="row">
                <div>
                    <?php
                    $sql = "SELECT * FROM delivery_completed";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table class='table'>
                                <tr>
                                    <th>Order Number</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Ordered Bike</th>
                                    <th>Ordered Date</th>
                                    <th>Delivered Date</th>
                                    <th>Delivered Comments</th>
                                </tr>";

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $row["orderno"] . "</td>
                            <td>" . $row["username"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["phoneno"] . "</td>
                            <td>" . $row["ordered_bike"] . "</td>
                            <td>" . $row["ordered_date"] . "</td>
                            <td>" . $row["delivered_date"] . "</td>
                            <td>" . $row["delivered_comments"] . "</td>
                          </tr>";
                        }

                        echo "</table>";
                    } else {
                        echo "No completed deliveries found.";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>