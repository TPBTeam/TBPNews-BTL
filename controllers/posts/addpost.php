<?php 
// Khởi tạo đối tượng
$posts = new Posts;
$author = new Author;
$categories = new Categories;


$allstatus = $posts->getAllStatus();
$allcategories = $categories->getAllCategories();
$alltype = $posts->getAllType();

require "template/posts/addpost.php";
?>