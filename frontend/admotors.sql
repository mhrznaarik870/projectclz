CREATE TABLE IF NOT EXISTS clients (
    sno INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phoneno INT(10),
    Reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    verification_code VARCHAR(255),
    is_verified INT(10) DEFAULT 0
);

CREATE TABLE IF NOT EXISTS orders (
    orderno INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phoneno INT(10),
    ordered_bike VARCHAR(255),
    ordered_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS products (
  bike_id INT AUTO_INCREMENT PRIMARY KEY,
  bike_name VARCHAR(100) NOT NULL,
  specs VARCHAR(255) NOT NULL,
  description VARCHAR(255) NOT NULL,
  rating VARCHAR(255) NOT NULL,
  old_price VARCHAR(50) NOT NULL,
  new_price VARCHAR(50) NOT NULL,
  bike_image VARCHAR(255) NOT NULL,
  gif_path VARCHAR(255) NOT NULL
);


-- Insert bike records
INSERT INTO products (bike_name, bike_image, gif_path, old_price, new_price) VALUES
  ('Kawasaki Ninja H2', './bikedetails/assets/img/products/01.jpg','./bikedetails/assets/gif/01.gif','10,000,000','9,000,000'),
  ('Royal Enfield Classic 350', './bikedetails/assets/img/products/02.jpg','./bikedetails/assets/gif/02.gif','5,50,000','4,99,000'),
  ('MT-15 V-2.0', './bikedetails/assets/img/products/03.jpg','./bikedetails/assets/gif/03.gif','6,00,000','4,55,000'),
  ('Kawasaki Ninja ZX-10R', './bikedetails/assets/img/products/04.jpg','./bikedetails/assets/gif/04.gif','30,00,000','26,00,000'),
  ('Ducati Streetfighter V2', './bikedetails/assets/img/products/05.jpg','./bikedetails/assets/gif/05.gif','36,00,000','30,00,000'),
  ('KTM 390 Duke', './bikedetails/assets/img/products/06.jpg','./bikedetails/assets/gif/06.gif','10,00,000','9,00,000'),
  ('TVS Apache RR 310', './bikedetails/assets/img/products/07.jpg','./bikedetails/assets/gif/07.gif','8,00,000','7,80,000'),
  ('RE Continental GT 650', './bikedetails/assets/img/products/08.jpg','./bikedetails/assets/gif/08.gif','7,90,000','7,30,000'),
  ('Hornet 2.0', './bikedetails/assets/img/products/09.jpg','./bikedetails/assets/gif/09.gif','5,50,000','5,00,000'),
  ('Honda Xblade', './bikedetails/assets/img/products/10.jpg','./bikedetails/assets/gif/10.gif','3,50,000','3,45,000'),
  ('TVS Apache RTR 200', './bikedetails/assets/img/products/11.jpg','./bikedetails/assets/gif/11.gif','4,20,000','4,11,000'),
  ('Honda CB Hornet 160R', './bikedetails/assets/img/products/12.jpg','./bikedetails/assets/gif/12.gif','5,10,000','4,98,000');

CREATE TABLE IF NOT EXISTS cancelled_orders (
    orderno INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phoneno VARCHAR(10),
    cancelled_bike VARCHAR(255),
    cancellation_remarks VARCHAR(255),
    ordered_date VARCHAR(255),
    cancellation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS reviews (
  name VARCHAR(30),
  email VARCHAR(50),
  comments VARCHAR(255),
  feedback_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
