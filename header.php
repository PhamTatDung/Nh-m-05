<?php
ob_start();
session_start();
include_once('cauhinh/ketnoi.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang chủ bạn ei!!</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/slide.css">
</head>
<body>
	<!-- phần header -->
	<div id="header">
		<div class="container">
			<div class="row">
				<div id="logo" class="col-md-3 col-sm-12 col-xs-12">
					<h1><a href="#"><img src="HondaPhoto/LoGo/logoteam.png"></a></h1>
				</div>
				<div id="timKiem" class="col-md-7 col-xs-12 col-sm-12">
					<input type="text" name="txt" value="Nhập Từ Khóa Tìm Kiếm...">
					<input type="submit" name="sb" value="Tìm Kiếm">
				</div>
				<div id="gioHang">
					Giỏ hàng<a href="#">1</a>
				</div>
			</div>
		</div>
	</div>
	