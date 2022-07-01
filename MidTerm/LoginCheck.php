<?php 

$accNum = $_REQUEST['accNum'];
$password = $_REQUEST['password'];

if($accNum == null || $password == null){
	echo "null Account Number/Password...";
}else{
	
	$file = fopen('Files/user.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data); 
		if($accNum == trim($user[2]) && $password == trim($user[1])) {
			setcookie('status', 'true', time()+3600, '/');
			header('location: UserHome.php?accNum='.$accNum);
		}	
	}

	echo "Invalid username/password";
}

?>