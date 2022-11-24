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
   $sql = "SELECT * FROM usedcarinventory2022";
$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>". $row["CarID"] . "</td><td>";
    }
  } else {
    echo "0 results";
  } */

  //Fourth Block- Prints Out and Displays the Table
print "<table width=540 border=1>\n"; 
while ($row = mysqli_fetch_assoc($result1)){ 
$CarID= $row['CarID'];
$Make= $row['make'];
print "<tr>\n"; 
print "\t<td>\n"; 
print "\t<td>\n"; 
print "<font face=arial size=4/><div align=center>$CarID/div></font>"; 
print "</td>\n";
print "\t<td>\n"; 
echo "<font face=arial size=4/>$Make</font>";
print "</td>\n";
print "</tr>\n"; 
} 

print "</table>\n"; 

   


?>