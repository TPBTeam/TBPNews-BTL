<?php 
	/**
	 * summary
	 */
	class Author extends Database
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	        
	    }

	    public function getAuthor($id){
	    	$getAuthor = self::selectIf('user',"iduser = '$id' ");
	    	$getAuthor_name = $getAuthor->fetch_array();
	    	return $getAuthor_name['username'];
	    }
	}

?>