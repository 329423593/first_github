<?php 
session_start();
header("Content-type:text/html; charset=utf-8");
echo "登录成功！登录用户名为：".$_SESSION['userName'];
echo "<br/><br/><a href='index.php' >返回</a>";
?>

