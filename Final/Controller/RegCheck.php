<?php 

require_once('../model/CustomerModel.php');

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

insert(['name'=>$userName,'password'=>$password,'accNum'=>$accNum,'email'=>$email,'phnNo'=>$phnNum,'nid'=>$nid,'DOB'=>$DOB,'gender'=>$gender,'status'=>$status,'bGroup'=>$bGroup,'religion'=>$religion,'address'=>$address,'balance'=>500]);

header('location: ../View/Login.html');

?>