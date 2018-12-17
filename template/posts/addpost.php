<?php 
require "template/component/header.php";
require "template/component/siderbar.php";
?>
<div id="editpostdetail">
	<h2>Thêm bài viết</h2>
	<div id="alerteditpost"></div>
	<div class="row">
		<div class="col-md-9">
			<form id="updatepost1" method="POST">
				<div class="labelpost">Tiêu đề: </div><input id="titleval" type="text" name="title" value="">
				<div class="labelpost">Đường dẫn tĩnh: </div><input id="urlval" type="text" name="urlpost" value="">
				<textarea name="updatepostarea" id="updatepostarea"></textarea>

			</form>
		</div>
		<div class="col-md-3">
			<div class="displayinfo">
				<h3>Thông tin</h3>
				<p><i class="fas fa-thermometer-three-quarters"></i> Trạng thái: <span class="statuseditpost publicstatus">Công khai</span> <span><a id="editstatus" data-toggle="collapse" data-target="#collapseOne" href="#">Chỉnh sửa</a></span></p>
				<p class="editstatus collapse" id="collapseOne">
					<select id="optionstatus">
						<?php foreach ($allstatus as $value):
							echo "<option>$value</option>";
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
				<div class="uppost">
					<form id="updatepost2" method="POST">
						<div id="" class="btn btn-primary createpostbtn">Đăng bài</div>
					</form>
				</div>
			</div>
			<div class="displayinfo mt-5">
				<h3>Chuyên mục</h3>
				<div class="editcate">
					<select id="optioncategories">
						<?php foreach ($allcategories as $value):
							echo "<option>$value</option>";
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
	CKEDITOR.replace('updatepostarea',{
		entities_latin: false,
		entities_greek: false
	});
</script>

<?php 
require "template/component/footer.php";
?>