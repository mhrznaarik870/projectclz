<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Honda CB Hornet 160R</title>

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
            <img src="./assets/img/products/12.jpg" alt="TVS Apache RR310" class="img-fluid" />
          </div>
          <div class="purchase-info">

            <h2>Honda CB Hornet 160R</h2>
            <div class="product-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>15(64)</span>
            </div>

            <p>
              The CB Hornet 160R is Honda’s answer to the Yamaha FZ-S and the
              Suzuki Gixxer. Based on the CB Unicorn 160, the CB Hornet 160R
              is the stylish 160cc offering from the Japanese manufacturer.
            </p>

            <p>
              The CB Hornet 160R is easily the best looking bike in its
              segment. With its macho look, which Honda was able to achieve by
              using bulky body panels, especially the fuel tank, Honda plans
              to target buyers who are style conscious. While the fascia still
              reminds us of the CB Unicorn Dazzler, the side profile is the
              best way to look at this motorcycle. The rear of the CB Hornet
              160R also stands out thanks to the X-shaped tail lamp. In
              addition to this, it gets an LED headlamp, and a hazard light
              switch where one would ordinarily have got an engine killswitch.
            </p>

            <p>
              The CB Hornet 160R is powered by a 163cc single-cylinder
              air-cooled engine that produces 15.7bhp at 8500rpm and peak
              torque of 14.76Nm at 6500rpm. This engine is mated to a
              five-speed gearbox. The bike gets disc brakes at both ends along
              with the Combined Braking System instead of the standard
              disc-drum setup. Single-channel ABS is now an option, but both
              ABS and CBS are not available together. The front brake is
              larger than the CB Unicorn 160’s, at 276mm. The rear disc size
              is 220mm. The bike rides on a 100/80-17 front tyre and 140/80-17
              rear tyre, which matches the widest in the segment. The fuel
              tank capacity stands at 12 litres and the kerb weight at 142kg
              for the CBS version and 140 for the standard version.
            </p>

            <p>
              This bike is offered in five variants – the mechanical
              differences are with the brakes. You can have a standard brake
              setup, ABS, or CBS. The other two options are cosmetic
              variations called ‘Special Editions’ that have different
              graphics. ABS is not an option for the Special Edition Hornet.
              It is available in five colour options – orange/black,
              white/blue, red/grey, green/black and yellow. The Hornet is
              priced at Rs 81,863 (ex-showroom) and competes against the
              Yamaha FZ S and Suzuki Gixxer. in two variants – single-channel
              ABS and dual-channel ABS
            </p>
          </div>
        </div>

        <div class="col-md-6 specs">
          <h4>Specifications</h4>
          <ul>
            <li>Engine Type 4 Stroke, SI Engine, BS-VI</li>

            <li>Displacement 184.40 cc</li>

            <li>Max Torque 16.1 Nm @ 6000 rpm</li>

            <li>Starting Self Start Only</li>

            <li>Fuel Supply Fuel Injection</li>

            <li>Clutch Multiplate Wet Clutch</li>

            <li>Gear Box 5 Speed</li>

            <li>Bore 61 mm</li>

            <li>Stroke 63.09 mm</li>

            <li>Compression Ratio 9.5:1</li>

            <li>Emission Type bs6</li>
          </ul>
          <div class="old-price">
            <?php
            $sql = "SELECT old_price FROM products WHERE bike_id=12";
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
            $sql = "SELECT new_price FROM products WHERE bike_id=12";
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
            <form action="../../backend/orders.php?bike_id=12" method="post">
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