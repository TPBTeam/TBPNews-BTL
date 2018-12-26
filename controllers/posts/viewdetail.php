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