<?php 
require "template/component/header.php";
require "template/component/siderbar.php";
?>
<div id="editpost">
	<table class="table table-inverse">
		
	</table>

	<table class="table table-inverse">
		<thead>
			<tr>
				<th>Tài khoản</th>
				<th>Họ và tên</th>
				<th>Email</th>
				<th>Chức vụ</th>
				<th>Bài viết</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($alluser as $item): ?>
				<tr>
					<td><?php echo $item['username'] ?></td>
					<td><?php echo $item['fullname'] ?></td>
					<td><?php echo $item['email'] ?></td>
					<td><?php echo $users->getRoleById($item['idgroup']) ?></td>
					<td><?php echo $users->CountPostofId($item['idgroup']) ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
<?php 
require "template/component/footer.php";
?>