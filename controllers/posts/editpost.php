<?php 
	$posts = new Posts;
	$author = new Author;
	$categories = new Categories;
	$all_posts = $posts->showAllPost();

	

	require "template/posts/editpost.php";
?>