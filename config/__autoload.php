<?php
if (isset($_GET['page'])) {
	$page = $_GET['page'];
	function __autoload($filename){
		if($_GET['page'] == 'posts'){
			require 'model/author/author.php';
			require 'model/categories/categories.php';
			require 'model/users/users.php';
		}
		require 'model/'.$GLOBALS['page'].'/'.$filename.'.php';
	}
}
?>