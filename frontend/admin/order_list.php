<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <header>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            class="stylesheet">
        <link rel="stylesheet" href="../../frontend/bootstrap/css/bootstrap.min.css" />
        <link rel="icon" type="image/x-icon" href="../../frontend/assets/img/logo.png" />
        <link rel="stylesheet" href="../../frontend/assets/css/style.css" />

        <?php
        include_once('../../frontend/content-header.php');
        ?>
    </header>

    <section class="bike-details">
        <!-- Your bike details section content -->

        <!-- Form and table for displaying orders -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    // Display the ordered items in a table
                    $servername = "localhost";
                    $username_db = "root";
                    $password_db = "";
                    $dbname = "admotors";

                    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

                    // Check the connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM orders";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table>
                                <tr>
                                    <th>Order Number</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Ordered Bike</th>
                                    <th>Order Date</th>
                                </tr>";

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["orderno"] . "</td>
                                    <td>" . $row["username"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["phoneno"] . "</td>
                                    <td>" . $row["ordered_bike"] . "</td>
                                    <td>" . $row["ordered_date"] . "</td>
                                </tr>";
                        }

                        echo "</table>";
                    } else {
                        echo "No orders found.";
                    }

                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap and JavaScript links -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</body>


</html>