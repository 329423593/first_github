<?php 

class database
{

	
}

try
{
	$host = "localhost";
	$dbname = "test";
	$user = "root";
	$pass = "root";
	$dbh = new PDO('mysql:host=$host;dbname=$dbname', $user, $pass);
}
catch(Exception $e)
{
	$e->getMessage();
}




 ?>