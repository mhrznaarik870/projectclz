<?php
require('C:\xampp\htdocs\projectclz\backend\partials\_dbconnect.php');
?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="./index.php">
            <img class="logo" src="./assets/img/logo.png" alt="logo" />
            A.D. MOTORS
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="loading-overlay">
            <div class="loading-spinner">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./trending.php">TRENDING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./store.php">STORE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contactUs.php">CONTACT US</a>
                        </li>
                    </ul>
                    <div class="login-register">
                        <?php
                        // Assuming you have a database connection and the necessary query to retrieve the username
                        // Retrieve the username from the database
                        $username = ""; // Initialize the variable
                        
                        // Example query to retrieve the username from the database
                        // Modify this query based on your database structure and table names
                        // Assuming you have a table named "clients" with a column named "username"
                        // And you have a logged-in user ID stored in $_SESSION['user_id']
                        $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
                        $query = "SELECT username FROM clients WHERE sno = $userId";

                        // Execute the query and fetch the username
                        $result = mysqli_query($conn, $query);
                        if ($result && mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $username = $row['username'];
                        }
                        ?>

                        <?php if (isset($_SESSION['user_id'])): ?>
                            <div class="login-register">
                                <button class="btnlogin-popup" href="#" class="login-link">
                                    <?php echo $username; ?>
                                </button>
                            </div>
                        <?php else: ?>
                            <div class="login-register">
                                <button class="btnlogin-popup" href="#" class="login-link">Login</button>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>