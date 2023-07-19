<?php session_start() ?>
<?php include('navbar.php') ?>
<section class="container">
    <div class="cards">
        <div class="admin  text-center align-items-center">
            <h2>Login</h2>
            <img src="../assets/img/logo.png" alt="logo" class="loginico" />
            <form action="../../backend/admin_login.php" method="POST">

                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" id="username" name="username" placeholder=" Username" required>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock"></ion-icon></span>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>

                <div class="login text-center">
                    <button type="submit" class="btn" name="login">Login</button>
                </div>

            </form>
        </div>
    </div>
</section>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>