<?php 
/**
 * summary
 */
class Page extends Database
{
    
    public function __construct()
    {
        
    }

    public function getHotNews($numhotnews){
    	$arrHotNews = array();
    	$qr =" SELECT * FROM post WHERE idtype = '2' GROUP BY idpost DESC  LIMIT $numhotnews";
    	$hotnew = parent::execute($qr);
    	while ($hotnew_rows = $hotnew->fetch_array()) {
    	    $arrHotNews[] = array(
    	    	"title" => $hotnew_rows['title'],
    	    	"iduser" => $hotnew_rows['iduser'],
                "datepost" => $hotnew_rows['datepost'],
    	    	"content" => $hotnew_rows['content'],
    	    );
    	}
    	return $arrHotNews;
    }
    public function getTinMoiNhat($numhotnews){
    	$arrHotNews = array();
    	$qr =" SELECT * FROM post GROUP BY idpost DESC  LIMIT $numhotnews";
    	$hotnew = parent::execute($qr);
    	while ($hotnew_rows = $hotnew->fetch_array()) {
    	    $arrHotNews[] = array(
    	    	"idpost" =>$hotnew_rows['idpost'],
    	    	"title" => $hotnew_rows['title'],
    	    	"iduser" => $hotnew_rows['iduser'],
    	    	"datepost" => $hotnew_rows['datepost'],
    	    );
    	}
    	return $arrHotNews;
    }

    public function SplitTinMoiNhat($poststart, $numhotnews){
    	$arrHotNews = array();
    	$qr =" SELECT * FROM post GROUP BY idpost DESC  LIMIT $poststart,$numhotnews";
    	$hotnew = parent::execute($qr);
    	while ($hotnew_rows = $hotnew->fetch_array()) {
    	    $arrHotNews[] = array(
    	    	"idpost" =>$hotnew_rows['idpost'],
    	    	"title" => $hotnew_rows['title'],
    	    	"iduser" => $hotnew_rows['iduser'],
    	    	"datepost" => $hotnew_rows['datepost'],
    	    );
    	}
    	return $arrHotNews;
    }
    
}
?>