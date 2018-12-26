<div class="top-content">
	<div class="top-content-on">
		<div class="row">
			<?php 
			if(count($hotnews) > 2){
				?>
				<div class="col-md-8 post1">
					<div class="top-content-left carousel slide" id="carouselExampleIndicators" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<?php
							if(isset($hotnews1)){
								for($i = 1; $i <= count($hotnews1) ; $i++){
									?>
									<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>"></li>
									<?php 
								} 
							}
							?>
						</ol>
						<div class="carousel-inner">
							<?php 
							if(count($hotnews) > 0 && count($hotnews) >= 3){

								?>
								<div class="carousel-item active">
									<img src="template/assets/images/bim.jpg" alt="picture" class="img-top-content-left post d-block w-100">
									<div class="text-img">
										<h3><?php echo $hotnewsactive['title'] ?></h3>
										<ul>
											<li><i class="far fa-user"></i> <?php echo $authoractive ?></li>
											<li><i class="far fa-clock"></i> <?php echo $timeactive_ago ?></li>
											<li><i class="far fa-calendar-alt"></i> <?php echo $dateactive ?></li>
										</ul>
									</div>
								</div>
								<?php 
								foreach ($hotnews1 as $item) {
									$author_cr = $author->getAuthor($item['iduser']);
									$time_cr_ago = $posts->getTimeAgo($item['datepost']);
									$date_cr = date("d-m-Y",strtotime($item['datepost']))
									?>
									<div class="carousel-item">
										<img src="template/assets/images/bim.jpg" alt="picture" class="img-top-content-left post d-block w-100">
										<div class="text-img">
											<h3><?php echo $item['title'] ?></h3>
											<ul>
												<li><i class="far fa-user"></i> <?php echo $author_cr ?></li>
												<li><i class="far fa-clock"></i> <?php echo $time_cr_ago ?></li>
												<li><i class="far fa-calendar-alt"></i> <?php echo $date_cr ?></li>
											</ul>
										</div>
									</div>
									<?php  
								}
							}
							?>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>

				</div>
				<div class="col-md-4 post2">
					<?php 
					foreach ($hotnews2 as $item) {
						$title_hnr = $item['title'];
						$time_ago_hnr = $posts->getTimeAgo($item['datepost']);
						$author_hnr = $author->getAuthor($item['iduser']);
						$date_hnr = date("d-m-Y",strtotime($item['datepost']));
						?>
						<div class="anhtop1">
							<img src="template/assets/images/cuchoami.jpg" alt="picture" class="img-top-content-right post">
							<div class="text-img-small">
								<h5><?php echo  $item['title']?></h5>
								<ul>
									<li><i class="far fa-user"></i> <?php echo $author_hnr ?></li>
									<li><i class="far fa-clock"></i> <?php echo $time_ago_hnr ?></li>
									<li><i class="far fa-calendar-alt"></i> <?php echo $date_hnr ?></li>
								</ul>
							</div>
						</div>
						<?php 
					}
					?>
				</div>
				<?php
			}elseif(count($hotnews) == 2){
				foreach ($hotnews as $item) {
					$title_p2 = $item['title'];
					$time_ago_p2 = $posts->getTimeAgo($item['datepost']);
					$author_p2 = $author->getAuthor($item['iduser']);
					$date_p2 = date("d-m-Y",strtotime($item['datepost']));
					?>
					<div class="col-md-6">
						<div class="news2">
							<img src="template/assets/images/cuchoami.jpg" alt="picture" class="img-top-content-right post">
							<div class="text-img-small">
								<h5><?php echo  $title_p2?></h5>
								<ul>
									<li><i class="far fa-user"></i> <?php echo $author_p2 ?></li>
									<li><i class="far fa-clock"></i> <?php echo $time_ago_p2 ?></li>
									<li><i class="far fa-calendar-alt"></i> <?php echo $date_p2 ?></li>
								</ul>
							</div>
						</div>
					</div>
					<?php
				}
			}else {
				foreach ($hotnews as $item) {
					$title_p2 = $item['title'];
					$time_ago_p2 = $posts->getTimeAgo($item['datepost']);
					$author_p2 = $author->getAuthor($item['iduser']);
					$date_p2 = date("d-m-Y",strtotime($item['datepost']));
					?>
					<div class="col-md-12">
						<div class="news1">
							<img src="template/assets/images/cuchoami.jpg" alt="picture" class="img-top-content-right post">
							<div class="text-img-small">
								<h5><?php echo  $title_p2?></h5>
								<ul>
									<li><i class="far fa-user"></i> <?php echo $author_p2 ?></li>
									<li><i class="far fa-clock"></i> <?php echo $time_ago_p2 ?></li>
									<li><i class="far fa-calendar-alt"></i> <?php echo $date_p2 ?></li>
								</ul>
							</div>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</div>
</div>
</div>
<div class="maincontent">
	<div class="row">