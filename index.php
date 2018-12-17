<?php
	session_start();
	require "config/__autoload.php"; 
	require "config/db.php";
	$db = new Database; 
	$db->connect();

	if(isset($_GET['page'])){
		$pagenews = $_GET['page'];
		switch ($pagenews) {
			case 'users':
				require "controllers/users/users.php";				
				break;

			case 'dashboard':
				require "controllers/page/dashboard.php";				
				break;
			
			case 'categories':
				require "controllers/categories/categories.php";				
				break;
			
			case 'posts':
				require "controllers/posts/posts.php";				
				break;
			
			case 'dashboard':
				require "controllers/page/dashboard.php";				
				break;
			
			case 'dashboard':
				require "controllers/page/dashboard.php";				
				break;
			
			default:
				// code...
				break;
		}
	}else {
				require "controllers/page/index.php";				
	}
?>