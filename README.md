#Using PhpMyAdmin to create a MySQL database and registration table with XAMPP
In this guide, we will walk you through the process of creating a MySQL database and a registration table using PhpMyAdmin, which is a free and open-source tool for managing MySQL databases. We will be using XAMPP, which is a free and open-source cross-platform web server solution stack package that includes Apache, MySQL, PHP, and Perl.

#Prerequisites
Before we begin, ensure that you have installed XAMPP on your Windows machine.

#Step 1: Start XAMPP
To start XAMPP, navigate to the location where it is installed and double-click on the xampp-control.exe file. This will launch the XAMPP Control Panel.

#Step 2: Start Apache and MySQL
In the XAMPP Control Panel, click on the Start button next to Apache and MySQL to start these services.

#Step 3: Open PhpMyAdmin
Once Apache and MySQL are running, open your web browser and go to http://localhost/phpmyadmin/. This will open PhpMyAdmin, which is a web-based interface for managing MySQL databases.

#Step 4: Create a new database in test
In PhpMyAdmin, click on the New button on the left-hand side of the screen. This will open a form where you can enter the details of your new database.

Enter a name for your database in the Database name field, and select utf8_general_ci as the collation. Leave the other settings as they are, and click on the Create button to create your new database.

#Step 5: Create a new table
Once your database is created, click on its name in the left-hand sidebar to select it. Then, click on the New button to create a new table.

Enter registration as the name of your table, and set the number of columns to 7. Click on the Go button to create your new table.

#Step 6: Define table columns
In the Structure tab, define the columns of your registration table using the following details:

ColumnName	Type	  Length/Values	 Attributes
id	         int		                Primary, AI
name	       varchar	   50	
email	       varchar	   50	
password	   varchar	   50	
age	         int		
dob	         varchar	   20	
contact	     varchar	   20	

Click on the Save button to save your table.

#Step 7: Add data to your table
In the Insert tab, you can add data to your registration table. Enter the values for each column and click on the Go button to add a new row of data to your table.

Now you can review my Project :)

This Should End Up Like This
![alt text](assests/images/registration table structure.png)
