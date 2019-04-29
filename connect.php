<?php
//DEFINE('DB_USER', 'root');
//DEFINE('DB_PASSWORD', '');
//DEFINE('DB_HOST', 'localhost');
//DEFINE('DB_NAME', 'MyCollection');

//$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
//OR die('Could not connect to MySQL: ' .mysqli_connect_error());

/*
$servername = "localhost";  
$username = "root"; 
$password = "";  
$conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
$sql = mysql_select_db ('test',$conn) or die("unable to connect to database"); 
*/
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'mycollection');

$dbc = @mysqli_connect(DB_USER, DB_PASSWORD, DB_HOST, DB_NAME) OR die ('Could not connect to MySql: ' .mysqli_connect_error());
?>