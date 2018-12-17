<?php
require "../../config/db.php";
require "../../libs/function.php";
$db = new Database();
$db->connect();
$tagname = $_POST['tagname'];
switch ($tagname) {
	case 'email':
	$email = $_POST['val'];
	$status = $db->selectIf("user","email = '$email'");
	if($status->num_rows == 1){
		echo "<i class='fas fa-plus alertreg error'></i>";
	}else if(!checkEmail($email)) {
		echo "<i class='fas fa-plus alertreg error'></i>";
	}
	else {
		echo  "<i class='fas fa-check alertreg correct'></i>";
	}
	break;

	case 'username':
	$username = $_POST['val'];
	$status = $db->selectIf("user","username = '$username'");
	if($status->num_rows == 1 || strlen($username) < 4){
		echo "<i class='fas fa-plus alertreg error'></i>";
	}else {
		echo  "<i class='fas fa-check alertreg correct'></i>";
	}
	break;

	case 'cfpassword':
	$cfpass = $_POST['val'];
	$pass = $_POST['pass'];
	if($cfpass != $pass){
		echo "<i class='fas fa-plus alertreg error'></i>";
	}else {
		echo  "<i class='fas fa-check alertreg correct'></i>";
	}
	break;

	default:
			// code...
	break;
}
?>