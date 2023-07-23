CREATE TABLE IF NOT EXISTS clients (
    sno INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username  VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phoneno INT(10),
    Reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    verification_code VARCHAR(255),
    is_verified INT(10) default 0

     );
CREATE TABLE IF NOT EXISTS orders (
    orderno INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phoneno INT(10),
    
    ordered_bike VARCHAR(255),
    ordered_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
-- Create the bikes table if it doesn't exist
CREATE TABLE IF NOT EXISTS bikes (
  bike_id INT AUTO_INCREMENT PRIMARY KEY,
  bike_name VARCHAR(100) NOT NULL,
  bike_image VARCHAR(255) NOT NULL
);

-- Insert bike records
INSERT INTO bikes (bike_name, bike_image) VALUES
  ('Bike 1', 'frontend/bikedetails/assets/img/products/01.jpg'),
  ('Bike 2', 'frontend/bikedetails/assets/img/products/02.jpg'),
  ('Bike 3', 'frontend/bikedetails/assets/img/products/03.jpg'),
  ('Bike 4', 'frontend/bikedetails/assets/img/products/04.jpg'),
  ('Bike 5', 'frontend/bikedetails/assets/img/products/05.jpg'),
  ('Bike 6', 'frontend/bikedetails/assets/img/products/06.jpg'),
  ('Bike 7', 'frontend/bikedetails/assets/img/products/07.jpg'),
  ('Bike 8', 'frontend/bikedetails/assets/img/products/08.jpg'),
  ('Bike 9', 'frontend/bikedetails/assets/img/products/09.jpg'),
  ('Bike 10', 'frontend/bikedetails/assets/img/products/10.jpg'),
  ('Bike 11', 'frontend/bikedetails/assets/img/products/11.jpg'),
  ('Bike 12', 'frontend/bikedetails/assets/img/products/12.jpg'),
  ('Bike 13', 'frontend/bikedetails/assets/img/products/13.jpg'),
  ('Bike 14', 'frontend/bikedetails/assets/img/products/14.jpg'),
  ('Bike 15', 'frontend/bikedetails/assets/img/products/15.jpg');

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

CREATE TABLE IF NOT EXISTS reviews(
  name VARCHAR(30),
  email VARCHAR(50),
  comments VARCHAR(255),
  feedback_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

);