<?php 
if(isset($_GET['idpost'])){
	if($posts->isExistPost($_GET['idpost'])){
		$idpost = $_GET['idpost'];
		$title = $posts->getTitlePost($idpost);
		$url = $posts->getUrlPost($idpost);
		$content = $posts->getContentPost($idpost);
		$idstatus = $posts->getIdPostStatus($idpost);
		$status = $posts->getPostStatus($idstatus);
		$datepost = $posts->getPostDate($idpost);
		$allstatus = $posts->getAllStatus();
		$idcategories = $posts->getIdCategory($idpost);
		$categoriespost = $categories->getCategory($idcategories);
		$allcategories = $categories->getAllCategories();
		$alltype = $posts->getAllType();

		if(isset($_POST['checksend'])){
			$titlenew = $_POST['title'];
			if($posts->isExistTitleForUD($idpost,$titlenew)){
				echo "Trùng CMNR";
			}
		}

	}else{
		header("location: index.php?page=posts&act=editpost");
	}
}

require "template/posts/editpostdetail.php";
?>