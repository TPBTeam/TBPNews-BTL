<?php
if(!isset($_SESSION['username'])){
	if(isset($_POST['btn-submit'])) {
		if(!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['cfpassword'])){
			$fullname   = $_POST['fullname'];
			$email      = $_POST['email'];
			$username   = $_POST['username'];
			$password   = $_POST['password'];
			$cfpassword = $_POST['cfpassword'];
			if($password != $cfpassword){
				$alert = "Mật khẩu không trùng khớp";
			}
			else if($users->existUser($username)) {
				$alert = "Tài khoản đã tồn tại";
			}
			else{
				$password = md5($password);
				$users->register("$username","$password","$email","$fullname");
			}

		}else {
			$alert = "Vui lòng nhập đầy đủ các trường";
		}
	}
}else {
	header("location: index.php?page=dashboard");
}

require 'template/page/register.php';
?>