<?php 

$categories = new Categories;

if($categories->isEditor() || $categories->isAdmin()){
	if(isset($_GET['act'])){
		switch ($_GET['act']) {
			case 'editcategory':
			if(isset($_GET['idcate'])){
				require "controllers/categories/editcatedetail.php";
			}else {
				require "controllers/categories/editcategory.php";
			}
			break;


			default:
			// code...
			break;
		}
	}else {
		header("location: index.php?page=categories&act=editcategory");
	}
}else {
	header("location: index.php");
}


?>