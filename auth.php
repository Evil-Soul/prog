<?php

$login = $_GET['login'];
$pass = $_GET['pass'];

$login_s = file_get_contents("Users/$login/user.php");
$pass_s = file_get_contents("Users/$login/pass.php");

if($login == $login_s){
	if($pass == $pass_s){
		echo "Ok";
	}else{
		echo "Error";
	}
}else{
	echo "Error";
}

?>