<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');
//define('DB_NAME', 'signup_info');
 
/* Attempt to connect to MySQL database */
//$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
//if($link === false){
  //  die("ERROR: Could not connect. " . mysqli_connect_error());
 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "signup_info";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
 $sql = mysql_select_db('signup_info',$conn);
 if($conn===false)
 {
	 die("Connect failed: %s\n". $conn -> error);
	 }
 
 return $conn;

   


?>