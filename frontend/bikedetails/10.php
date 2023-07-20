<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Honda Xblade</title>

    <!-- Bootstrap and icon links -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png" />
    <link rel="stylesheet" href="./assets/css/prostyle.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>

  <body>
    <header>
      <?php include_once('../content-header.php'); ?>
    </header>
    <section class="bike-details">
      <div class="container">
        <div class="row">
          <div class="col-md-6 proimg">
            <div class="proimg">
              <img
                src="./assets/img/products/10.jpg"
                alt="Honda Xblade"
                class="img-fluid"
              />
            </div>
            <div class="purchase-info">
              <?php $product_name = 'TVS Apache RR310' ?>
              <?php $product_price = 'Rs.10,00,000' ?>
              <h2>Honda Xblade</h2>
              <div class="product-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>17(21)</span>
              </div>

              <p>
                Born to transform your ride. Cut through the dark with
                first-in-class Robo-Face LED headlamps with aggressive styling,
                because all you need is one look with the all-new Honda X Blade.
              </p>

              <p>
                The Honda X-Blade is powered by 162.71cc BS6 engine which
                develops a power of 13.67 bhp and a torque of 14.7 Nm. With
                front disc and rear drum brakes, Honda X-Blade comes up with
                anti-locking braking system. This X-Blade bike weighs 143 kg and
                has a fuel tank capacity of 12 liters.
              </p>

              <p>
                The X-Blade comes equipped with an LED headlamp which boasts of
                a geometric design along with a compact LED tail lamp. The sharp
                and aggressive design of the X-Blade remained unchanged with the
                BS6 update. However, Honda added fresh set to decals to help it
                differ from the outgoing BS4 version. All the data is displayed
                on a fully-digital console while other features include an
                engine start/stop switch and a hazard switch.
              </p>

              <p>
                For braking, it gets a 276mm petal disc up front with
                single-channel ABS and a 130mm drum setup for the rear. A rear
                disc brake is also available as an option. The motorcycle rides
                on 17-inch 5-spoke alloy wheels shod with 80/100-17 section tyre
                ahead and a 130/70-17 section one for the rear.
              </p>
              <p>
                The Honda X-Blade BS6 is available in two variants – front disc
                and dual disc. In its segment, the motorcycle competes with the
                Yamaha FZ S V3, Suzuki Gixxer, TVS Apache RTR 160 4V, Bajaj
                Pulsar NS160 and the new Hero Xtreme 160R.
              </p>
            </div>
          </div>

          <div class="col-md-6 specs">
            <h4>Specifications</h4>
            <ul>
              <li>Engine Type 4 stroke, SI, BS-VI Engine</li>

              <li>Displacement 162.71 cc</li>

              <li>Max Torque 14.7 Nm @ 5500 rpm</li>

              <li>No. of Cylinders 1</li>

              <li>Cooling System Air Cooled</li>

              <li>Valve Per Cylinder 2</li>

              <li>Starting Kick and Self Start</li>

              <li>Fuel Supply Fuel Injection</li>

              <li>Clutch Multiplate Wet Clutch</li>

              <li>Gear Box 5 Speed</li>

              <li>Bore 57.300 mm</li>

              <li>Stroke 63.096 mm</li>

              <li>Compression Ratio 10.0:1</li>

              <li>Emission Type bs6</li>
            </ul>
            <div class="last-price">Old Price: <span>Rs.6,00,000/-</span></div>
            <div class="product-price">
              New Price: <span>Rs.5,50,000/-</span>
            </div>
            <div class="purchase-info">
              <form
                action="../../backend/orders.php?ordered_bike=Kawasaki Ninja H2"
                method="post"
              >
                <button type="submit" name="purchased" class="btn">
                  Buy Now
                  <i class="fas fa-shopping-cart"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap and JavaScript links -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
  <?php include('../footer.php') ?>
</html>
