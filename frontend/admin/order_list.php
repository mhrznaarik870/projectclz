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
    <title>Orders</title>
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
                    // Check for delete message
                    if (isset($_SESSION['delete_message'])) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                ' . $_SESSION['delete_message'] . '
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                        unset($_SESSION['delete_message']);
                    } elseif (isset($_SESSION['success_message'])) {
                        // Check for success message
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                ' . $_SESSION['success_message'] . '
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                        unset($_SESSION['success_message']);
                    } elseif (isset($_SESSION['error_message'])) {
                        // Check for error message
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                ' . $_SESSION['error_message'] . '
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                        unset($_SESSION['error_message']);
                    }
                    ?>
                    <?php
                    $sql = "SELECT * FROM orders";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table class='table'>
                                <tr>
                                    <th>Order Number</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Ordered Bike</th>
                                    <th>Order Date</th>
                                    <th>Action</th> <!-- New column for action buttons -->
                                </tr>";

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["orderno"] . "</td>
                                    <td>" . $row["username"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["phoneno"] . "</td>
                                    <td>" . $row["ordered_bike"] . "</td>
                                    <td>" . $row["ordered_date"] . "</td>
                                    <td>
                                        <a href=\"edit.php?orderno=" . $row["orderno"] . "\" style='color: #ffffff; background-color: #432874;' class='btn btn-sm '>Edit</a>
                                        <a href=\"delete.php?orderno=" . $row["orderno"] . "\" style='color: #ffffff; background-color: #842029;' class='btn btn-sm mt-2'>Delete</a>
                                    </td>
                                </tr>";
                        }

                        echo "</table>";
                    } else {
                        echo "No orders found.";
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