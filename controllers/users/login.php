<script type="text/javascript" src="template/assets/js/function.js"></script>
<?php
if(!isset($_SESSION['username'])){
	if(isset($_POST['btn-submit'])){
		if(!empty($_POST['username']) && !empty($_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password = md5($password);
			if($users->login("$username","$password")){
				$_SESSION['username'] = $username;
				header("location: index.php?page=dashboard");
			}else {
				$alert = "Tài khoản mật khẩu không chính xác";
			}
		}else {
			$alert = "Vui lòng nhập đầy đủ thông tin tài khoản mật khẩu";
		}
	}
}else {
	header("location: index.php?page=dashboard");
}
require 'template/page/login.php';
?>