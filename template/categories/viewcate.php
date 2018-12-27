<?php 
require_once "template/component/index/header.php";
require_once "template/component/index/menu.php";
require_once "template/component/index/hotnews.php";
?>
<div class="col-md-8 postdetail">
	<div class="background-baibao">
		<div class="top-background hienthi">
			<nav class=" navbar navbar-expand-lg navbar-light thanhtieude">
				<a class="nav-link thanhluachon" href="#"><?php echo $namecate ?></a>

			</nav>
			<div class="left">
				<?php if(count($arrPost) > 0){

				 foreach ($arrPost as $item): 
					$title = $item['title'];
					$author_cate = $author->getAuthor($item["iduser"]);
					$time_ago = $posts->getTimeAgo($item["datepost"]);
					$datepost = date("d-m-Y",strtotime($item["datepost"]));
					$srcThumb = $posts->getThumb($item["idpost"]);
					$description = $item['description'];

				?>
				<div class="list-baibao">
					<div class="row">
						<div class="col-lg-5">
							<div class="div-picture">
								<img src="<?php echo $srcThumb ?>" alt="" class="picture-list" style="width:270px; height: 190px; object-fit: cover;object-position: center center;">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="text-post">
								<a href="index.php?page=posts&act=viewpost&idpost=<?php echo $item['idpost'] ?>"><h5><?php echo $title ?></h5></a>
								<ul>
									<li><i class="far fa-user"></i> <?php echo $author_cate ?></li>
									<li><i class="far fa-clock"></i> <?php echo $time_ago ?></li>
									<li><i class="far fa-calendar-alt"></i> <?php echo $datepost ?></li>
								</ul>
								<p><?php echo $description ?></p>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			<?php }else {
				?>
				<h5>Chuyên mục rỗng</h5>
				<?php 
			} ?>

			</div>
		</div>
	</div>	
</div>
<?php
// Hiển thị SiderBar 
require "template/component/index/siderbarright.php";
// Kết thúc SiderBar 
require_once "template/component/index/footer.php";
?>