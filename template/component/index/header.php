<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="template/assets/css/all.min.css">
	<link rel="stylesheet" href="template/assets/css/bootstrap.min.css">
	<script src="template/assets/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="template/assets/css/index.css">
	<title>TBP Team New</title>
</head>
<body>
	<div class="header">
		<div class="nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-nav ">
				<span class="navbar-brand mb-0 h1"><a href="index.php"><img src="template/assets/images/free_horizontal_on_white_by_logaster (1).png" alt="" class="logo"></a></span>
				<div class="input-group mb-0 search">
					<form action="index.php?act=search" method="POST" class="group-form form-search">
						<input type="text" class="form-control" placeholder="Nhập nội dung tìm kiếm" name="inputword" aria-label="search" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary button-search" type="submit" name="btn-submit"><i class="fas fa-search"></i></button>
						</div>
					</form>
				</div>
				<div class="top-nav-right navbar">
					
					<div class="dropdown show">
						<?php 
							if(isset($_SESSION['username'])){

						?>
						<a href="index.php?page=dashboard"  id="dropdownMenuLink">
							Xin chào <?php echo $_SESSION['username'] ?>
						</a>
						<?php 
							}else{
								?>
								<a href="index.php?page=users&act=login" role="link" id="dropdownMenuLink">
							Đăng nhập
						</a>
								<?php
							}
						?>
						
					</div>
				</div>
			</nav>
		</div>