<?php 
require "template/component/header.php";
require "template/component/siderbar.php";
?>
<div id="editpostdetail">
	<h2>Chỉnh sửa</h2>
	<div id="alerteditpost"></div>
	<div class="row">
		<div class="col-md-9">
			<form id="updatepost1" method="POST">
				<div class="labelpost">Tiêu đề: </div><input id="titleval" type="text" name="title" value="<?php $posts->showItems($title) ?>">
				<div class="labelpost">Đường dẫn tĩnh: </div><input id="urlvalud" type="text" name="urlpost" value="<?php $posts->showItems($url) ?>">
				<textarea name="updatepostarea" id="updatepostarea"><?php $posts->showItems($content) ?></textarea>

			</form>
		</div>
		<div class="col-md-3">
			<div class="displayinfo">
				<h3>Thông tin</h3>
				<p><i class="fas fa-thermometer-three-quarters"></i> Trạng thái: <span class="statuseditpost <?php echo $posts->setStatusClass($idstatus) ?>"><?php $posts->showItems($status) ?></span> <span><a id="editstatus" data-toggle="collapse" data-target="#collapseOne" href="#">Chỉnh sửa</a></span></p>
				<p class="editstatus collapse" id="collapseOne">
					<select id="optionstatus">
						<?php foreach ($allstatus as $value):
							if($value == $status){
								echo "<option selected>$value</option>";
							}else {
								echo "<option>$value</option>";
							}
						endforeach ?>
					</select>
					<span class="accepteditstatus">Đồng ý</span>
				</p>
				<p><i class="fas fa-map-marker-alt"></i> Vị trí: <span class="postionaddpost">Normal</span> <span><a id="editpositionadd" data-toggle="collapse" data-target="#positionaddpost" href="#">Chỉnh sửa</a></span></p>
				<p class="editpositionadd collapse" id="positionaddpost">
					<select id="optionposition">
						<?php foreach ($alltype as $value):
							echo "<option>$value</option>";
						endforeach ?>
					</select>
					<span class="accepteditposition">Đồng ý</span>
				</p>
				<p><i class="far fa-calendar-alt"></i> Ngày đăng: <span><?php $posts->showItems($datepost) ?></span>
					<div class="uppost">
						<a href="#" class="movetotrash">Chuyển tới thùng rác</a>
						<form id="updatepost2" method="POST">
							<div id="<?php $posts->showItems($idpost) ?>" class="btn btn-primary updatepostbtn">Cập nhật</div>
						</form>
					</div>
				</div>
				<div class="displayinfo mt-5">
					<h3>Chuyên mục</h3>
					<div class="editcate">
						<select id="optioncategories">
							<?php foreach ($allcategories as $value):
								if($value == $categoriespost){
									echo "<option selected>$value</option>";
								}else {
									echo "<option>$value</option>";
								}
							endforeach ?>
						</select>
					</div>
					<div class="addcateintedit">
						<p data-toggle="collapse" data-target="#collapseAddcate">+ Thêm chuyên mục mới</p>
						<div class="contentaddcate collapse" id="collapseAddcate" >
							<div id="alertadcate"></div>
							<input id="categoryval" type="text" name="addcategories">
							<div id="addcategories">Thêm chuyên mục</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="template/assets/js/ajax/posts.js"></script>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
	<script>
		CKEDITOR.replace('updatepostarea');
	</script>

	<?php 
	require "template/component/footer.php";
	?>