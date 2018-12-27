<?php
$posts = new Posts;
$categories = new Categories;

if(isset($_SESSION['username'])){
	if($posts->isEditor() || $posts->isAdmin()){
		if(isset($_GET['act'])){
			switch ($_GET['act']) {
				case 'editpost':
				if(isset($_GET['idpost'])){
					require "controllers/posts/editpostdetail.php";
				}else {
					require "controllers/posts/editpost.php";
				}				
				break;

				case 'addpost':
				require "controllers/posts/addpost.php";
				break;

				default:
				// Nothing...
				break;
			}
		}else {
			header("location: index.php?page=posts&act=editpost");
		}
	}
}else {
	if(isset($_GET['act']) && $_GET['act'] == 'viewpost'){
		require "controllers/posts/viewdetail.php";
	}else{
		header("location: index.php");
	}
}



?>