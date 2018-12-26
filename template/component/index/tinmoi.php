<!-- Hiển thị Tin tức mới nhất -->
<div class="col-md-8 list-content-left">
	<div class="left">
		<div class="title titletinmoinhat">
			Tin tức mới nhất
		</div>
		<div id="tinmoinhat">
			<?php 
			if(isset($alert_Zero_Post)){
				echo $alert_Zero_Post;
			}
			foreach ($tin_moi_nhat as $item) {
				$idpost_new = $item['idpost'];
				$title_new = $item['title'];
				$time_ago_new = $posts->getTimeAgo($item['datepost']);
				$author_new = $author->getAuthor($item['iduser']);
				$date_new = date("d-m-Y",strtotime($item['datepost']));
				// $content_tin_moi_nhat = $posts->getContentPost($idpost_new);
				// $ImgBack = strstr($content_tin_moi_nhat,"<img");
				// $pEndImage = strpos($ImgBack,">");
				// $tagImage = substr($ImgBack,0,$pEndImage);
				// $srcProp = strstr($tagImage,"src=");
				// $isDau = $srcProp[4];
				// $isDauback = $srcProp[5];
				// $srcProp = strstr($srcProp,$isDauback);
				// $pDau = strpos($srcProp,$isDau);
				// $src = substr($srcProp,0,$pDau);
				$srcThumb = $posts->getThumb($idpost_new);
				if($srcThumb == FALSE){
					$srcThumb = "template/assets/images/thumdefault.jpg";
				}
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
								<a href="index.php?page=posts&act=viewpost&idpost=<?php echo $idpost_new ?>"><h5><?php echo $title_new ?></h5></a>
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
		</div>
		<?php 
		if(count($hotnews) != 0){
			?>
			<nav aria-label="Page navigation" class="splitpage" numpost="<?php echo $numTinmoinhat ?>">
				<ul class="pagination" >
					<!-- <li class="page-item"><a class="page-link" id="previous_tmn" >Previous</a></li> -->
					<?php 
					for($i = 1; $i <= $all_page_post; $i++){
						?>
						<li class="page-item"><a class="page-link pl_phantrang <?php if($i == 1){echo 'activesplit';} ?>" currentpageid="<?php echo $i ?>"><?php echo $i ?></a></li>
						<?php
					}
					?>

					<!-- <li class="page-item"><a class="page-link" id="next_tmn">Next</a></li> -->
				</ul>
			</nav>
			<?php
		}
		?>
		<?php 
		require "template/component/index/xemnhieunhat.php";
		?>
	</div>
	<script type="text/javascript" src="template/assets/js/ajax/page.js"></script>	
</div>