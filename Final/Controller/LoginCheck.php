<?php 
require_once('../model/CustomerModel.php');

$accNum = $_REQUEST['accNum'];
$password = $_REQUEST['password'];

if($accNum == null || $password == null){
	echo "null username/password...";
}else{
	
	$status  = login($accNum, $password);

	if($status){
		setcookie('status', 'true', time()+3600, '/');		
		header('location: ../view/UserHome.php?accNum='.$accNum);
	}else{
		echo "invalid username/password";
	}
}

?>