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
   

   $sql = "INSERT INTO usedcarinventory2022 (CarID, VinNumber, Price, Miles, StockNumber, Years, Make, Model, Trims, BodyType, VehicleType, DriveTrain, Transmission, FuelType, EngineSize, EngineBlock, PurchasedFrom, Street, City, States, Zip)
     VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
         die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "isiisissssssssssssssi", $CarID, $VinNum, $Price, $mileage, $stockNumber, $year, $Make, $model, $trim, $bodyType, $vehicleType, $driveTrain, $transmission, $fuelType, $engineSize, $engineBlock, $pFrom, $street, $city, $state, $zip);

    mysqli_stmt_execute($stmt);

    echo "record has been saved"; 


?>
