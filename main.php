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
        <div id="buttonDiv" class="w3-container w3-white w3-padding-32 " >
            <a class="button" id="homeButton" href="#"> Home</a>
            <a class="button" id="loadButton" href="loadData.php" target="_blank" > Load Data </a>
            <a class="button" id="saveButton" href="saveData.html" target="_blank"> Save Data</a>
            <a class="button" id="deleteButton" href="deleteData.html" target="_blank" > Delete </a>
            <p id="lognOutP"> Welcome <?php echo $user['name']?>
            <a class="button" id="lognOutButton" href="lognInForm.php">Log out</a></p>
        </div>
    </header>
    <div>
        
    </div >
    <div>
        <h1 class="w3-cursive"> J&D INVENTORY</h1>
        <div class="w3-container w3-black w3-padding-64 ">
            <h2>
                Online inventory management software for car dealerships accross The Nation
            </h2>
            <p id="blackP">
                Inventory management software that enables you to control your inventory,<br>
                manage and fulfill your orders, oversee sales, and streamline multiple sales channels.
            </p>
        </div>
        
    </div>
    <div class="w3-container w3-white w3-section w3-padding-64">
        <h3>Features and Benefits of Using J&D Motor </h3>
        <p id="whiteP"> J&D Motor provides full-featured used car dealer software to independent auto dealers. <br>
            J&D Motor goals have always been simple- to provide dealers with a high-quality, <br>
            easy-to-use Dealer Management System, at an affordable price, while ensuring that a friendly, <br>
         knowledgeable support  </p>
    </div>
    
        <img src="car Invetory.JPG" class="w3-container w3-section w3-black" id="img">
     
    <div class="w3-container w3-white w3-section w3-padding-64 w3-display-buttommiddle" >
    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
    <a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
    <p>Contact: 678-296-7200</p>
    <a href="#"> Privacy Policy</a>
    </div>

   
    

</body>
</html>
