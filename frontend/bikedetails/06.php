<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KTM 390 Duke</title>

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
            <img src="./assets/img/products/06.jpg" alt="Kawasaki Ninja H2" class="img-fluid" />
          </div>

          <div class="purchase-info ">
            <h2>KTM 390 Duke</h2>
            <div class="product-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>19(30)</span>
            </div>


            <p>
              The KTM Duke 390 is a beast of a motorcycle. It’s lightweight,
              easy to handle, yet it has the torque you need to make it fun on
              the streets and safe on the freeway. It might just be in the top 5
              best beginner motorcycles out there.
            </p>
            <p>
              The Duke 390 is the ultimate wolf in sheep’s clothing. It’s single
              cylinder engine comes in at a respectable 373cc’s, a bit larger
              than both the Ninja 300 or the the CBR 250, giving you more grunt
              when passing at higher speeds. With a single cylinder engine you
              expect more torque down low, and while the Duke 390 does have
              some, it really begins to shine in the mid range and higher RPM’s.
            </p>
            <p>
              Even though this bike encourages you to be a bit of a hooligan, it
              really is set up perfectly for new riders. It doesn’t have
              excessive plastic fairings so it will be able to survive a drop
              much better than something fully faired. The way that the engine
              delivers power is also predictable and gives you practice shifting
              through the gears. The bike is also lightweight, as most bikes in
              this class are. That REALLY helps when you are doing some low
              speed maneuvers and you get off balance. It’s much easier trying
              to save a smaller bike like this from a drop than it is some 600+
              lb Harley Davidson.
            </p>
            <p>
              The duke wouldn’t be for you if you really don’t like the look of
              it. It’s a unique looking bike and it’s not as sporty or sexy as
              the Ninja 300 or the Yamaha R3. It’s more utilitarian, and in my
              opinion, a bit more badass. It also wouldn’t be the best bike if
              you wanted to do a lot of off road riding. It really is a street
              bike and it’s designed for paved roads.
            </p>

          </div>
        </div>

        <div class="col-md-6  specs">

          <h4>Specifications</h4>
          <li>
            Engine Type: Single Cylinder, Liquid Cooled, DOHC, FI Engine
          </li>

          <li>Displacement: 373.27 cc</li>

          <li>Max Torque: 37 Nm @ 7000 rpm</li>

          <li>No. of Cylinders: 1</li>

          <li>Cooling System: Liquid Cooled</li>

          <li>Valve Per Cylinder: 4</li>

          <li>Starting Self Start: Only</li>

          <li>Fuel Supply: Fuel Injection</li>

          <li>Clutch: Assist & Slipper</li>

          <li>Gear Box: 6 Speed</li>

          <li>Bore: 89 mm</li>

          <li>Stroke: 60 mm</li>

          <li>Compression Ratio: 12.88:1</li>

          <li>Emission Type: bs6</li>
          </ul>

          <div class="old-price">
            <?php
            $sql = "SELECT old_price FROM products WHERE bike_id=6";
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
            $sql = "SELECT new_price FROM products WHERE bike_id=6";
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
            <form action="../../backend/orders.php?bike_id=6" method="post">
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