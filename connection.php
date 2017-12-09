<?php
function Connect()
{
 $dbhost = "sql304.byethost10.com";
 $dbuser = "b10_21178713";
 $dbpass = "Cygel1992";
 $dbname = "b10_21178713_Volunteers";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>