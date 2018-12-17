<?php 
$page = new Page;

$hotnews = $page->getHotNews(3);
require "template/page/index.php";
?>