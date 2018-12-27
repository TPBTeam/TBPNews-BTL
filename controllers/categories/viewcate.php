<?php
$page = new Page;
$author = new Author;
$posts = new Posts; 
// Hiển bài viết trên HotNews
$numhotnews = 8; //Số bài viết hiển thị (lớn hơn hoặc bằng 3 để hiển thị)
$hotnews = $page->getHotNews($numhotnews);

if(count($hotnews) >= 3){
	$hotnewsactive = $hotnews[0];
	$titleactive = $hotnewsactive['title'];
	$contentactive = $hotnewsactive['content'];
	$idpostactive = $hotnewsactive['idpost'];
	$authoractive = $author->getAuthor($hotnewsactive['iduser']);
	$datepostactive = $hotnewsactive['datepost'];
	$timeactive_ago = $posts->getTimeAgo($datepostactive);
	$dateactive = date("d-m-Y",strtotime($datepostactive));


	if(count($hotnews) > 3){
		for ($i = 1; $i < count($hotnews)-2; $i++) {
			$hotnews1[] = $hotnews[$i];
		}
	}
	for ($i = count($hotnews); $i > count($hotnews)-2; $i--) {
		$hotnews2[] = $hotnews[$i-1];
	}
}

// Hiển thị các bài viết trong chuyên mục
if(isset($_GET['idcate'])){
	$idcate = $_GET['idcate'];
	$namecate = $categories->getCategory($idcate);
	$arrPost = $posts->getPostbyCategory($idcate);
}else {
	header("location: index.php?page=categories");
}
require_once "template/categories/viewcate.php";
?>