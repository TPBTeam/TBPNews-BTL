<?php 
	class Users extends Database{
		function login($username,$password){
			$qr = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
			$login = self::$conn->query($qr);
			if($login->num_rows == 1){
				return TRUE;
			}
			return FALSE;
		}

		function logout(){
			session_destroy();
		}

		function register($username,$password,$email,$fullname){
			$qr = " INSERT INTO user (idgroup,username,password,email,fullname) VALUES ('3','$username','$password','$email','$fullname') ";
			return self::$conn->query($qr);
		}

		function existUser($username){
			$qr = "SELECT * FROM user WHERE username = '$username'";
			$existUser =  self::$conn->query($qr);
			if ($existUser->num_rows != 0) {
				return TRUE;
			}
			return FALSE;
		}

		function getIdUserByName($name){
			$iduser = self::selectIf('user',"username = '$name'");
			$iduser = $iduser->fetch_array();
			return $iduser['iduser'];
		}

		function getAllUsers(){
			$alluser = $this->showAll('user');
			while ($alluser_rows = $alluser->fetch_array()) {
			    $arrAlluser[] = array(
			    	'username' => $alluser_rows['username'],
			    	'email' => $alluser_rows['email'],
			    	'fullname' => $alluser_rows['fullname'],
			    	'idgroup' => $alluser_rows['idgroup'],
			    );
			}
			return $arrAlluser;
		}

		function getRoleById($id){
			$idrole = parent::selectIf('usergroup'," idgroup = '$id' ");
			$idrole = $idrole->fetch_array();
			return $idrole['namegroup'];
		}

		function CountPostofId($iduser){
			$idrole = parent::selectIf('post'," iduser = '$iduser' ");
			$numPosts = $idrole->num_rows;
			if($numPosts > 0){
				return $numPosts;
			}
			return 'Chưa có bài viết nào';
		}
	}
?>