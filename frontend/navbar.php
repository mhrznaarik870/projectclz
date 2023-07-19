<!-- navbar.php -->
<script src="./js/script.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

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
                        <div class="dropdown" id="userDropdown">
                            <a class="user-btn" href="logout.php" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Logout">
                                <?php echo $_SESSION['username']; ?>
                                <ion-icon name="log-out"></ion-icon>
                            </a>
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

<script>
    function showLogoutAlert() {
        if (confirm("Are you sure you want to logout?")) {
            window.location.href = "logout.php";
        }
    }
</script>