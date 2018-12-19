<?php 
$page = new Page;
$author = new Author;
$posts = new Posts;

// Hiển thị số bài viết trên HotNews
$numhotnews = 9;
$hotnews = $page->getHotNews($numhotnews);

if(count($hotnews) > 5){
	$hotnewsactive = $hotnews[0];
	$titleactive = $hotnewsactive['title'];
	$authoractive = $author->getAuthor($hotnewsactive['iduser']);
	$datepostactive = $hotnewsactive['datepost'];
	$timeactive_ago = $posts->getTimeAgo($datepostactive);
	$dateactive = date("d-m-Y",strtotime($datepostactive));

	for ($i = 1; $i < count($hotnews)-2; $i++) {
		$hotnews1[] = $hotnews[$i];
	}
	for ($i = count($hotnews); $i > count($hotnews)-2; $i--) {
		$hotnews2[] = $hotnews[$i-1];
	}
}
require "template/page/index.php";
?>