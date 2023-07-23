<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TVS Apache RTR 200</title>

  <!-- Bootstrap and icon links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

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
            <img src="./assets/img/products/11.jpg" alt="TVS Apache RR310" class="img-fluid" />
          </div>
          <div class="purchase-info">

            <h2>TVS Apache RTR 200</h2>
            <div class="product-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>18(22)</span>
            </div>

            <p>
              The TVS Apache RTR 200 4V is powered by 197.75cc BS6 engine
              which develops a power of 20.54 bhp and a torque of 17.25 Nm.
              With both front and rear disc brakes, TVS Apache RTR 200 4V
              comes up with anti-locking braking system. This Apache RTR 200
              4V bike weighs 152 kg and has a fuel tank capacity of 12 liters.
            </p>

            <p>
              TVS Motor Company has updated the Apache RTR 200 4V for 2022.
              The latest iteration of the Apache RTR 200 4V comes with a new
              headlamp design with an integrated Daytime Running Lamp (DRL)
              instead of twin-pod units on the 2021 model. The updated design
              resembles the unit on the latest iteration of the Apache RTR 160
              4V. The changes, however, are limited to the headlight setup
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
              The mechanical specification retains the 197.75cc,
              single-cylinder, four-valve, oil-cooled engine. Linked to a
              five-speed gearbox, the motor produces 20.2bhp of power at
              8,500rpm and 16.8Nm of peak torque at 7,500rpm. The braking
              setup includes single discs on both wheels. The motorcycle is
              available in two variants – single-channel ABS and dual-channel
              ABS
            </p>
            <p>
              The colour choices for the 2022 model include three options –
              Gloss Black, Pearl White, and Matte Blue.
            </p>
          </div>
        </div>

        <div class="col-md-6 specs">
          <h4>Specifications</h4>
          <ul>
            <li>Engine Type Si, 4 Storke, Oil Cooled, Fi</li>

            <li>Displacement 197.75 cc</li>

            <li>Max Torque 17.25 Nm @ 7500 rpm</li>

            <li>No. of Cylinders 1</li>

            <li>Cooling System Oil Cooled</li>

            <li>Valve Per Cylinder 4</li>

            <li>Starting Self Start Only</li>

            <li>Fuel Supply Fuel Injection</li>

            <li>Clutch Wet multi plate- slipper clutch with 5 plate</li>

            <li>Ignition Mapped ignition system</li>

            <li>Gear Box 5 Speed</li>

            <li>Bore 66 mm</li>

            <li>Stroke 57.8 mm</li>

            <li>Compression Ratio 10.0:1</li>

            <li>Emission Type bs6</li>
          </ul>

          <div class="last-price">Old Price: <span>Rs.4,00,000/-</span></div>
          <div class="product-price">
            New Price: <span>Rs.5,00,000/-</span>
          </div>

          <div class="purchase-info">
            <form action="../../backend/orders.php?bike_id=11" method="post">
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