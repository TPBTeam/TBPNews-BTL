<?php 
require_once "template/component/index/header.php";
require_once "template/component/index/menu.php";
require_once "template/component/index/hotnews.php";
?>
<div class="col-md-8 postdetail">
	<div class="background-baibao">
		<div class="top-background">
			<div class="list">
				<nav class=" navbar navbar-expand-lg navbar-light bg-light list-noidung">
					<a class="nav-link active thanhnoidung" href="index.php">Home</a>
					<a class="nav-link thanhnoidung" href="#"><i class="fas fa-angle-right"></i></a>
					<a class="nav-link thanhnoidung" href="#">Xã hội</a>
				</nav>
			</div>
		</div>
		<div class="content-noidung">
			<div class="text-post noidung">
			<h2><?php echo $title_detail ?></h2>
			<ul>
								<li><i class="far fa-user"></i> <?php echo $author_detail ?></li>
								<li><i class="far fa-clock"></i> <?php echo $time_ago_detail ?></li>
								<li><i class="far fa-calendar-alt"></i> <?php echo $time_detail ?></li>
			</ul>
			</div>
			<div class="content_detail">
				<?php echo $content_detail ?>
			</div>
			<h5>>>Đọc thêm: <a href=""> Hơn 150 du khách người Việt Nam nghi bỏ trốn tại Đài Loan</a></h5>
		</div>
		
	</div>
</div>
<?php
// Hiển thị SiderBar 
require "template/component/index/siderbarright.php";
// Kết thúc SiderBar 
require_once "template/component/index/footer.php";
?>