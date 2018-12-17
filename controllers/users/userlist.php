<?php 
$users = new Users();
$alluser = $users->getAllUsers();
require "template/users/userlist.php";
?>