<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css " />

</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">AD iSecure</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="/admotors/backend/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/admotors/backend/signup.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admotors/backend/logout.php">Logout</a>
          </li>



        </ul>

      </div>
    </div>
  </nav>


  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>SUCCESS!!</strong>Your account is created. Now you can login to our WebSite.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <div class="container my-4">
    <h1 class="text-center"><u> Signup to Our Site</u></h1> <br>

    <form action="signup.php" method="post" style="display: flex ;    align-items: center;   flex-direction: column;">
      <div class="mb-3 col-md-4">
        <label for="email" class="form-label">Enter your E-mail address:</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text text-white  ">We'll never share your information with anyone else.</div>
      </div>
      <div class="mb-3 col-md-4">
        <label for="password" class="form-label">Enter a Password:</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3 col-md-4">
        <label for="cpassword" class="form-label">Confirm Password:</label>
        <input type="password" class="form-control" id="cpassword" name="cpassword">
        <div id="cpassword" class="form-text text-white ">Make sure that both of the passwords are correct.</div>
      </div>

      <div class="mb-3 col-md-4">
        <label for="mnumber" class="form-label">Enter your mobile number:</label>
        <input type="mnumber" class="form-control" id="mnumber" name="mnumber">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
    integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i"
    crossorigin="anonymous"></script>
</body>

</html>


<?php
require_once 'partials/_dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $phoneno = $_POST["mnumber"];
}