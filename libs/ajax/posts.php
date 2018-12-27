<?php
require_once "../../config/db.php";
require_once "../../model/posts/posts.php";
require_once "../../model/users/users.php";
require_once "../../model/categories/categories.php";
session_start();
$posts = new Posts;
$categories = new Categories;
$users = new Users;
$posts->connect();
//Chỉnh sửa ảnh đại diện bài viết
if(isset($_POST['func']) && $_POST['func'] == 'thumb'){
	// $formData = $_POST['formData'];
	echo "he";
}
//Tự động get link từ tiêu đề
if(isset($_POST['func']) && $_POST['func'] == 'getLinkfromTitle'){
	$urlval = $_POST['urlval'];
	die($categories->setLink($urlval));
}
// Thêm bài viết
if(isset($_POST['func']) && $_POST['func'] == 'addpost'){
	$username = $users->getIdUserByName($_SESSION['username']);
	$title = $_POST['title'];
	$url = $_POST['url'];
	$content = $_POST['content'];
	$status = $posts->getIdStatusByName($_POST['status']);
	$category = $categories->getIdCategoryByName($_POST['category']);
	$datepost = date("Y-m-d H:i:s",time());
	$positionadd = $posts->getIdTypeByName($_POST['positionadd']);

	if(empty($title)){
		die("Tiêu đề không được để trống");
	}elseif ($posts->isExistUrl($url)) {
		$url .= "-".rand(100,1000);
	}elseif(empty($url)){
		die("Đường dẫn không được để trống");
	}else{
		if($posts->addPost($title,$status,$url,$content,$username,$category,$datepost,$positionadd)){
			$idpostLT = $posts->getIdPostLastest();
			echo "index.php?page=posts&act=editpost&idpost=$idpostLT";
		}else {
			echo "Lỗi DB";
		}
	}
}


// Xóa bài viết
if(isset($_POST['func']) && $_POST['func'] == 'delpost'){
	echo "Hello";
	if(isset($_POST['idpost'])){
		$idpost = $_POST['idpost'];
		$posts->deletePost($idpost);
	}
}
// Thêm chuyên mục trong bài viết
if(isset($_POST['func']) && $_POST['func'] == 'addcate'){
	$namecate = $_POST['namecate'];
	if(empty($namecate)){
		die("FALSE");
	}else {
		if($categories->isExistName($namecate)){
			die("EXIST");
		}else {
			$url = $categories->setLink($namecate);
			while($categories->isExistLink($url)){
				$url .= "-".rand(100,9999);
			}
			if($categories->addCategoryInPost($namecate,$url)){
				die("TRUE");
			}
		}
	}
}

// Cập nhật bài viết
if(isset($_POST['isajax']) && $_POST['isajax'] =='isajax' ){
	$idpost = $_POST['idpost'];
	$year = $_POST['year'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$hour = $_POST['hour'];
	$minutes = $_POST['minutes'];
	$seconds = $_POST['seconds'];
	$title = $_POST['title'];
	$url = $_POST['url'];
	$content = $_POST['content'];
	$idstatus = $posts->getIdStatusByName($_POST['status']);
	$category = $categories->getIdCategoryByName($_POST['category']);
	$date = "$year-$month-$day $hour:$minutes:$seconds";
	$idtype = $posts->getIdTypeByName($_POST['typename']);

	if($posts->isExistUrlForUD($idpost,$url)){
		die("<p class='alerterror'>Trùng đường dẫn với bài viết khác<br /><a href='index.php?page=categories&act=editcategory'></p>");
	}else{
		if(empty($url)){
			$url = $categories->setLink($title);
		}
		if($posts->updatePost($idpost,$title,$url,$content,$idstatus,$date,$category,$idtype)){
			die("<p class='alertsuccess'>Cập nhật thành công<a href='index.php?page=categories&act=editcategory'></p>");
		}else {
			die("<p class='alerterror'>Lỗi database<a href='index.php?page=categories&act=editcategory'></p>");
		}
		
	}
}

?>