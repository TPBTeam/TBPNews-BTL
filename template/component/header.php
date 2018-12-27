<!DOCTYPE html>
<html>
<head>
	<title><?php $title ?></title>
	<link rel="stylesheet" type="text/css" href="template/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="template/assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="template/assets/css/style.css">
	<script id="jquerynews" type="text/javascript" src="template/assets/js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="header">
				<div class="TPB">TPB Team</div>
				<ul>
					<li>
						<a href="http://localhost:8080/news"><i class="fas fa-home"></i> Trang chủ</a>
					</li>
					<li><a href="#"><i class="far fa-comments"></i> 10</a></li>
					<li><a href="index.php?page=posts&act=addpost"><i class="fas fa-plus"></i> New</a></li>
				</ul>
				<div class="hellouser">
					<ul>
						<li>Hello <?php if(isset($_SESSION['username'])){
							echo $_SESSION['username'];
						}else {
							echo "Khách";
						} ?>
						<?php if(isset($_SESSION['username'])){

						 ?>
						<ul class="navhellouser">
							<li><a href="#">View Profle</a></li>
							<li><a href="index.php?page=users&act=logout">Logout</a></li>
						</ul>
						<?php } ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="maincontent">
	<div class="row">