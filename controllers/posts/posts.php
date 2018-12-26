<?php
$posts = new Posts;
$categories = new Categories;


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

			case 'viewpost':
			require "controllers/posts/viewdetail.php";
			break;
			default:
				// code...
			break;
		}
	}else {
		header("location: index.php?page=posts&act=editpost");
	}
}else {
	header("location: index.php");
}



?>