<?PHP
//This file provides the information for accessing the database.and connecting
//to MySQL. It also sets the language coding to utf-8
//First we define the constants:
DEFINE ('DB_USER', 'horatio');
DEFINE ('DB_PASSWORD','hmsvictory');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'simpleIdb');
//Next we assign the database connection to a variable that we will call $dbcon:
$dbcon = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
//Finally, we set the language encoding.as utf-8
mysqli_set_charset($dbcon, 'utf-8');
