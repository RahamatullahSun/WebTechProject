<?php 
    
    require_once('../model/CustomerModel.php');

    $json = $_POST['data'];

    $user = json_decode($json);

    $userName = $user->userName;
    $password = $user->password;
    $accNum = $user->accNum;
    $email = $user->email;
    $phnNum = $user->phnNo;
    $nid = $user->nid;
    $DOB = $user->dob;
    $gender = $user->gender;
    $status = $user->mStatus;
    $bGroup = $user->bGroup;
    $religion =$user->religion;
    $address = $user->address;


    updateUser($accNum,['name'=>$userName,'password'=>$password,'accNum'=>$accNum,'email'=>$email,'phnNo'=>$phnNum,'nid'=>$nid,'DOB'=>$DOB,'gender'=>$gender,'status'=>$status,'bGroup'=>$bGroup,'religion'=>$religion,'address'=>$address,'balance'=>500]);
    
?>
