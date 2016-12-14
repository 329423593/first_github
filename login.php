<?php
session_start();
$userName = $_POST["userName"];
$passWord = $_POST["passWord"];

$user = new User($userName, $passWord);	

try
{
	validata::validataUser($user);
	//验证通过，注册成功
	$_SESSION['userName'] = $userName;	//记录session
	$_SESSION['passWord'] = $passWord;	//记录session
	require('config.php');
	$dbh = new PDO('mysql:host=localhost;dbname=test', $db_user, $db_pass);
	$dbh->exec('insert into test_staff () values()');
	header("Location: main.php");
}
catch(Exception $e)
{
	// echo $e->getMessage();
	header("Location: index.php");
}





function __autoload($class)
{
	// $file = __DIR__."/".strtolower($class).".php";
	$file = __DIR__. DIRECTORY_SEPARATOR .strtolower($class).".php";

	if(is_file($file)){
		include_once $file;
	}
	return '';
}


?>