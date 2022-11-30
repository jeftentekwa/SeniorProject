<?php 
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
 $sql = "SELECT * FROM usedcarinventory";
$result = mysqli_query($conn, $sql); 
?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title> </title> 
    <link rel="stylesheet" href="loadData.css "/>
	</head> 
	<body> 
   
	<table align="center" border="1px" > 
	<tr> 
		<th colspan="21"><h2> Dealerships' Inventory</h2></th> 
		</tr> 
			  <th> CarID </th> 
			  <th> vinNumber </th> 
			  <th> Price </th> 
			  <th> Miles </th> 
        <th> StockNumber</th> 
			  <th> Years </th> 
			  <th> Make </th> 
			  <th> Model </th>
        <th> Trims </th> 
			  <th> BodyType </th> 
			  <th> VehicleType </th> 
			  <th> DriveTrain </th>
        <th> Transmission </th> 
			  <th> FuelType </th> 
			  <th> engineSize </th> 
			  <th> engineBlock </th>
        <th> PurchasedFrom </th> 
			  <th> Street </th> 
			  <th> City </th> 
			  <th> States </th>
        <th> Zip </th>

			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr>
    <td><?php echo $rows['CarID']; ?></td> 
		<td><?php echo $rows['vinNumber']; ?></td> 
		<td><?php echo $rows['Price']; ?></td> 
		<td><?php echo $rows['Miles']; ?></td> 
    <td><?php echo $rows['StockNumber']; ?></td> 
		<td><?php echo $rows['Years']; ?></td> 
		<td><?php echo $rows['Make']; ?></td> 
		<td><?php echo $rows['Model']; ?></td> 
    <td><?php echo $rows['Trims']; ?></td> 
		<td><?php echo $rows['BodyType']; ?></td> 
		<td><?php echo $rows['VehicleType']; ?></td> 
		<td><?php echo $rows['DriveTrain']; ?></td> 
    <td><?php echo $rows['Transmission']; ?></td> 
		<td><?php echo $rows['FuelType']; ?></td> 
		<td><?php echo $rows['EngineSize']; ?></td> 
		<td><?php echo $rows['EngineBlock']; ?></td> 
    <td><?php echo $rows['PurchasedFrom']; ?></td> 
		<td><?php echo $rows['Street']; ?></td> 
		<td><?php echo $rows['City']; ?></td> 
		<td><?php echo $rows['States']; ?></td> 
    <td><?php echo $rows['Zip']; ?></td> 

		</tr> 
	<?php 
               } 
          ?> 

	</table> 

	</body> 
	</html>