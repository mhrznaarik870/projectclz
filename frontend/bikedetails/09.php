<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hornet 2.0</title>

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
            <img src="./assets/img/products/09.jpg" alt="TVS Apache RR310" class="img-fluid" />
          </div>
          <div class="purchase-info">
            <?php $product_name = 'TVS Apache RR310' ?>
            <?php $product_price = 'Rs.6,00,000' ?>
            <h2>Hornet 2.0</h2>
            <div class="product-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>16(44)</span>
            </div>

            <p>
              A veracious manifestation of style, safety, and power, Hornet
              2.0 is all about riding against the wind, limitless. It’s a ride
              diligently crafted to perfection to serve all your wildest
              adventures. With a vigorous 184.4CC air-cooled BSVI HET engine
              that produces the fiercest power, this aggressive machine is
              here to turn heads with its sheer exhilaration and growl.Now,
              ride endless, fearless, and boundless, in sync with the wind in
              the all-new Hornet 2.0.
            </p>

            <p>
              The new Hornet 2.0 replaces the CB Hornet 160R which used to be
              Honda’s one of the highest selling motorcycles. The Hornet brand
              was known for its aggressive styling and good performance. The
              new Hornet 2.0 plans to take that to a new level
            </p>

            <p>
              The Hornet 2.0 retains the design language of the CB Hornet
              160R. But now, it gets cleaner lines and has more bulk that
              makes it quite striking. Plus, with the presence of golden
              upside down forks, this Honda looks quite premium. There are
              other premium bits like LCD instrument cluster, LED lighting and
              also some practical features like hazard switch.
            </p>

            <p>
              The Hornet 2.0 uses an 184cc, single-cylinder, air-cooled,
              fuel-injected motor that produces 16.1Nm of peak torque. This
              motor is mated to a five-speed gearbox. The suspension duties
              are taken care of by upside-down forks at the front and a
              preload-adjustable mono-shock at the back. The bike uses disc
              brakes at both ends with 276mm disc at the front and 220mm at
              the rear. Single channel ABS is standard.
            </p>
            <p>
              The new Hornet 2.0 is available in four colours: Pearl Igneous
              Black, Matte Sangria Red Metallic, Matte Marvel Blue Metallic
              and Matte Axis Grey Metallic. At a small price premium over
              these standard colours, one can also get the Repsol edition of
              the bike which is inspired by Honda’s Repsol race machines. The
              Hornet 2.0 goes up against the TVS Apache RTR 200 4V and the
              Bajaj Pulsar NS200.
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
          <div class="last-price">Old Price: <span>Rs.8,00,000,/-</span></div>
          <div class="product-price">
            New Price: <span>Rs.6,75,000/-</span>
          </div>
          <div class="purchase-info">
            <form action="../../backend/orders.php?bike_id=9" method="post">
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