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
if(count($Tin_Noi_Bat) > 0){
	$title_Tin_Noi_Bat_Top = $Tin_Noi_Bat[0]['title'];
$author_Tin_Noi_Bat_Top = $author->getAuthor($Tin_Noi_Bat[0]['iduser']);
$time_ago_Tin_Noi_Bat_Top = $posts->getTimeAgo($Tin_Noi_Bat[0]['datepost']);
$datepost_Tin_Noi_Bat_Top = date("d-m-Y",strtotime($Tin_Noi_Bat[0]['datepost']));
$des_Tin_Noi_Bat_Top = $posts->getWordContentPost(30,$Tin_Noi_Bat[0]['idpost']);
$srcThumb_Tin_Noi_Bat_Top = $posts->getThumb($Tin_Noi_Bat[0]['idpost']);
}
//Hiển thị nội dung
if(isset($_GET['idpost'])){
	$idpost_detail = $_GET['idpost'];
	$title_detail = $posts->getTitlePost($idpost_detail);
	$author_detail = $author->getAuthor($posts->getIdAuthor($idpost_detail));
	$time_ago_detail = $posts->getTimeAgo($posts->getDate($idpost_detail));
	$time_detail = date("d-m-Y",strtotime($posts->getDate($idpost_detail)));
	$content_detail = $posts->getContentPost($idpost_detail);
	$category_detail = $categories->getCategory($posts->getIdCategory($idpost_detail));
	$idpost_detail_rand = $posts->getRandPostfromCategory($posts->getIdCategory($idpost_detail),$idpost_detail);
	$title_detail_rand = $posts->getTitlePost($idpost_detail_rand);

}else {
	header("location: index.php");
}
require "template/posts/viewdetail.php";
?>