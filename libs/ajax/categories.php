<?php
require "../../config/db.php";
require "../../model/categories/categories.php"; 
$categories = new Categories;
$categories->connect();

// Thêm chuyên mục
if(isset($_POST['func']) && $_POST['func'] == 'addcategories'){
	if(empty($_POST['namecate'])){
		$returnAjax = array();
		$returnAjax[] = array(
			'isEmptyName',
		);
		die(json_encode($returnAjax,JSON_UNESCAPED_UNICODE));
	}else if(empty($_POST['linkstatic'])){
		$returnAjax = array();
		$returnAjax[] = array(
			'isEmptyLink',
		);
		die(json_encode($returnAjax,JSON_UNESCAPED_UNICODE));
	}
	else{
		$returnAjax = array();
		$namecate = $_POST['namecate'];
		$linkstatic = $_POST['linkstatic'];
		$description = $_POST['description'];
		if($categories->isExistName($namecate)){
			$returnAjax[] = array(
				'isExistName',
			);
			die(json_encode($returnAjax,JSON_UNESCAPED_UNICODE));
		}else if($categories->isExistLink($linkstatic)) {
			$returnAjax[] = array(
				'isExistLink',
			);
			die(json_encode($returnAjax,JSON_UNESCAPED_UNICODE));
		}else {
			if($categories->insert('categories',array(
				'label' => $namecate,
				'description' => $description,
				'url' => $linkstatic,
			))){
				if($categoriesshow = $categories->showCustomLineCategory(1)){
					$categoriesshow_rows = $categoriesshow->fetch_array();
					$returnAjax[] = array(
						'idcate' =>$categoriesshow_rows['id_cate'],
						'label' => $categoriesshow_rows['label'], 
						'description' => $categoriesshow_rows['description'], 
						'url' => $categoriesshow_rows['url'] 
					);
					die(json_encode($returnAjax,JSON_UNESCAPED_UNICODE));
				}else {
					$returnAjax[] = array(
						'Lỗi rồi',
					);
					die(json_encode($returnAjax,JSON_UNESCAPED_UNICODE));
				}
				
			}else {
				$returnAjax[] = array(
					'errorInsertDatabase',
				);
				die(json_encode($returnAjax,JSON_UNESCAPED_UNICODE));
			}
		}
	}
}


// Xóa chuyên mục

if(isset($_POST['func']) && $_POST['func'] == 'deletecategories'){
	if(isset($_POST['idcate'])){
		$idcate = $_POST['idcate'];
		$result = array();
		if($categories->delete('categories','id_cate',$idcate)){
			echo "success";
		}
	}

	if(isset($_POST['slug'])){
		$slug = $_POST['slug'];
		if($categories->isExistLink($slug)){
			echo "Đường dẫn đã tồn tại với thư mục khác!";
		}
	}
	if(isset($_POST['nameinput'])){
		$nameinput = $_POST['nameinput'];
		switch ($nameinput) {
			case "label":
			$label = $_POST['val'];
			if(ctype_space($label)){
				echo "Tài khoản không được để trống!";
			}
			if($categories->isExistName($label)){
				echo "Thư mục đã tồn tại!";
			}
			break;

			case "url":
			$url = $_POST['val'];
			if($categories->isExistLink($url)){
				echo "Đường dẫn đã tồn tại với thư mục khác!";
			}
			break;

			default:
		// code...
			break;
		}
	}

}

?>