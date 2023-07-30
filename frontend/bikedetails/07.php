<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TVS Apache RR310</title>

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
            <img src="./assets/img/products/07.jpg" alt="TVS Apache RR310" class="img-fluid" />
          </div>
          <div class="purchase-info ">

            <h2>TVS Apache RR310</h2>
            <div class="product-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>8(20)</span>
            </div>


            <p>
              TVS Apache RR310 is a sports bike available in only 1 variant and
              2 colours.The TVS Apache RR310 is powered by 312.2cc BS6 engine
              which develops a power of 33.5 bhp and a torque of 27.3 Nm. With
              both front and rear disc brakes, TVS Apache RR310 comes up with
              anti-locking braking system. This Apache RR310 bike weighs 174 kg
              and has a fuel tank capacity of 11 liters.
            </p>

            <p>
              TVS Motor Company has launched the 2021 Apache RR 310 in the
              Indian market. The latest iteration of the motorcycle packs
              several upgrades over the 2020 model. These include several
              standard revisions and optional accessories.
            </p>
            <p>
              The list of standard upgrades includes a wave bite key that is
              claimed to deliver enhanced security and work as an in-hand
              adjuster for damping adjustments. The 2021 model also gets tweaks
              to the colour-TFT display that now includes an engine rev limit
              indicator, a day trip meter, an over-speed indicator, and
              store/display digital documents. The new model further benefits
              from a new race muffler that is claimed to revise the geometry for
              higher lean angles and a racier exhaust note.
            </p>
            <p>
              The list of optional extras includes Dynamic Kit and Race Kit. The
              Dynamic Kit includes fully-adjustable KYM front forks and rear
              mono-shock, and an anti-rust brass coated drive chain. The Race
              Kit, on the other hand, revises the ergonomics for a sportier
              rider’s triangle through a race ergo handlebar, raised footrests,
              and knurled footpegs. Buyers can also enhance the styling of the
              motorcycle through the Race Replica graphics and red alloy wheels.
            </p>
            <p>
              Buyers can customise the motorcycle and get the optional
              accessories installed from the factory through the Built To Order
              (BTO) platform. Interested buyers can use the TVS ARIVE app or
              visit the web configurator to buy and customise the Apache RR 310.
            </p>
            <p>
              The styling cues remain unaltered and the 2021 Apache RR 310
              continues to feature a twin-pod headlight at the front, a
              full-fairing design, step-up saddle, and a side-slung exhaust. The
              colour options include two choices – Racing Red and Titanium
              Black. The feature list retained from the 2020 model includes
              full-LED lighting, a Bluetooth-enabled colour TFT display,
              ride-by-wire throttle, four riding modes, and dual-channel ABS.
              The mechanical specifications continue to include the 312.2cc,
              single-cylinder, liquid-cooled engine that produces 33.5bhp at
              9,700rpm and 27.3Nm of peak torque at 7,700rpm. The motor is
              linked to a six-speed gearbox.
            </p>

          </div>
        </div>

        <div class="col-md-6  specs">

          <h4>Specifications</h4>
          <ul>
            <li>
              Engine Type SI, 4 stroke, 4 valve, Single cylinder, Liquid
              cooled, Reverse inclined
            </li>

            <li>Displacement 312.2 cc</li>

            <li>Max Torque 27.3 Nm @ 7700 rpm </li>

            <li>No. of Cylinders 1</li>

            <li>Cooling System Liquid Cooled</li>

            <li>Valve Per Cylinder 4</li>

            <li>Starting Self Start Only</li>

            <li>Fuel Supply Fuel Injection</li>

            <li>
              Clutch Wet multi-plate, 7- plate design, RT-Slipper Clutch
            </li>

            <li>
              Ignition Dynamically controlled integrated high energy ignition
              system
            </li>

            <li>Gear Box 6 Speed</li>

            <li>Bore 80 mm</li>

            <li>Stroke 62.1 mm</li>

            <li>Compression Ratio 10.9:1</li>

            <li>Emission Type bs6</li>

            <div class="old-price">
              <?php
              $sql = "SELECT old_price FROM products WHERE bike_id=7";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $oldPrice = $row['old_price'];
                echo "Old Price: <span> Rs. " . $oldPrice . "/- </span>";
              } else {
                echo "Old Price: <span> Price not available. </span>";
              }
              ?>
            </div>
            <div class="new-price">
              <?php
              $sql = "SELECT new_price FROM products WHERE bike_id=7";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $newPrice = $row['new_price'];
                echo "New Price: <span> Rs. " . $newPrice . "/- </span>";
              } else {
                echo "Old Price: <span> Price not available. </span>";
              }
              ?>
              <div class="purchase-info">
                <form action="../../backend/orders.php?bike_id=7" method="post">
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