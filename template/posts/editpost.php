<?php 
require "template/component/header.php";
require "template/component/siderbar.php";
?>
<div id="editpost">
	<div class="row">
		<h3>Posts</h3>
		<button class="addnew btn btn-outline-primary"><a href="index.php?page=posts&act=addpost">Add New</a></button>
	</div>
	<div class="row">
		<div class="teditpost">
			<div class="form-group">
				<select class="form-control" id="alldate">
					<option selected="">All Dates</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="form-group">
				<select class="form-control" id="allcate">
					<option selected="">All Categories</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<button class="filter btn btn-outline-primary">Filter</button>
			<div class="pitems"><?php $posts->showItems($posts->getNumberPost()) ?> items</div>
		</div>
	</div>
	<div class="row">
		<table class="table tableeditpost">
			<thead class="thead-light">
				<tr>
					<!-- <th class="checkall"><input type="checkbox" name="" id="checkall"></th> -->
					<th class="tleditpost">Tiêu đề</th>
					<th class="poststatus">Trạng thái</th>
					<th class="aueditpost">@Tác giả</th>
					<th class="cateeditpost">Thư mục</th>
					<th class="cmteditpost"><i class="fas fa-comment-alt"></i></th>
					<th class="deditpost">Ngày đăng</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if($all_posts->num_rows >0){ 
					while ($all_posts_rows = $all_posts->fetch_array()) {
						?>
						<tr id="tr<?php $posts->showItems($all_posts_rows['idpost']) ?>">
							<!-- <td scope="col"><input class="checkpost" type="checkbox" name=""></td> -->
							<td scope="col"><?php $posts->showItems($all_posts_rows['title']) ?>
							<div class="toolcate">
								<ul>
									<li class="editclass">
										<a href="index.php?page=posts&act=editpost&idpost=<?php $posts->showItems($all_posts_rows['idpost']) ?> ">Chỉnh sửa</a>
									</li>
									<span> | </span>
									<li class="deleteclass">
										<div data-toggle="modal" data-target="#idpost<?php $posts->showItems($all_posts_rows['idpost']) ?>">
											Xóa
										</div>
									</li>
								</ul>	
							</div>
							
						</td>
						<td scope="col" class="<?php echo $posts->setStatusClass($all_posts_rows['idstatus']) ?>"><?php $posts->showItems($posts->getPostStatus($all_posts_rows['idstatus'])) ?></td>
						<td scope="col"><?php $posts->showItems($author->getAuthor($all_posts_rows['iduser'])) ?></td>
						<td scope="col"><?php $posts->showItems($categories->getCategory($all_posts_rows['id_cate'])) ?></td>
						<td scope="col"><i class="numcmt fas fa-comment-alt"><p>1</p></i></td>
						<td scope="col"><div>Lần cuối cập nhật</div><?php $posts->showItems($all_posts_rows['datepost']) ?></td>
					</tr>
					<div class="modal fade" id="idpost<?php $posts->showItems($all_posts_rows['idpost']) ?>">
						<div class="modal-dialog">
							<div class="modal-content">
								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Xác nhận xóa bài viết</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									Bạn có chắc chắn muốn xóa bào viết này không?
								</div>
								<!-- Modal footer -->
								<div class="modal-footer">
									<button class="btn btn-primary delpost" type="button" idpost="<?php $posts->showItems($all_posts_rows['idpost']) ?>" data-dismiss="modal">Có</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Không</button>
								</div>

							</div>
						</div>
					</div>
					<?php 
				}
			}
			else {
				?>
				<td colspan="6" class="text-center">Chưa có bài viết nào được đăng tải.</td>
				<?php
			}
			?>
		</tbody>
	</table>
</div>
</div>
</div>
<script type="text/javascript" src="template/assets/js/ajax/posts.js"></script>
<?php 
require "template/component/footer.php";
?>