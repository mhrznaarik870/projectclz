<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>A.D MOTORS - Admin Panel</title>

    <!-- Bootstrap and icon links -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.png" />
    <link rel="stylesheet" href="../bikedetails/assets/css/style.css" />
    <link rel="stylesheet" href="./admin_style.css">

</head>

<body>
    <header>

        <!-- navigation bar -->

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brands" href="./index.php">
                    <img class="logo" src="../assets/img/logo.png" alt="logo" />
                    A.D. MOTORS
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="loading-overlay">
                    <div class="loading-spinner">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto my-2 my-lg-0">

                                <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Products
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="view_prods.php">View Products</a></li>
                                    <li><a class="dropdown-item" href="add_products.php">Add Products</a></li>
                                </ul>
                                <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Orders
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="order_list.php">Order Lists</a></li>
                                    <li><a class="dropdown-item" href="cancelled.php">Cancelled Orders</a></li>
                                </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="customer.php">Customers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="reviews.php">Reviews</a>
                                </li>
                            </ul>
                            <?php if (isset($_SESSION['admin_username'])): ?>
                                <div class="user-btn">
                                    <a class="username" href="./logout.php">
                                        <ion-icon name="log-out"></ion-icon>
                                        <?php echo $_SESSION['admin_username']; ?>
                                    </a>
                                </div>
                            <?php else: ?>
                                <button class="btnlogin-popup" onclick="redirectToIndex()">
                                    <span>
                                        <ion-icon name="log-in"></ion-icon>
                                    </span>
                                    Login
                                </button>

                                <script>
                                    function redirectToIndex() {
                                        window.location.href = 'index.php';
                                    }
                                </script>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>