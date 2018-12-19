<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="template/assets/css/all.min.css">
	<link rel="stylesheet" href="template/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="template/assets/css/index.css">
	<title>TBP Team New</title>
</head>
<body>
	<div class="header">
		<div class="nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-nav ">
				<span class="navbar-brand mb-0 h1"><img src="template/assets/images/free_horizontal_on_white_by_logaster (1).png" alt="" class="logo"></span>
				<div class="input-group mb-0 search">
					<input type="text" class="form-control" placeholder="Nhập nội dung tìm kiếm" aria-label="search" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary button-search" type="button"><i class="fas fa-search"></i></button>
					</div>
				</div>
				<div class="top-nav-right navbar">
					<a href="" class="icon-bell">
						<i class="far fa-bell"></i>
						<span class="number">10</span>
					</a>
					<div class="dropdown show">
						<a class="dropdown-toggle" href="#" role="link" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Đăng nhập
						</a>
						<div class="dropdown-menu list-dangnhap" aria-labelledby="dropdownMenuLink">
							<form>
								<div class="form-group">
									<input type="text" class="input-email" placeholder="Tài khoản">
								</div>
								<div class="form-group password">
									<i class="far fa-eye conmat"></i>
									<i class="fas fa-eye-slash conmatnham"></i>
									<input type="password" class="input-email nhapmatkhau" placeholder="Mật khẩu">
								</div>
								<div class="button-dangnhap">
									<input class="btn btn-primary" type="submit" value="Đăng ký">
									<input class="btn btn-primary button-right" type="submit" value="Đăng nhập">
								</div>	
							</form>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<!-- ----------------list-nav----------------------------------->
		<div class="list-nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light list-nav ">
				<a class="nav-link active" href="quanlitintuc.html">Home</a>
				<a class="nav-link" href="#">Xã hội</a>
				<a class="nav-link" href="#">Giáo dục</a>
				<a class="nav-link" href="#">Kinh tế</a>
				<a class="nav-link" href="#">Pháp luật</a>
				<a class="nav-link" href="#">Giải trí</a>
				<a class="nav-link" href="#">Thể thao</a>
				<a class="nav-link" href="#">Công nghệ</a>
			</nav>
		</div>
	</div>
	<!-- -------------------------top-content------------------>
	<div class="top-content">
		<div class="top-content-on">
			<div class="row">
				<div class="col-md-8 post1">
					<div class="top-content-left carousel slide" id="carouselExampleIndicators" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<?php 
								for($i = 1; $i <= count($hotnews1) ; $i++){

							?>
							<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>"></li>
							<?php 
								}
							?>
						</ol>
						<div class="carousel-inner">
							<?php 
							if(count($hotnews) > 0 && count($hotnews) >= 6){

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
			</div>
		</div>
	</div>
</div>
</div>
<div class="maincontent">
	<div class="row">
		<div class="col-md-8 list-content-left">
			<div class="left">
				<div class="title">
					Tin tức mới nhất
				</div>
				<div class="list-baibao">
					<div class="row">
						<div class="col-lg-5">
							<div class="div-picture">
								<img src="template/assets/images/bim.jpg" alt="" class="picture-list" style="width:270px; height: 190px; object-fit: cover;object-position: center center;">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="text-post">
								<a href=""><h5>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h5></a>
								<ul>
									<li><i class="far fa-user"></i> Bimbim</li>
									<li><i class="far fa-clock"></i>1 giờ</li>
									<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
								</ul>
								<p>Cúc họa mi loài hoa gọi mùa đông về đang ngập tràn sắc trắng tinh khôi trên mọi góc phố của Hà Nội.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="list-baibao">
					<div class="row">
						<div class="col-lg-5">
							<div class="div-picture">
								<img src="bim.jpg" alt="" class="picture-list" style="width:270px; height: 190px; object-fit: cover;object-position: center center;">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="text-post">
								<a href=""><h5>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h5></a>
								<ul>
									<li><i class="far fa-user"></i> Bimbim</li>
									<li><i class="far fa-clock"></i>1 giờ</li>
									<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
								</ul>
								<p>Cúc họa mi – loài hoa gọi mùa đông về đang ngập tràn sắc trắng tinh khôi trên mọi góc phố của Hà Nội.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="list-baibao">
					<div class="row">
						<div class="col-lg-5">
							<div class="div-picture">
								<img src="tamdao.jpg" alt="" class="picture-list" style="width:270px; height: 190px; object-fit: cover;object-position: center center;">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="text-post">
								<a href=""><h5>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h5></a>
								<ul>
									<li><i class="far fa-user"></i> Bimbim</li>
									<li><i class="far fa-clock"></i>1 giờ</li>
									<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
								</ul>
								<p>Cúc họa mi loài hoa gọi mùa đông về đang ngập tràn sắc trắng tinh khôi trên mọi góc phố của Hà Nội.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="list-baibao">
					<div class="row">
						<div class="col-lg-5">
							<div class="div-picture">
								<img src="tamdao.jpg" alt="" class="picture-list" style="width:270px; height: 190px; object-fit: cover;object-position: center center;">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="text-post">
								<a href=""><h5>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h5></a>
								<ul>
									<li><i class="far fa-user"></i> Bimbim</li>
									<li><i class="far fa-clock"></i>1 giờ</li>
									<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
								</ul>
								<p>Cúc họa mi – loài hoa gọi mùa đông về đang ngập tràn sắc trắng tinh khôi trên mọi góc phố của Hà Nội.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="list-baibao">
					<div class="row">
						<div class="col-lg-5">
							<div class="div-picture">
								<img src="tamdao.jpg" alt="" class="picture-list" style="width:270px; height: 190px; object-fit: cover;object-position: center center;">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="text-post">
								<a href=""><h5>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h5></a>
								<ul>
									<li><i class="far fa-user"></i> Bimbim</li>
									<li><i class="far fa-clock"></i>1 giờ</li>
									<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
								</ul>
								<p>Cúc họa mi – loài hoa gọi mùa đông về đang ngập tràn sắc trắng tinh khôi trên mọi góc phố của Hà Nội.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="list-baibao">
					<div class="row">
						<div class="col-lg-5">
							<div class="div-picture">
								<img src="tamdao.jpg" alt="" class="picture-list" style="width:270px; height: 190px; object-fit: cover;object-position: center center;">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="text-post">
								<a href=""><h5>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h5></a>
								<ul>
									<li><i class="far fa-user"></i> Bimbim</li>
									<li><i class="far fa-clock"></i>1 giờ</li>
									<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
								</ul>
								<p>Cúc họa mi – loài hoa gọi mùa đông về đang ngập tràn sắc trắng tinh khôi trên mọi góc phố của Hà Nội.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ---------------------tinchonloc-------------------------------------->
			<div class="tintucnoibat">
				<div class="content-tintucnoibat">
					<div class="title">
						Tin xem nhiều
					</div>
					<div id="main">
						



					</div>
				</div>		
			</div>
		</div>	
		
		<!-- -----------------------siderbar-------------------------------->
		<div class="col-md-4 siderbar">
			<div class="right">
				<div class="title">
					Tin tức nổi bật
				</div>
				<div class="tinphobien">
					<div class="div-post">
						<img src="cuchoami.jpg" alt="" class="sidebar-img post">
					</div>
					<div class="text-post storie">
						<a href=""><h5>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h5></a>
						<ul>
							<li><i class="far fa-user"></i> Bimbim</li>
							<li><i class="far fa-clock"></i>1 giờ</li>
							<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
						</ul>
						<p>Cúc họa mi – loài hoa gọi mùa đông về đang ngập tràn sắc trắng tinh khôi trên mọi góc phố của Hà Nội.</p>
					</div>
				</div>
				<hr>
				<div class="post-list">
					<div class="single-post d-flex flex-row">
						<div class="single-post-picture">
							<img src="bim.jpg" alt="" class="anh-siderbar">
						</div>
						<div class="text-post phobien">
							<a href=""><h6>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h6></a>
							<ul>
								<li><i class="far fa-user"></i> Bimbim</li>
								<li><i class="far fa-clock"></i>1 giờ</li>
								<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
							</ul>
						</div>
					</div>
					<hr>
					<div class="single-post d-flex flex-row">
						<div class="single-post-picture">
							<img src="bim.jpg" alt="" class="anh-siderbar">
						</div>
						<div class="text-post phobien">
							<a href=""><h6>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h6></a>
							<ul>
								<li><i class="far fa-user"></i> Bimbim</li>
								<li><i class="far fa-clock"></i>1 giờ</li>
								<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
							</ul>
						</div>
					</div>
					<hr>
					<div class="single-post d-flex flex-row">
						<div class="single-post-picture">
							<img src="bim.jpg" alt="" class="anh-siderbar">
						</div>
						<div class="text-post phobien">
							<a href=""><h6>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h6></a>
							<ul>
								<li><i class="far fa-user"></i> Bimbim</li>
								<li><i class="far fa-clock"></i>1 giờ</li>
								<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
							</ul>
						</div>
					</div>
					<hr>
					<div class="single-post d-flex flex-row">
						<div class="single-post-picture">
							<img src="bim.jpg" alt="" class="anh-siderbar">
						</div>
						<div class="text-post phobien">
							<a href=""><h6>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h6></a>
							<ul>
								<li><i class="far fa-user"></i> Bimbim</li>
								<li><i class="far fa-clock"></i>1 giờ</li>
								<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
							</ul>
						</div>
					</div>
					<hr>
					<div class="single-post d-flex flex-row">
						<div class="single-post-picture">
							<img src="bim.jpg" alt="" class="anh-siderbar">
						</div>
						<div class="text-post phobien">
							<a href=""><h6>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h6></a>
							<ul>
								<li><i class="far fa-user"></i> Bimbim</li>
								<li><i class="far fa-clock"></i>1 giờ</li>
								<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
							</ul>
						</div>
					</div>
					<hr>
					<div class="single-post d-flex flex-row">
						<div class="single-post-picture">
							<img src="bim.jpg" alt="" class="anh-siderbar">
						</div>
						<div class="text-post phobien">
							<a href=""><h6>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h6></a>
							<ul>
								<li><i class="far fa-user"></i> Bimbim</li>
								<li><i class="far fa-clock"></i>1 giờ</li>
								<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
							</ul>
						</div>
					</div>
					<hr>
					<div class="single-post d-flex flex-row">
						<div class="single-post-picture">
							<img src="bim.jpg" alt="" class="anh-siderbar">
						</div>
						<div class="text-post phobien">
							<a href=""><h6>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h6></a>
							<ul>
								<li><i class="far fa-user"></i> Bimbim</li>
								<li><i class="far fa-clock"></i>1 giờ</li>
								<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
							</ul>
						</div>
					</div>
					<hr>
					<div class="single-post d-flex flex-row">
						<div class="single-post-picture">
							<img src="bim.jpg" alt="" class="anh-siderbar">
						</div>
						<div class="text-post phobien">
							<a href=""><h6>Cuối cùng mọi thứ sẽ ổn nếu nó chưa ổn thì chưa phải cuối cùng</h6></a>
							<ul>
								<li><i class="far fa-user"></i> Bimbim</li>
								<li><i class="far fa-clock"></i>1 giờ</li>
								<li><i class="far fa-calendar-alt"></i> 17/11/2018</li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<div class="content-footer container">
		<div class="row">
			<div class="col-lg-4">
				<h6><a href="">TBPTeam News</a></h6>
				<p>TBPTeam News là một trang web tổng hợp tin tức tự động và thông minh được. TBPTeam News còn cung cấp tính năng cá thể hóa, cho phép người sử dụng tự tạo chuyên mục với tùy chọn về nguồn tin, chuyên mục, từ khóa để theo dõi vấn đề mình quan tâm.</p>
				<p>Giấy phép số 105/PG-TTĐT do Bộ Thông tin và Truyền thông cấp.</p>
				<p> © Bản quyền thuộc về TBPTem New </p>
			</div>
			<div class="col-lg-4">
				<h6>Chịu trách nhiệm quản lí nội dung</h6>
				<p>Đặng Quốc Thắng</p>
				<h6>Hợp tác truyền thông</h6>
				<p><i class="fas fa-phone"></i> 09849521477</p>
				<p class="email">
					<a href=""><i class="far fa-envelope"></i> thangdangblog@gmail.com</a>
				</p>
				<h6>Liên hệ quảng cáo</h6>
				<p> <i class="fas fa-phone"></i> 0343796641</p>
				<p class="email">
					<a href=""><i class="far fa-envelope"></i> phamthithao1711@gmail.com</a>
				</p>
				<h6><a href="">Chính sách bảo mật</a></h6>
			</div>
			<div class="col-lg-4">
				<h6><a href="">Đóng góp nội dung</a></h6>
				<p>TBPTeam News rất hoan nghênh độc giả gửi thông tin và góp ý cho chúng tôi.</p>
				<ul class="ul-footer">
					<li>
						<a href=""><i class="fab fa-facebook"></i></a>
					</li>
					<li>
						<a href=""><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script src="template/assets/js/jquery-3.3.1.min.js"></script>
<script src="template/assets/js/bootstrap.min.js"></script>
<script src="template/assets/js/index.js"></script>
</body>

</html>