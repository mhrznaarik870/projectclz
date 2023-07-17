<!-- navbar.php -->
<script src="./script.js"></script>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brands" href="../index.php">
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
                        <li
                            class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
                            <a class="nav-link" aria-current="page" href="./index.php">HOME</a>
                        </li>
                        <li
                            class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'trending.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="./trending.php">TRENDING</a>
                        </li>
                        <li
                            class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'store.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="./store.php">STORE</a>
                        </li>
                        <li
                            class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'contactUs.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="./contactUs.php">CONTACT US</a>
                        </li>
                    </ul>
                    <?php if (isset($_SESSION['username'])): ?>
                        <div class="dropdown">
                            <button class="user-btn dropdown-toggle dropdown-custom" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username']; ?>
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