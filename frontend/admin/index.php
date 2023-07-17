<?php SESSION_START() ?>
<?php include('navbar.php') ?>

</header>

<div class="big-wrapper">
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>

        <!-- Admin dashboard page -->
        <div class="admin-dashboard">
            <div class="container">
                <?php if (isset($_SESSION['admin_username'])): ?>
                    <h1>Welcome,
                        <?php echo $_SESSION['admin_username']; ?>
                    </h1>
                    <!-- Add your admin dashboard content here -->
                    <!-- Example content -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Manage Users</h5>
                                    <p class="card-text">Add, edit, or delete user accounts.</p>
                                    <a href="#" class="btn btn-primary">Go to User Management</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Manage Products</h5>
                                    <p class="card-text">Add, edit, or delete products.</p>
                                    <a href="#" class="btn btn-primary">Go to Product Management</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of example content -->
                <?php else: ?>
                    <h1>Admin Login</h1>
                    <form action="login_process.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>