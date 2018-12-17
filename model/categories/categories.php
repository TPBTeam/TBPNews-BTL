<?php 

class Categories extends Database
{
	function showAllCategories(){
		$qr = "SELECT * FROM categories GROUP BY id_cate DESC";
		return $this->execute($qr);
	}

	function addCategoryInPost($namecate,$url){
		$qr = "INSERT INTO categories (label,url) VALUES ('$namecate','$url')";
		return self::execute($qr);
	}

	function getAllCategories(){
		$arrCategories = array();
		$allcategories = self::showAll('categories');
		while($allcategories_rows = $allcategories->fetch_array()){
			$arrCategories[] = $allcategories_rows['label'];
		}
		return $arrCategories;
	}

	public function getIdCategoryByName($name){
    	$post =  self::selectIf('categories',"label = '$name'");
    	$post = $post->fetch_array();
    	return $post['id_cate'];
    }

	function showCustomLineCategory($line){
		return self::showCustomLine('categories','id_cate',$line);
	}

	function getCategory($idcate){
		$category = self::selectIf('categories','id_cate = '.$idcate.' ');
		$category = $category->fetch_array();
		return $category['label'];
	}

	function getUrl($idcate){
		$category = self::selectIf('categories','id_cate = '.$idcate.' ');
		$category = $category->fetch_array();
		return $category['url'];
	}

	function setDescription($str){
		$str = str_replace(',','~|~|',$str);
		$str = str_replace('\'','|~|~',$str);
		return $str;
	}
	function getDescription($str,$num){
		$strexe = '';
		$str = str_replace('~|~|',',',$str);
		$str = str_replace('|~|~','\'',$str);
		if(strlen($str) > $num ){
			$str = substr($str,'0',$num);
			$str = explode(' ',$str);
			for ($i = 0; $i < count($str)-1; $i++) {
				$strexe .= "$str[$i] ";
			}
			$strexe = trim($strexe,' ');
			$strexe .= "...";
			return $strexe;
		}
		return $str;
	}

	function getFullDescription($idcate){
		$description = self::selectIf('categories',' id_cate = '.$idcate.' ');
		$description   = $description->fetch_array();
		$str = $description['description'];
		$str = str_replace('~|~|',',',$str);
		$str = str_replace('|~|~','\'',$str);
		return $str;
	}


	function isExistName($namecate){
		$isExist =  self::selectIf("categories","label = '$namecate'");
		if($isExist->num_rows != 0){
			return TRUE;
		}
		return FALSE;
	}

	function isExistNameforUD($idcate,$namecate){
		$isExist =  self::selectIf("categories","label = '$namecate' AND id_cate <> '$idcate' ");
		if($isExist->num_rows != 0){
			return TRUE;
		}
		return FALSE;
	}

	function isExistLink($url){
		$isExist =  self::selectIf("categories","url = '$url'");
		if($isExist->num_rows != 0){
			return TRUE;
		}
		return FALSE;
	}

	function isExistLinkforUD($idcate,$url){
		$isExist =  self::selectIf("categories","url = '$url' AND id_cate <> $idcate ");
		if($isExist->num_rows != 0){
			return TRUE;
		}
		return FALSE;
	}

	function updateCategory($idcate,$label,$url,$description){
		$qr = " UPDATE categories SET label = '$label', url = '$url', description = '$description' WHERE id_cate = '$idcate'";
		return self::execute($qr);
	}

	function setLink($url){
		$url = mb_strtolower($url,'UTF-8');
		$url = str_replace('à','a',$url);
		$url = preg_replace('/(à)/', 'a', $url);
		$url = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $url);
		$url = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $url);
		$url = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $url);
		$url = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $url);
		$url = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $url);
		$url = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $url);
		$url = preg_replace('/(đ)/', 'd', $url);
		$url = preg_replace('/[^a-z0-9-\s]/', '', $url);
		$url = preg_replace('/([\s]+)/', '-', $url);
		return $url;
	}



}

?>