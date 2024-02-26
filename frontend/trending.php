<?php
session_start();
include_once('../backend/partials/_dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>A.D MOTORS</title>

  <!-- Bootstrap and icon links -->
  <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    class="stylesheet">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
  <link rel="icon" type="image/x-icon" href="./assets/img/logo.png" />
  <link rel="stylesheet" href="./assets/css/style.css" />

</head>

<?php include_once('content-header.php'); ?>

<!-- Trending Bikes available -->
<section class="trending">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-5 m-auto text-center">
        <h4>
          <span> The Best Motorbikes </span><br />
          <span> Available on the Market!!</span>
        </h4>
        <br />
      </div>
      <div class="row gy-4" style="margin-left: initial;">

        <div class="col-lg-3 text-center">
          <div class="card">
            <a href="./bikedetails/01.php">
              <div class="card-body">
                <img src="./assets/img/products/01.jpg" class="img-fluid" />
                <p size="3" align="center">Kawasaki Ninja H2</p>
                <p>Rs. 90 lakhs - 1 crore</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 text-center">
          <div class="card">
            <a href="./bikedetails/02.php">
              <div class="card-body">
                <img src="./assets/img/products/02.jpg" class="img-fluid" />
                <p size="3" align="center">Royal Enfield Classic 350</p>
                <p>Rs. 7.75 lakhs - 8 lakhs</p>
              </div>
          </div>
          </a>
        </div>

        <div class="col-lg-3 text-center">
          <div class="card">
            <a href="./bikedetails/03.php">
              <div class="card-body">
                <img src="./assets/img/products/03.jpg" class="img-fluid" />
                <p size="3" align="center">Yamaha MT-15 Version-2.0</p>
                <p>Rs. 2.75 lakhs - 3 lakhs</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card">
            <a href="./bikedetails/04.php">
              <div class="card-body">
                <img src="./assets/img/products/04.jpg" class="img-fluid" />
                <p size="3" align="center">Kawasaki Ninja ZX-10R</p>
                <p>Rs. 20.75 lakhs - 30 lakhs</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card">
            <a href="./bikedetails/05.php">
              <div class="card-body">
                <img src="./assets/img/products/05.jpg" class="img-fluid" />
                <p size="3" align="center">Ducati Streetfighter V2</p>
                <p>Rs. 74.75 lakhs - 83 lakhs</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 text-center">
          <div class="card">
            <a href="./bikedetails/06.php">
              <div class="card-body">
                <img src="./assets/img/products/06.jpg" class="img-fluid" />
                <p size="3" align="center">KTM 390 Duke</p>
                <p>Rs. 10 lakhs - 12 lakhs</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 text-center">
          <div class="card">
            <a href="./bikedetails/07.php">
              <div class="card-body">
                <img src="./assets/img/products/07.jpg" class="img-fluid" />
                <p size="3" align="center">TVS Apache RR 310</p>
                <p>Rs. 8 lakhs - 10 lakhs</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 text-center">
          <div class="card">
            <a href="./bikedetails/08.php">
              <div class="card-body">
                <img src="./assets/img/products/08.jpg" class="img-fluid" />
                <p size="3" align="center">
                  Royal Enfield Continental GT 650
                </p>
                <p>Rs. 15.75 lakhs - 20 lakhs</p>
              </div>
            </a>
          </div>
        </div>

        <!-- third row -->
        <div class="col-lg-3 text-center">
          <div class="card">
            <a href="./bikedetails/09.php">
              <div class="card-body">
                <img src="./assets/img/products/09.jpg" class="img-fluid" />
                <p size="3" align="center">Hornet 2.0</p>
                <p>Rs. 5.75 lakhs - 8 lakhs</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 text-center">
          <div class="card">
            <a href="./bikedetails/10.php">
              <div class="card-body">
                <img src="./assets/img/products/10.jpg" class="img-fluid" />
                <p size="3" align="center">Honda Xblade</p>
                <p>Rs. 5 lakhs - 6 lakhs</p>
              </div>
            </a>

          </div>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card">
            <a href="./bikedetails/11.php">

              <div class="card-body">
                <img src="./assets/img/products/11.jpg" class="img-fluid" />
                <p size="3" align="center">TVS APACHE RTR 200 ABS FI</p>
                <p>Rs. 4 lakhs - 5 lakhs</p>
              </div>
            </a>

          </div>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card">
            <a href="./bikedetails/12.php">

              <div class="card-body">
                <img src="./assets/img/products/12.jpg" class="img-fluid" />
                <p size="3" align="center">Honda CB Hornet 160R</p>
                <p>Rs. 3 lakhs - 4 lakhs</p>
              </div>
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<form action="more_bikes.php">
  <div class="text-center"> <button class="btn1" type="submit" name="more_bikes">See more</button>
</form>
</div>

<?php include('footer.php') ?>