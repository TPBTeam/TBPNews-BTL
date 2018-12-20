<?php
require "../../model/posts/posts.php";
$posts = new Posts;

if(isset($_POST['func']) && $_POST['func'] == 'phantrang'){
	$currentpage = $_POST['currentpage'];
	$numpost = $_POST['numpost'];
	$numpost = $posts->getNumberPost();
	
}

?>