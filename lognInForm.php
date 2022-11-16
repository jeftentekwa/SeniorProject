<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM plugin
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: main.html");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html>
    <header>
        <title> </title>
        <link rel="stylesheet" href="lognIn.css"/>
    </header>
    <body>
      
        <div id="id01" class="modal">
          
            <form class="modal-content animate">
              <div class="imgcontainer">
              <h1> Logn In</h1>
                <img src="avatarImage.jpg" alt="Avatar" class="avatar">
              </div>
          
              <div class="container">
              <label for="email">email</label>
               <input type="email" placeholder="Enter Email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>
                  
                <button type="submit">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>
          
              <div class="container" style="background-color:#f1f1f1">
                <button type="button"  class="cancelbtn" onclick="backButton()" >Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
              </div>
            </form>
          </div>
    <!-- return the page to the previous page once you canncel  -->
          <script>

            function backButton() {
            
            window.history.back();
            
            }
            
            </script>
    </body>
</html>