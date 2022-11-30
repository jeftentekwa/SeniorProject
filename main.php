<?php 
// checks if the user is logn in 
session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM plugin
            WHERE ID = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


</head>
<body>
    <header>
        <div id="buttonDiv" class="w3-container w3-white">
            <a class="button" id="homeButton" href="#top"> Home</a>
            <a class="button" id="loadButton" href="loadData.php" target="_blank" > Load Data </a>
            <a class="button" id="saveButton" href="saveData.html" target="_blank"> Save Data</a>
            <a class="button" id="deleteButton" href="deleteData.html" target="_blank" > Delete </a>
            <a class="button" id="lognOutButton" href="lognInForm.php">logn out</a>
        </div>
    </header>
    <div>
        
    </div>
    <div class="w3-container  w3-display-middle">
        <div>
            <h1>
                Online inventory management software for cars' dealerships accross The Nation
            </h1>
            <p>
                Inventory management software that enables you to control your inventory,<br>
                manage and fulfill your orders, oversee sales, and streamline multiple sales channels.
            </p>
        </div>
        
    </div>
    <div>
        <img src="car Invetory.JPG" alt="logoImage" id="logoImg">
    </div>
    
    

</body>
</html>