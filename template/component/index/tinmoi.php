<!-- Hiển thị Tin tức mới nhất -->
<div class="col-md-8 list-content-left">
	<div class="left">
		<div class="title">
			Tin tức mới nhất
		</div>
		<?php 
		foreach ($tin_moi_nhat as $item) {
			$idpost_new = $item['idpost'];
			$title_new = $item['title'];
			$time_ago_new = $posts->getTimeAgo($item['datepost']);
			$author_new = $author->getAuthor($item['iduser']);
			$date_new = date("d-m-Y",strtotime($item['datepost']));
			?>
			<div class="list-baibao">
				<div class="row">
					<div class="col-lg-5">
						<div class="div-picture">
							<img src="template/assets/images/bim.jpg" alt="" class="picture-list" style="width:270px; height: 190px; object-fit: cover;object-position: center center;">
						</div>
					</div>
					<div class="col-lg-7">
						<div class="text-post">
							<a href=""><h5><?php echo $title_new ?></h5></a>
							<ul>
								<li><i class="far fa-user"></i> <?php echo $author_new ?></li>
								<li><i class="far fa-clock"></i> <?php echo $time_ago_new ?></li>
								<li><i class="far fa-calendar-alt"></i> <?php echo $date_new ?></li>
							</ul>
							<p><?php echo $posts->getWordContentPost($numContentDes,$idpost_new); ?></p>
						</div>
					</div>
				</div>
			</div>
			<?php 
		}
		?>
		<nav aria-label="Page navigation" class="splitpage" numpost="<?php echo $numTinmoinhat ?>">
			<ul class="pagination" >
				<li class="page-item"><a class="page-link" >Previous</a></li>
				<?php 
				for($i = 1; $i <= $all_page_post; $i++){
					?>
					<li class="page-item"><a class="page-link pl_phantrang linkactive" id="<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
				}
				?>

				<li class="page-item"><a class="page-link" >Next</a></li>
			</ul>
		</nav>
		<?php 
		require "template/component/index/xemnhieunhat.php";
		?>
	</div>
	<script type="text/javascript" src="template/assets/js/ajax/page.js"></script>	
</div>