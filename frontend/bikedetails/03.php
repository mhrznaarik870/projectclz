<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MT-15 V-2.0</title>

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
            <img src="./assets/img/products/03.jpg" alt="MT-15 V-2.0" class="img-fluid" />
          </div>
          <div class="purchase-info ">

            <h2>MT-15 V-2.0</h2>
            <div class="product-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>5(62)</span>
            </div>

            <p>
              Carrying the legacy of MT series, the new MT-15 V2 brings more
              aggression and agility now with Traction Control System, Dual
              Channel ABS, Upside Down front forks, Aluminium Swingarm, 155cc LC
              4 V FI engine and other exciting features. Stay connected with your
              Dark Warrior through Y-Connect* even on the move.
            </p>
            <p>
              The 2023 Yamaha MT-15 has received several updates over its
              predecessor. The biggest upgrade on the 2023 model is the addition
              of a traction control system and a dual-channel ABS. In
              comparison, the previous iteration of the roadster-segment
              motorcycle only featured the safety net of a single-channel ABS.
            </p>
            <p>
              Apart from enhancing the safety net, Yamaha Motor India has also
              added LED turn indicators to this motorcycle, and the MT-15 now
              comes with full-LED lighting. Meanwhile, the cockpit retains the
              LCD instrument cluster with Bluetooth connectivity. The Bluetooth
              module works with a dedicated smartphone application and offers
              access to features such as incoming call alerts, SMS and email
              notifications, and phone battery level to the LCD console.
              Further, the smartphone application helps track fuel consumption,
              provides maintenance recommendations, saves the last parked
              location, and shows malfunction notifications.
            </p>
            <p>
              The design remains unchanged for 2023. However, Yamaha Motor India
              has revised the colour palette with the addition of the new
              Metallic Black DLX paint. This new paint option will be sold
              alongside the Ice Fluo-Vermillion, Racing Blue, and Cyan Storm
              colour themes. All colour options come with a different shade for
              the alloy wheels.
            </p>
            <p>
              The mechanical specifications, too, are similar to its
              predecessor. However, the 2023 model comes equipped with an
              onboard diagnostics (OBD-II) system that monitors the emission
              levels in real time. The 155cc, single-cylinder, liquid-cooled,
              SOHC, four-valve, fuel-injected engine with VVA system delivers a
              maximum output of 18.1bhp at 10,000rpm and a peak torque of 14.2Nm
              at 7,500rpm. The six-speed gearbox benefits from an assist and
              slipper clutch mechanism. However, unlike the YZF-R15, this
              motorcycle does not get a quick-shifter.
            </p>

            <p>
              The hardware on the 2023 MT-15 retains the 37mm upside-down front
              forks and a rear mono-shock to handle the suspension tasks. The
              braking setup comprises a 282mm front disc and a 220mm rear rotor,
              while the safety net includes a dual-channel ABS and traction
              control system. Similar to the YZF-R15, the 17-inch alloy wheels
              on the MT-15 are wrapped in 100/80-section front and
              140/70-section rear tyres. The motorcycle features a 10-litre fuel
              tank and tips the weighing scale at 141kg (kerb).
            </p>
            <p>
              The 2023 Yamaha MT-15 rivals the likes of the KTM 125 Duke, TVS
              Apache RTR 200 4V, Honda Hornet 2.0, and the Bajaj Pulsar N250 in
              the Indian market.
            </p>


          </div>
        </div>

        <div class="col-md-6  specs">

          <h4>Specifications</h4>
          <ul>
            <li>Engine Type: Liquid cooled, 4-stroke, SOHC, 4-valve</li>
            <li>Displacement: 155 cc</li>
            <li>Max Torque: 14.1 Nm @ 7500 rpm</li>
            <li>No. of Cylinders: 1</li>
            <li>Cooling System: Liquid Cooled</li>
            <li>Valve Per Cylinder: 4</li>
            <li>Starting: Self Start Only</li>
            <li>Fuel Supply: Fuel Injection</li>
            <li>Clutch: Wet, Multiple Disc</li>
            <li>Gear Box: Constant mesh 6 Speed</li>
            <li>Bore: 58.0 mm</li>
            <li>Stroke: 58.7 mm</li>
            <li>Compression Ratio: 11.6 :1</li>
            <li>Emission Type: bs6-2.0</li>
          </ul>

          <div class="old-price">
            <?php
            $sql = "SELECT old_price FROM products WHERE bike_id=3";
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
            $sql = "SELECT new_price FROM products WHERE bike_id=3 ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $newPrice = $row['new_price'];
              echo "New Price: <span> Rs. " . $newPrice . "/- </span>";
            } else {
              echo "Old Price: <span> Price not available. </span>";
            }
            ?>
          </div>
          <div class="purchase-info">
            <form action="../../backend/orders.php?bike_id=3" method="post">
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