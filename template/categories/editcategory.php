<?php 
require "template/component/header.php";
require "template/component/siderbar.php";
?>
<div id="categories">
	<h3>Chuyên mục</h3>
	<div class="row">
		<div class="col-md-4">
			<h4>Thêm chuyên mục</h4>
			<?php if(isset($alert)) echo $alert ?>
			<form id="addcategories" method="POST">
				Tên: <br /><input id="namecate" type="text" name="label" pattern=".{6,}" title="Không được phép để trống dữ liệu"><br />
				<p class="alertcategories" id="alertcategoriesname" ></p>
				Đường dẫn tĩnh: <br /><input id="linkstatic" type="text" name="url"><br />
				<p class="alertcategories" id="alertcategorieslink"></p>
				Mô tả: <br /><textarea id="description" type="text" name="description"></textarea><br />
				<div id="addcate" class="mt-4 btn-primary">Thêm chuyên mục</div>
			</form>
		</div>
		<div class="col-md-8">
			<div id="displayCategories">
				<table class="table">
					<thead>
						<tr>
							<th scope="col" class="label">Tên</th>
							<th scope="col" width="100" class="description">Mô tả</th>
							<th scope="col" class="url">Đường dẫn tĩnh</th>
						</tr>
					</thead>
					<tbody id="ajcate">
						<?php
						if($showAllCategories->num_rows != 0 ){
							while($showAllCategories_rows = $showAllCategories->fetch_array()){
								$showDescription = $showAllCategories_rows['description'];
								$showDescription = $categories->getDescription($showDescription,200);
								?>
								<tr id="tr<?php echo $showAllCategories_rows['id_cate'] ?>">
									<th scope="row" class="titlecate"><a href="index.php?page=categories&act=editcategory&idcate=<?php $categories->showItems($showAllCategories_rows['id_cate']) ?>"><?php echo $showAllCategories_rows['label'] ?></a>
										<div class="toolcate">
											<ul>
												<li class="editclass">
													<a href="index.php?page=categories&act=editcategory&idcate=<?php $categories->showItems($showAllCategories_rows['id_cate']) ?>">Chỉnh sửa</a>
												</li>
												<span> | </span>
												<li class="deleteclass">
													<div data-toggle="modal" data-target="#myModal<?php echo $showAllCategories_rows['id_cate'] ?>">
														Xóa
													</div>
												</li>
											</ul>	
										</div>
									</th>
									<td width="100" class="description"><p><?php echo $showDescription ?></p></td>
									<td><?php echo $showAllCategories_rows['url'] ?></td>
								</tr>
								<div class="modal fade" id="myModal<?php echo $showAllCategories_rows['id_cate'] ?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">Xác nhận xóa thư mục</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												Bạn có chắc chắn muốn xóa thư mục này không?
											</div>

											<!-- Modal footer -->
											<div class="modal-footer">
												<button class="btn btn-primary delcategory"  type="button"idcate="<?php echo $showAllCategories_rows['id_cate'] ?>" data-dismiss="modal">Có</button>
												<button type="button" class="btn btn-danger" data-dismiss="modal">Không</button>
											</div>

										</div>
									</div>
								</div>
								<?php 
							}
						}else {
							?>
							<tr>
								<th colspan="3" class="alertcategories text-center">Chưa có chuyên mục nào</th>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>

		</div>
	</div>
</div>
</div>
<script id="scriptcustom" src='template/assets/js/ajax/categories.js'></script>
<?php 
require "template/component/footer.php";
?>