<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="template/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="template/assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="template/assets/css/style.css">
</head>
<body>
	<body id="LoginForm">
		<div class="container">
			<h1 class="form-heading">TPB Team</h1>
			<div class="login-form">
				<div class="main-div">
					<div class="panel">
						<h2>Đăng nhập quản trị</h2>
						<p>Nhập đầy đủ tài khoản và mật khẩu</p>
					</div>
					<div class="alertnotification">
						<?php 
							if(isset($alert)){
								echo $alert;
							}
						?>
					</div>
					<form id="Login" method="POST" action="index.php?page=users&act=login">
						<div class="form-group">
							<input type="text" class="form-control" id="inputEmail" name="username" placeholder="Tài khoản">

						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Mật khẩu">
						</div>
						<div class="forgot">
							<a href="reset.html">Quên mật khẩu?</a>
						</div>
						<input type="submit" name="btn-submit" class="btn btn-primary" value="Đăng nhập">
					</form>
				</div>
				<p class="botto-text"> Viết vởi nhóm TPB</p>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="libs/function.php" ></script>
</body>
</html>

