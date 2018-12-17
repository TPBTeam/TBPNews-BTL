<?php
$users = new Users;

if(isset($_GET['act'])){
	switch ($_GET['act']) {
		case 'login':
		require "controllers/users/login.php";				
		break;

		case 'register':
		require "controllers/users/register.php";				
		break;

		case 'logout':
		require "controllers/users/logout.php";				
		break;

		case 'viewusers':
		require "controllers/users/userlist.php";
		break;

		default:
				// code...
		break;
	}
}else {
		header("location: index.php?page=users&act=viewusers");
}
?>