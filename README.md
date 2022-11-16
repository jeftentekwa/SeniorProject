# SeniorProject
for our senoir project, we have decided to create a inventory management for used car dealerships. 
we're going to create a website with hmtl, css, w3css, javascrpit and php
so far we have a total of 19 files
the first page to run is the main.html because it's the welcome page and contain links to other pages. 
on the main page, you can click the sign up button and it will take you to the signupForm.html file
the signupForm.html file is connecting to a database called "mysql" through the the file called "database.php" once the user sign up, it will take them to the logn In form 
the lognIn.php is also connected to the database via "database.php" once the logn in is successfull, it will redirect you back to the main page (main.html)
ps: we still working on redicting the user to the main page. 
once the user usessfully sign In, on the top left of the main page there 4 different link buttons. 
the home button redirect the user to the top of the main page,(still working on it),
the load data button will sent the user to the loadData.html file. this file is connected to the loadData.php file which is connecting to the data named "mysql"
inside this page, the user can click on the search button to load datas from the database. 
the save data button will sent the user to the saveData.html file. this file is connected to the saveData.php file which is connecting to the data named "mysql"
inside this page, the user can save a new car to the database by filling out each text and click on the save button 
and finally the delete data button will sent the user to the deleteData.html file. this file is connected to the deleteData.php file which is connecting to the data named "mysql"
inside this page, the user can fill out the form and delete the car if it exit in the database. 
each php and html files has a css file to style them. 
also we used javascript to valide the sign up and logn forms so that the user will be require to fill in those text boxes with the valid email and password format. 
the password requirement is at least 9 characters and one numeric value. 
