<?php
   $CarID = $_POST["CarID"];
   $VinNum = $_POST["VinNumber"];
   $Price = $_POST["Price"];
   $mileage = $_POST["mileage"];
   $Make = $_POST["make"];
   $stockNumber = $_POST["stockNumber"];
   $model = $_POST["model"];
   $year = $_POST["year"];
   $trim= $_POST["trim"];
   $bodyType = $_POST["bodyType"];
   $vehicleType= $_POST["vehicleType"];
   $driveTrain = $_POST["driveTrain"];
   $transmission= $_POST["transmission"];
   $fuelType = $_POST["fuelType"];
  $engineSize= $_POST["engineSize"]; 
   $engineBlock = $_POST["engineBlock"];
   $pFrom = $_POST["pFrom"];
   $street = $_POST["street"];
   $city = $_POST["City"];
   $state = $_POST["state"];
   $zip = $_POST["zipCode"];
   $Price = $_POST["Price"]; 

   // Database connection 
   $host = "localhost";
   $dbname ="mysql";
   $username = "root";
   $password ="";

  $conn= mysqli_connect($host, $username, $password, $dbname); 
   if(mysqli_connect_errno())
   {
    die("connection error ".mysqli_connect_error());
   }
   $sql = "DELETE FROM usedcarinventory WHERE CarID = '$CarID'";
   if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

   


?>