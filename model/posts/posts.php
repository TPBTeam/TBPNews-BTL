<?php 

/**
 * summary
 */
class Posts extends Database
{
    /**
     * summary
     */
    public function __construct()
    {
    	
    }

    public function updatePost($idpost,$title,$url,$content,$status,$date,$category,$idtype){
    	$qr = " UPDATE post SET title = '$title', idstatus ='$status', staticlink = '$url', content = '$content', id_cate = '$category', datepost = '$date', idtype = '$idtype' WHERE idpost ='$idpost' ";
    	return self::execute($qr);
    }

    public function addPost($title,$idstatus,$staticlink,$content,$iduser,$idcate,$datepost,$positionadd){
        $qr = " INSERT INTO post (title,idstatus,staticlink,content,iduser,id_cate,datepost,idtype) VALUES ('$title','$idstatus','$staticlink','$content','$iduser','$idcate','$datepost','$positionadd')";
        return self::execute($qr);
    }

    public function movetoTrash($idpost){
    	$qr = " UPDATE post SET idstatus ='1' WHERE idpost = '$idpost' ";
    	return self::execute($qr);
    }

    public function showAllPost(){
    	return self::selectIf('post',"idstatus = '2' OR idstatus = '3'");
    }

    public function getNumberPost(){
    	$post =  self::showAll('post');
    	return $post->num_rows;
    }

    public function getIdPostStatus($idpost){
    	$post =  self::selectIf('post',"idpost = '$idpost'");
    	$post = $post->fetch_array();
    	return $post['idstatus'];
    }

    public function getPostStatus($idstatus){
    	$post =  self::selectIf('poststatus',"idstatus = '$idstatus'");
    	$post = $post->fetch_array();
    	return $post['statusname'];
    }

    function setStatusClass($idstatus){
      switch ($idstatus) {
         case '1':
         return "trashstatus";
         break;
         case '2':
         return "publicstatus";
         break;
         case '3':
         return "pendingstatus";
         break;

         default:
				// code...
         break;
     }
 }

 public function getPostDate($idpost){
    $post =  self::selectIf('post',"idpost = '$idpost'");
    $post = $post->fetch_array();
    $date =  strtotime($post['datepost']);
    $date =  date("d/m/y H:i",$date);
    return $date;
}

public function getAllStatus(){
   $statuspost = array();
   $status = self::selectIf('poststatus','idstatus <> 1');
   while($status_row = $status->fetch_array()){
      $statuspost[] = $status_row['statusname'];
  }
  return $statuspost;
}

public function getIdStatusByName($name){
   $statuspost = self::selectIf('poststatus',"statusname = '$name'");
   $statuspost = $statuspost->fetch_array();
   return $statuspost['idstatus'];
}

public function getAllTitle(){
   $titleArr = array();
   $title = self::showAllPost();
   while($title_rows = $title->fetch_array()){
      $titleArr[] =$title_rows['title'];
  }
  return $titleArr;
}

public function getDate($idpost){
   $date = self::selectIf('post',' idpost = '.$idpost.' ');
   $date = $date->fetch_array();
   return $date['datepost'];
}

public function getIdCategory($idpost){
   $date = self::selectIf('post',' idpost = '.$idpost.' ');
   $date = $date->fetch_array();
   return $date['id_cate'];
}

public static function deletePost($idpost){
   return self::delete('post','idpost',$idpost);
}

public static function isExistPost($idpost){
   $isPost = self::selectIf("post"," idpost = '$idpost' ");
   if($isPost->num_rows != 0){
      return TRUE;
  }
  return FALSE;
}

public static function isExistUrl($staticlink){
   $isPost = self::selectIf("post"," staticlink = '$staticlink' ");
   if($isPost->num_rows != 0){
      return TRUE;
  }
  return FALSE;
}

public static function isExistUrlForUD($idpost,$url){
   $isExistUrl = self::selectIf("post"," staticlink = '$url' AND idpost <> $idpost ");
   if($isExistUrl->num_rows != 0){
      return TRUE;
  }
  return FALSE;
}

public static function getTitlePost($idpost){
   $title = self::selectIf("post"," idpost = '$idpost' ");
   $title =  $title->fetch_array();
   return $title['title'];
}

public static function getUrlPost($idpost){
   $url = self::selectIf("post"," idpost = '$idpost' ");
   $url =  $url->fetch_array();
   return $url['staticlink'];
}

public static function getContentPost($idpost){
   $content = self::selectIf("post"," idpost = '$idpost' ");
   $content =  $content->fetch_array();
   return $content['content'];
}

public function getAllType(){
    $types = self::showAll('types');
    while($types_rows = $types->fetch_array()){
        $arrType[] = $types_rows['typename'];
    }
    return $arrType;
}

public function getIdTypeByName($name){
    $idtype = self::selectIf('types'," typename = '$name' ");
    $idtype = $idtype->fetch_array();
    return $idtype['idtype'];
}

public function getTimeAgo($time){
    $currentdate_ts = strtotime(date("d-m-Y H:i:s"));
    $time_ts = strtotime($time);
    $time_ago_ts =  $currentdate_ts-$time_ts;
    if( $time_ago_ts < 60 ){
        return $time_ago_ts." giây trước";
    }elseif ($time_ago_ts < 3600) {
        return round($time_ago_ts/60)." phút trước";
    }elseif ($time_ago_ts < 86400) {
        return round($time_ago_ts/3600)." giờ trước";
    }else{
        return round($time_ago_ts/86400)." ngày trước";
    }
}
}

?>