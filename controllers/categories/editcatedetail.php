<?php 
$idcate = $_GET['idcate'];
$label = $categories->getCategory($idcate);
$url = $categories->getUrl($idcate);
$description = $categories->getFullDescription($idcate);

if(isset($_POST['btn-submit'])){
	$label = $_POST['label'];
	$url = $_POST['url'];
	$description = $_POST['description'];
	if($categories->isExistNameforUD($idcate,$label)){
		$alert = "<p class='erroralert'>Tên chuyên mục bị trừng lặp</p>"; 
	}else if($categories->isExistLinkforUD($idcate,$url)){
		$alert = "<p class='erroralert'>Đường dẫn bị trùng lặp</p>"; 
	}else {
		if($categories->updateCategory($idcate,$label,$url,$description)){
			$alert = "<p class='alertsuccess'>Cập nhật thành công<br /><a href='index.php?page=categories&act=editcategory'><-- Quay lại chuyên mục</a></p>";
		}else {
			$alert = "<p class='alerterror'>Xảy ra lỗi, vui lòng báo lại với quản trị</p>";
		}
	}
}

require "template/categories/editcatedetail.php";
?>