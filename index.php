<?php 
session_start();
$userName = isset($_SESSION['userName'])?$_SESSION['userName']:'';
$validataUserName = isset($_SESSION['validataUserName'])?$_SESSION['validataUserName']:'';
$validataPassWord = isset($_SESSION['validataPassWord'])?$_SESSION['validataPassWord']:'';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="login.php" method="post">
	用户名：<input name="userName" value="<?php echo $userName; ?>" /> <font color="red"><?php echo $validataUserName; ?></font>
	<br/>
	<br/>
	密&nbsp;&nbsp;&nbsp;&nbsp;码：<input name="passWord" value="" /> <font color="red"><?php echo $validataPassWord; ?></font>
	<br/>
	<br/>
	<input type="submit" value="提交" />
</form>
</body>
</html>