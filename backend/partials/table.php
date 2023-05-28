<?php
include 'function.php';

//Create the connetion
$conn = OpenCon();
//sql to create table
$sql = "CREATE TABLE clients (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(30) NOT NULL,
    Password VARCHAR(30) NOT NULL,
    Email VARCHAR(50),
    PhoneNo INT(10),
    Reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table! " . $conn->error;
}
CloseCon($conn);
?>