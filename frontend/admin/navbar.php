<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>A.D MOTORS - Admin Dashboard</title>

    <!-- Bootstrap and icon links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        class="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png" />
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
    <header style="background-color: rgba(0 0 0 / 50%); backdrop-filter: blur(8px);">

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
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Order Lists</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Customers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Reviews</a>
                                </li>
                            </ul>
                            <?php if (isset($_SESSION['admin_username'])): ?>
                                <div class="dropdown">
                                    <button class="user-btn dropdown-toggle dropdown-custom" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php echo $_SESSION['admin_username']; ?>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                    </ul>
                                </div>
                            <?php else: ?>
                                <button style="--clr:#0FF0FC" class="btnlogin-popup" data-bs-toggle="modal"
                                    data-bs-target="#loginModal">Login</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>