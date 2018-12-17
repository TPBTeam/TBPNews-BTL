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
    	$qr =" SELECT * FROM post WHERE idtype = '2' LIMIT $numhotnews ";
    	$hotnew3 = parent::execute($qr);
    	return $hotnew3->num_rows;
    }
    
}
?>