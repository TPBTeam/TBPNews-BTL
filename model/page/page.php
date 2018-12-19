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
    	    );
    	}
    	return $arrHotNews;
    }
    
}
?>