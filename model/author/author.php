<?php 
	
	class Author extends Database
	{
	    
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