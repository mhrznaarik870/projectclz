<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ducati Streetfighter V2</title>

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
            <img src="./assets/img/products/05.jpg" alt="Kawasaki Ninja H2" class="img-fluid" />
          </div>
          <div class="purchase-info ">
            <?php $product_name = 'Kawasaki Ninja H2' ?>
            <?php $product_price = 'Rs.90,00,000' ?>

            <h2>Ducati Streetfighter V2</h2>
            <div class="product-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>5(40)</span>
            </div>

            <p>
              The Streetfighter V2 is a sports naked with a one-of-a-kind
              character. It accommodates the needs of those looking for a bike
              that can combine the sporty DNA of the Panigale V2 with both the
              attitude and style of the much-admired Streetfighter. The result
              is an intuitive and easy-to-handle vehicle, with the right dose of
              power to ensure feisty performance and maximum riding fun. The
              bike has a dry weight of 178 kg and is powered by the 153 hp 955
              cc Superquadro engine, controlled by the latest-generation
              electronics package. The Streetfighter V2 range includes the
              Ducati Red colour scheme and a matt metallic green colour that
              enhances the bike's design: Storm Green
            </p>
            <p>
              The base is that of the home-grown V2 supersport, the Panigale V2.
              But the Streetfighter has no fairings, while the design, the
              riding position and the character of the bike are significantly
              influenced by the high and wide handlebar. The Streetfighter V2
              has been conceived, designed, and developed around this core
              philosophy. An approach that makes the guiding principle of the
              Streetfighter V4 more accessible, in every respect. In addition,
              thanks to an incredibly balanced combination of lightness,
              compactness and performance, the Streetfighter V2 creates a new
              market segment.
            </p>
            <p>
              The lightness of the bike is also visual, in that the super
              structures covering the aluminium Front Frame and the V2
              Superquadro engine are stripped to an absolute minimum. A
              conscious decision, for a pathway that ensures the Streetfighter
              V2 flaunts sculpted, essential lines, where everything on display
              has a specific function. Even the smallest element has both an
              aesthetic purpose and a functional aspect, directing hot air from
              the radiator away from the rider's legs for example.
            </p>
            <p>
              Ergonomics has major rider-centric features and is focused on road
              use with the added values of sportiness and comfort. The high and
              wide aluminum handlebars replace the handlebar risers of the
              Panigale V2. The saddle now is longer, wider and has new padding
              that contributes to make this bike even more comfortable. In
              addition, the footpegs have been repositioned to increase the
              amount of room. All these improvements allow the biker great
              control in sporty riding and facilitate everyday use at the same
              time.
            </p>
            <p>
              In keeping with the Streetfighter's style, the V2 version is
              characterised by a riding position that perfectly combines sporty
              flavour with superior comfort feeling. Compared to the Panigale
              V2, the torso position results less extreme. Furthermore, the load
              on the rider's wrists is less tiring and the footrests have been
              repositioned, thus offering great control during sporty riding and
              in everyday use. The handlebar risers of the Panigale V2 leave
              room for a high and wide aluminium tubular handlebar. The seat,
              derived from the Streetfighter V4, is 845 mm high, and compared to
              that of the Panigale V2 it is longer, wider and has new padding
              that contributes to make this bike even more comfortable.
            </p>
            <p>
              The modern equipment of pilot assistance controls that equips the
              Streetfighter V2 is inherited from the Panigale V2. Thanks to the
              use of the 6-axis inertial platform that instantly detects the
              angle of roll, yaw and pitch, all controls intervene accurately
              according to the position of the motion in space. The operating
              parameters of each control are associated by default with the
              three Riding Mode (Sport, Road, Wet). The rider is given the
              ability to customize the level of intervention of the controls or
              restore the default parameters set by Ducati. The IMU works on 6
              axis by measuring the position of the bike in space in real time
              and sending the information to the control units that manage the
              electronic controls. All this in order to ensure maximum
              performance and safety.
            </p>

          </div>
        </div>

        <div class="col-md-6  specs">

          <h4>Specifications</h4>
          <ul>
            <li>
              Engine Type Superqudro: 90° V2, Desmodromic 4 valves per
              cylinder, liquid cooled
            </li>

            <li>Displacement 955 cc</li>

            <li>Max Torque 101.4 Nm @ 9000 rpm</li>

            <li>Cooling System Liquid Cooled</li>

            <li>Valve Per Cylinder 4</li>

            <li>Starting Self Start Only</li>

            <li>Fuel Supply Fuel Injection</li>

            <li>
              Clutch Hydraulically controlled slipper and self-servo wet
              multiplate clutch. Self bleeding master cylinder
            </li>

            <li>Gear Box 6 Speed</li>

            <li>Bore 100 mm</li>

            <li>Stroke 68.8 mm</li>

            <li>Compression Ratio 12.5:1</li>

            <li>Emission Type bs6</li>
          </ul>


          <div class="last-price">Old Price:
            <span>Rs.84,00,000/-</span>
          </div>
          <div class="product-price">
            New Price: <span>Rs.78,75,000/-</span>
          </div>
          <div class="purchase-info">
            <form action="../../backend/orders.php?ordered_bike=Ducati Streetfighter V2" method="post">
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