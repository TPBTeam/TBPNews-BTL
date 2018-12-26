<?php 
$page = new Page;
$author = new Author;
$posts = new Posts;

// Hiển bài viết trên HotNews
$numhotnews = 6; //Số bài viết hiển thị (lớn hơn hoặc bằng 3 để hiển thị)
$hotnews = $page->getHotNews($numhotnews);

if(count($hotnews) >= 3){
	$hotnewsactive = $hotnews[0];
	$titleactive = $hotnewsactive['title'];
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
if(count($hotnews) == 0){
	$alert_Zero_Post = 'Chưa có bài viết nào';
}
require "template/posts/viewdetail.php";
?>