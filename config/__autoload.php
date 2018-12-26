<?php
if(isset($_GET['page'])) {
	$page = $_GET['page'];
	function __autoload($filename){
		if($_GET['page'] == 'posts'){
			require_once 'model/author/author.php';
			require_once 'model/categories/categories.php';
			require_once 'model/users/users.php';
			require_once 'model/page/page.php';
		}
		require_once 'model/'.$GLOBALS['page'].'/'.$filename.'.php';
	}
}else{
	require_once 'model/page/page.php';
	require_once 'model/author/author.php';
	require_once 'model/posts/posts.php';
}
?>