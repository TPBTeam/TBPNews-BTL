<?php
require "../../config/db.php";
require "../../model/posts/posts.php";
require "../../model/page/page.php";
require "../../model/author/author.php";
$posts = new Posts;
$page = new Page;
$author = new Author;
$posts->connect();

if(isset($_POST['func']) && $_POST['func'] == 'phantrang'){
	$arrResult = array();
	$currentpage = $_POST['currentpage'];
	$numpost = $_POST['numpost'];
	$post_start = $currentpage * $numpost - $numpost;
	$allnumpost = $posts->getNumberPost();
	$arr_Tin_moi_nhat = $page->SplitTinMoiNhat($post_start,$numpost);
	foreach ($arr_Tin_moi_nhat as $value) {
		$authorPost = $author->getAuthor($value['iduser']);
		$timePost = $posts->getTimeAgo($value['datepost']);
		$datepost = date("d-m-Y",strtotime($value['datepost']));
		$content = $posts->getWordContentPost(40,$value['idpost']);
		$srcImage = $posts->getThumb($content);
		if($srcImage == FALSE){
			$srcImage = "template/assets/images/thumdefault.jpg";
		}
		$arrResult[] = array(
			"title" => $value['title'],
			"author" => $authorPost,
			"timeago" => $timePost,
			"datepost" => $datepost,
			"content" => $content,
			"srcImage" => $srcImage,
		); 
	}
	die(json_encode($arrResult,JSON_UNESCAPED_UNICODE));
}

?>