<?php 
	if (isset($_SESSION['username'])) {
		require "template/page/dashboard.php";
	}else {
		header("location: index.php?page=users&act=login");
	}
?>