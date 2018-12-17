<?php
	class Database{
		static public $conn;

		public static function connect(){
			self::$conn = new mysqli('localhost','root','','tintuc');
			date_default_timezone_set("Asia/Bangkok");
			mysqli_set_charset(self::$conn,"utf8");
			return self::$conn;
		}


		public static function insert($table,$data){
			$field_list = '';
			$data_list  = '';
			foreach ($data as $key => $value ) {
				$field_list .= ",$key";
				$data_list .= ",'$value'";
			}
			$qr = ' INSERT INTO '.$table.' ('.substr($field_list,1).') VALUES ('.substr($data_list,1).') ';
			return self::$conn->query($qr);
		}

		public static function execute($qr){
			return self::$conn->query($qr);
		}

		public static function delete($table,$name,$id){
			$qr = "DELETE FROM $table WHERE $name = '$id'";
			return self::$conn->query($qr);
		}

		public static function showAll($table){
			$qr = "SELECT * FROM $table";
			return self::$conn->query($qr);
		}

		public static function showCustomLine($table,$idkey,$num){
			$qr = " SELECT * FROM $table ORDER BY $idkey DESC LIMIT $num ";
			return self::execute($qr);
		}

		public static function selectIf($table,$where){
			$qr = "SELECT * FROM $table WHERE $where";
			return self::$conn->query($qr);
		}

		public static function isAdmin(){
			$username = $_SESSION["username"];
			$qr = " SELECT * FROM user WHERE username = '$username' AND idgroup = '1' ";
			$isAdmin = self::$conn->query($qr);
			if($isAdmin->num_rows != 1){
				return FALSE;
			}
			return TRUE;
		}

		public static function isEditor(){
			$username = $_SESSION["username"];
			$qr = " SELECT * FROM user WHERE username = '$username' AND idgroup = '2' ";
			$isAdmin = self::$conn->query($qr);
			if($isAdmin->num_rows != 1){
				return FALSE;
			}
			return TRUE;
		}

		public static function showItems($item){
			echo $item;
		}
	}

?>