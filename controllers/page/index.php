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
// Hiển bài viết trên Tin mới nhất
$numContentDes = 40; // Số từ mô tả nội dung của tin mới nhất
$numTinmoinhat = 5; // Số bài viết Hiển thị tin mới nhất
$tin_moi_nhat = $page->getTinMoiNhat($numTinmoinhat);
// Hiển thị phân trang cho tin mới nhất
$all_rows = $posts->getRowsNumber();
$all_page_post = ceil($all_rows/$numTinmoinhat);

require "template/page/index.php";
?>