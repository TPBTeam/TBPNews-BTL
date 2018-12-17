<?php 

require "libs/function.php"; 

?>
<div class="col-md-2 siderbarnews">
	<ul>
		<li <?php isPageSiderBar('page','dashboard') ?>><a href='index.php?page=dashboard'><i class='fas fa-tachometer-alt'></i> Trang tổng quan</a>
		</li>
		<li <?php isPageSiderBar('page','posts') ?>><a href='index.php?page=posts'><i class='fas fa-thumbtack'></i> Bài viết</a>
			<ul>
				<li <?php isPageSiderBar('act','editpost') ?>><a href='index.php?page=posts&act=editpost'>Tất cả bài viết</a></li>
				<li <?php isPageSiderBar('act','addpost') ?> ><a href='index.php?page=posts&act=addpost'>Thêm mới</a></li>
			</ul>
		</li>
		<li <?php isPageSiderBar('page','categories') ?>><a href="index.php?page=categories"><i class='fas fa-folder'></i> Chuyên mục</a></li>
		<li <?php isPageSiderBar('page','comment') ?>><a href=''><i class='fas fa-comments'></i> Bình luận</a></li>
		<li <?php isPageSiderBar('page','users') ?>><a href='index.php?page=users'><i class='fas fa-users'></i> Người dùng</a>
			<ul>
				<li <?php isPageSiderBar('act','viewusers') ?>><a href='index.php?page=posts&act=editpost'>Tất cả thành viên</a></li>
				<li <?php isPageSiderBar('act','addpost') ?> ><a href='index.php?page=posts&act=addpost'>Thêm mới</a></li>
			</ul>
		</li>
		<li <?php isPageSiderBar('page','setting') ?>><a href=''><i class='fas fa-sliders-h'></i> Cài đặt</a></li>
		<li <?php isPageSiderBar('page','setting') ?>><a href=''><i class='fas fa-user-circle'></i> Hồ sơ cá nhân</a></li>
	</ul>
</div>
<div class="col-md-10 showcontent">
