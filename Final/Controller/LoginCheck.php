<?php 
require_once('../model/CustomerModel.php');

$json = $_POST['data'];

$loginCredentials = json_decode($json);

$accNum = $loginCredentials->accNum;
$password = $loginCredentials->password;

if($accNum == null || $password == null){
	echo "null";
}else{
	
	$status  = login($accNum, $password);

	if($status){
		setcookie('status', 'true', time()+3600, '/');
		echo "success";
	}else{
		echo "failed";
	}
}

?>