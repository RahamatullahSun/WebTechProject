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
$fileName = $_FILES['picture']['name'];
// $fname = $_REQUEST['fname'];

if($password == null || $userName == null || $cPassword == null || $accNum == null || $email == null || $phnNum == null || $nid == null || $DOB == null || $gender == null || $status == null || $bGroup == null || $religion == null || $address == null || $fileName==null){
	echo "<h1>Fields Can not be Empty</h1>";
}elseif ($password != $cPassword) {
    echo "<h1>Password Doesn't Match</h1>";
}else{
		$user = $userName."|".$password."|".$accNum."|".$email."|".$phnNum."|".$nid."|".$DOB."|".$gender."|".$status."|".$bGroup."|".$religion."|".$address."\r\n";
		$file = fopen('Files/user.txt', 'a');
		fopen('Files/History.txt', 'a');
		fopen('Files/balance.txt', 'a');
		fwrite($file, $user);


    $fileTmpPath = $_FILES['picture']['tmp_name'];
    $fileName = $_FILES['picture']['name'];
    $fileSize = $_FILES['picture']['size'];
    $fileType = $_FILES['picture']['type'];
    $fileNameEx = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameEx));

    $newFileName = $accNum . '.' . $fileExtension;

    $allowedfileExtensions = array('jpg');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
   
      $uploadFileDir = './Files/Picture/';
      $newDir = $uploadFileDir . $newFileName;

      move_uploaded_file($fileTmpPath, $newDir);
    }

    header('location: Login.php');

  }

?>