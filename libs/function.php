<?php 

function isPageSiderBar($geturl,$page){
	if(isset($_GET["$geturl"])){
		if($_GET["$geturl"] == $page){
			if($geturl == "page"){
				echo "class='activenews'";
			}
			if($geturl == "act"){
				echo "class='activenewsact'";
			}
		}
	}
}

function checkEmail($email){
	$emailPartern = '/^\w{2,}@\w{2,}\.\w{2,4}$/';
	if(preg_match($emailPartern,$email)){
		return TRUE;
	}
		return FALSE;
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
?>