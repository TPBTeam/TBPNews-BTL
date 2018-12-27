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
// Hiển thị tin nổi bật
$num_Tin_Noi_Bat = 8;
$Tin_Noi_Bat = $posts->get_Tin_noi_bat($num_Tin_Noi_Bat);
// Tin Nổi Bật 1
$title_Tin_Noi_Bat_Top = $Tin_Noi_Bat[0]['title'];
$author_Tin_Noi_Bat_Top = $author->getAuthor($Tin_Noi_Bat[0]['iduser']);
$time_ago_Tin_Noi_Bat_Top = $posts->getTimeAgo($Tin_Noi_Bat[0]['datepost']);
$datepost_Tin_Noi_Bat_Top = date("d-m-Y",strtotime($Tin_Noi_Bat[0]['datepost']));
$des_Tin_Noi_Bat_Top = $posts->getWordContentPost(30,$Tin_Noi_Bat[0]['idpost']);
$srcThumb_Tin_Noi_Bat_Top = $posts->getThumb($Tin_Noi_Bat[0]['idpost']);
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