<!DOCTYPE html5>
<html>
<head>
	<title>Đăng ký tài khoản</title>
	<link rel="stylesheet" type="text/css" href="template/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="template/assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="template/assets/css/style.css">
</head>
<body>
	<body id="RegisterForm">
		<div class="container">
			<h1 class="form-heading">TPB Team</h1>
			<div class="login-form">
				<div class="main-div">
					<div class="panel">
						<h2>Đăng ký tài khoản</h2>
						<p>Điền đầy đủ thông tin để đăng ký</p>
					</div>
					<div class="alertnotification">
						<?php 
						if(isset($alert)){
							echo $alert;
						}
						?>
					</div>
					<form id="Register" method="POST">
						<div class="form-group">
							<p>Tên đầy đủ:</p>
							<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ và tên">

						</div>
						<div class="form-group">
							<p>Địa chỉ Email:</p>
							<input type="email" class="form-control"  name="email" placeholder="Địa chỉ email" id="email">
							<div id="alertemail">
							</div>
						</div>
						<div class="form-group">
							<p>Tài khoản:</p>
							<input type="text" class="form-control"  name="username" placeholder="Tên tài khoản" id="username" pattern="[A-Za-z]{4,}" title="Tên tài khoản phải có ít nhất 4 kí tự">
							<div id="alertuser">
							</div>
						</div><div class="form-group">
							<p>Mật khẩu:</p>
							<input type="password" class="form-control"  name="password" placeholder="Mật khẩu" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Phải chứa ít nhất một số và một chữ hoa và chữ thường và ít nhất 8 ký tự trở lên">
						</div><div class="form-group">
							<p>Nhập lại mật khẩu:</p>
							<input type="password" class="form-control"  name="cfpassword" placeholder="Xác nhận mật khẩu" id="cfpassword">
							<div id="alertpass">
							</div>
						</div>
						
						<input type="submit" name="btn-submit" class="btn btn-primary" value="Đăng ký">
						<p>Đã có tài khoản? <a href="index.php?page=users&act=login">Đăng nhập</a></p>
					</form>
				</div>
				<p class="botto-text"> Viết vởi nhóm TPB</p>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="template/assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="template/assets/js/register.js"></script>
</body>
</html>

