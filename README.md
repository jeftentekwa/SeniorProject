# Inventory Manager
  This project is an inventory management system for small car dealerships. The project is a website with HTML, CSS, W3CSS, Javascript, and PHP. Each of our HTML and PHP files have a related CSS file that is used to style them.
  
  The first page that will run is the log in page. If the user has no log in information, then they will be able to create and account using the "sign up" link. Once the user signs up, they will be redirected back to the log in page. The signup and log in page are both connected to a database using the "database.php" file. Javascript has been used for validation for the log in and sign up forms so that they must meet the email and password requirements.
  
  After logging in, the user will be taken to the main homepage where there are 4 options at the top left and a log out button towards the right. The 4 buttons: "Home", "Load Data", "Save Data", and "Delete". The "Home" button will take the user back to the homepage from where they are on the website. The "Load Data" button takes the user to the page where they can view the records that are saved into the database. This file is connected to the "loadData.php" file which connects to our MYSQL database. The "Save Data" button will take the user to the page where they can input the information about a car to add it into the database. This file is connected to our database through the "saveData.php" file. The "Delete" button will take the user to the page where they can use the I.D. # of a record in the database to remove that specific record/car from the database. This file is connected to our database through the "deleteData.php" file.
  
  
  
  
  
  
  
  REQUIREMENTS:
  For creating an account, the password requirements require that the password is atleast 9 characters long and must include atleast 1 number. The user must also have XAMPP installed, which is where our database is held.