<!-- Siderbar Right -->
<div class="col-md-4">
	<div class="siderbar">
		<div class="right">
			<div class="title">
				Tin tức nổi bật
			</div>
			<?php 
						if(count($Tin_Noi_Bat) > 0){

					?>
			<div class="tinphobien">
				<div class="div-post">
					<img src="<?php echo $srcThumb_Tin_Noi_Bat_Top ?>" alt="" class="sidebar-img post">
				</div>
				<div class="text-post storie">
					
					<a href=""><h5><?php echo $title_Tin_Noi_Bat_Top ?></h5></a>
					<ul>
						<li><i class="far fa-user"></i> <?php echo $author_Tin_Noi_Bat_Top ?></li>
						<li><i class="far fa-clock"></i> <?php echo $time_ago_Tin_Noi_Bat_Top ?></li>
						<li><i class="far fa-calendar-alt"></i> <?php echo $datepost_Tin_Noi_Bat_Top ?></li>
					</ul>
					<p><?php echo $des_Tin_Noi_Bat_Top ?></p>
				<?php }else {
					?>
					<div class="tinphobien">
				<div class="div-post">
					<img src="template/assets/images/thumdefault.jpg" alt="" class="sidebar-img post">
				</div>
				<div class="text-post storie">
					<a href=""><h5>Tin mẫu nổi bật</h5></a>
					<ul>
						<li><i class="far fa-user"></i> admin</li>
						<li><i class="far fa-clock"></i> 1 giờ trước</li>
						<li><i class="far fa-calendar-alt"></i> 17-11-1999</li>
					</ul>
					<p>Nội dung mẫu hiển thị cho siderbar</p>
					<?php
				} ?>
				</div>
			</div>
			<hr>
			<div class="post-list">
				<?php 
				for ($i = 1; $i < count($Tin_Noi_Bat); $i++) {
					$title_Tin_Noi_Bat = $Tin_Noi_Bat[$i]['title'];
					$author_Tin_Noi_Bat = $author->getAuthor($Tin_Noi_Bat[$i]['iduser']);
					$time_ago_Tin_Noi_Bat = $posts->getTimeAgo($Tin_Noi_Bat[$i]['datepost']);
					$datepost_Tin_Noi_Bat = date("d-m-Y",strtotime($Tin_Noi_Bat[$i]['datepost']));
					$des_Tin_Noi_Bat = $posts->getWordContentPost(30,$Tin_Noi_Bat[$i]['idpost']);
					$srcThumb_Tin_Noi_Bat = $posts->getThumb($Tin_Noi_Bat[$i]['idpost']);
					?>
					<div class="single-post d-flex flex-row">
						<div class="single-post-picture">
							<img src="<?php echo $srcThumb_Tin_Noi_Bat ?>" alt="" class="anh-siderbar">
						</div>
						<div class="text-post phobien">
							<a href=""><h6><?php echo $title_Tin_Noi_Bat ?></h6></a>
							<ul>
								<li><i class="far fa-user"></i> <?php echo $author_Tin_Noi_Bat ?></li>
								<li><i class="far fa-clock"></i> <?php echo $time_ago_Tin_Noi_Bat ?></li>
								<li><i class="far fa-calendar-alt"></i> <?php echo $datepost_Tin_Noi_Bat ?></li>
							</ul>
						</div>
					</div>
					<hr>
					<?php 
				}
				?>
			</div>
		</div>
	</div>
</div>