<?php
$host="localhost";
$user="root";
$pass="";
$db="webdlc";

$link=mysqli_connect($host,$user,$pass,$db);

if ($link) {
	$setLang=mysqli_query($link,"SET NAMES 'utf8");
}
else{
	die ("Kết nối Thất Bại".mysqli_connect_error());
}
?>