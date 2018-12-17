<?php 
require "template/component/header.php";
require "template/component/siderbar.php";
?>
<div id="editpostdetail">
	<h2>Chỉnh sửa chuyên mục</h2>
	<?php 
		if(isset($alert)){
			echo $alert;
		}
	?></p>
	<form method="POST">
		<table id="tabledetail">
			<tr>
				<th class="labeldetail">Tên chuyên mục:</th>
				<th>
					<input type="text" name="label" value="<?php $categories->showItems($label) ?>">
				</th>
			</tr>
			<tr>
				<th class="labeldetail">Đường dẫn tĩnh:</th>
				<th>
					<input type="text" name="url" value="<?php $categories->showItems($url) ?>" >
				</th>
			</tr>
			<tr>
				<th class="labeldetail">Mô tả:</th>
				<th>
					<textarea name="description"><?php $categories->showItems($description) ?></textarea>
				</th>
			</tr>
		</table>
		<input class="submitdetail btn btn-primary" value="Cập nhật" type="submit" name="btn-submit">
	</form>



</div>
<?php 
require "template/component/footer.php";
?>