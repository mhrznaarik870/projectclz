<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css " />



</head>

<body class="body">

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">AD iSecured</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" href="/admotors/backend/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admotors/backend/signup.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admotors/backend/logout.php">Logout</a>
          </li>



        </ul>

      </div>
    </div>
  </nav>


  <section class="main text-white  align-items: center;" style="background-image: url('./img/bg.jpg') ">
    <div class="blur"></div>
    <div class="container ">
      <div class="row justify-content-center">
        <!-- <div class="col-md-5"> -->
        <div style="text-align: center ; display:block; " class="banner-content col-md-6 ">
          <div class="mb-3 col-md-6 mx-auto">
            <label for="username" class="form-label">Enter your Username:</label>
            <input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp"
              placeholder="USERNAME">

          </div>
          <div class="mb-3 col-md-6 mx-auto">
            <label for="password" class="form-label">Enter your Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="PASSWORD">
          </div>
          <div class="mt-6 d-flex align-items-center justify-content-center">
            <div class="uk-flex me-4">
              <a class="login" href="/admotors/backend/login.php">Login</a>
            </div>
            <a class="signup" href="/admotors/backend/signup.php" style="color: white; font-size: 20px">
              Signup
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


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