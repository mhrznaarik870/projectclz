<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RE Contimental GT 650</title>

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
            <img src="./assets/img/products/08.jpg" alt="TVS Apache RR310" class="img-fluid" />
          </div>
          <div class="purchase-info">
            <?php $product_name = 'TVS Apache RR310' ?>
            <?php $product_price = 'Rs.10,00,000' ?>
            <h2>RE Contimental GT 650</h2>
            <div class="product-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>12(26)</span>
            </div>

            <p>
              Royal Enfield Continental GT 650 is a cafe racer bike available
              in 4 variants and 7 colours. The Royal Enfield Continental GT
              650 is powered by 648cc BS6 engine which develops a power of 47
              bhp and a torque of 52 Nm. With both front and rear disc brakes,
              Royal Enfield Continental GT 650 comes up with anti-locking
              braking system.
            </p>

            <p>
              This Continental GT 650 bike weighs 211 kg and has a fuel tank
              capacity of 12.5 liters. Royal Enfield has updated its Indian
              product portfolio with the launch of the 2023 Continental GT
              650. The latest iteration of the café-racer-style middleweight
              motorcycle gets several updates over its predecessor. Visually,
              the motorcycle remains similar to the previous version and
              continues to feature a round headlight, twin-pod instrument
              cluster, clip-on-style handlebar, rear cowl, and twin-sided
              exhaust outlets. While the styling remains unchanged, Royal
              Enfield has updated the colour palette for the 2023 Continental
              GT 650, and the motorcycle is now available in two new
              blacked-out versions – Slipstream Blue and Apex Grey.
            </p>

            <p>
              These new colourways benefit from alloy wheels that are shod in
              tubeless tyres and will be sold alongside the Mr Clean, Dux
              Deluxe, British Racing Green, and Rocker Red paint themes. The
              rest of the colour options will continue to use 18-inch
              wire-spoke wheels. Apart from adding the new colours to the
              palette, Royal Enfield has also updated the feature list for the
              2023 Continental GT 650. The motorcycle now comes with an LED
              headlight instead of the halogen unit on the older model. The
              switchgear has been updated as well, and the 2023 model now gets
              Super Meteor 650-style switches. Other additions include a
              redesigned saddle for enhanced comfort and a USB charging port.
            </p>

            <p>
              Meanwhile, the 2023 model retains a halogen-style taillight,
              twin-pod instrument cluster, and dual-channel ABS from the
              previous version. The mechanical specifications retain the
              647.95cc, parallel-twin, air/oil-cooled engine with a single
              overhead camshaft and fuel injection system. Linked to a
              six-speed gearbox, this motor is tuned to deliver a maximum
              output of 46.8bhp at 7,250rpm and a peak torque of 52.3Nm at
              5,150rpm. In terms of hardware, this middleweight café-racer
              uses a steel tubular double-cradle frame, telescopic front
              forks, preload-adjustable twin rear springs, a single 320mm disc
              at the front and a single 240mm rotor at the back. Other key
              dimensions include a 12.5-litre fuel tank, 174mm of ground
              clearance, and 214kg of kerb weight.
            </p>
          </div>
        </div>

        <div class="col-md-6 specs">
          <h4>Specifications</h4>
          <ul>
            <li>Displacement: 650 cc</li>

            <li>Starting: Kick and Self Start</li>
            <li>Fuel Supply: Fuel Injection</li>
            <li>Emission Type: bs6-2.0</li>
            <li>Passenger Footrest: Yes</li>
            <li>Drive Type: Chain Drive</li>

            <li>Transmission: Manual</li>
          </ul>
          <div class="last-price">Old Price: <span>Rs.20,00,000/-</span></div>
          <div class="product-price">
            New Price: <span>Rs.18,75,000/-</span>
          </div>
          <div class="purchase-info">
            <form action="../../backend/orders.php?bike_id=8" method="post">
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