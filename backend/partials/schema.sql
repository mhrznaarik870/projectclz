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