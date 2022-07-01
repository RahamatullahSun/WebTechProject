<?php 

$userName = $_REQUEST['name'];
$password = $_REQUEST['password'];
$cPassword = $_REQUEST['cPassword'];
$accNum = $_REQUEST['accNum'];
$email = $_REQUEST['email'];
$phnNum = $_REQUEST['phnNum'];
$nid = $_REQUEST['nid'];
$DOB = $_REQUEST['DOB'];
$gender = $_REQUEST['gender'];
$status = $_REQUEST['status'];
$bGroup = $_REQUEST['bGroup'];
$religion = $_REQUEST['religion'];
$address = $_REQUEST['address'];
// $fname = $_REQUEST['fname'];

if($password == null || $userName == null){
	echo "null password/name...";
}elseif ($password != $cPassword) {
    echo "Password Doesn't Match";
}
else{
		$user = $userName."|".$password."|".$accNum."|".$email."|".$phnNum."|".$nid."|".$DOB."|".$gender."|".$status."|".$bGroup."|".$religion."|".$address."\r\n";
		$file = fopen('Files/user.txt', 'a');
		fwrite($file, $user);
		header('location: Login.html');					
    
}


?>