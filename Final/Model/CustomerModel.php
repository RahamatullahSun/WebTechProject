<?php

	require_once('Database.php');

function login($accNum=null, $password){
	
	$conn = getconnection();
	$sql = "select * from Customer where AccNum='{$accNum}' and Password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

    if($count > 0){
		return true;
	}else{
		return false;
	}
}

function insert($user){
    $conn = getconnection();
	$sql = "INSERT INTO `customer` (`Name`, `Password`, `AccNum`, `Email`, `PhnNo`, `NID`, `DOB`, `Gender`, `Status`, `BloodGroup`, `Religion`, `Address`, `Balance`) VALUES ('{$user['name']}', '{$user['password']}', '{$user['accNum']}', '{$user['email']}', '{$user['phnNo']}', '{$user['nid']}', '{$user['DOB']}', '{$user['gender']}', '{$user['status']}', '{$user['bGroup']}', '{$user['religion']}', '{$user['address']}', '{$user['balance']}')";
	mysqli_query($conn, $sql);


}

function getAllUser(){

    $conn = getconnection();
    $sql = "select * from Customer";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0){
        while($data = mysqli_fetch_assoc($result)){
            print_r($data);
            echo "<br>";
            }
    }else{
        echo 'No Data Found!!!';
    }

}

function getBalance($accNum){
    $conn = getconnection();
    $sql = "select balance from Customer where AccNum like $accNum;";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $balance = $data['balance'];
    return $balance;
}

function updateBalance($amount,$accNum){
    $conn = getconnection();
    $sql = "UPDATE `customer` SET `Balance` = '$amount' WHERE `customer`.`AccNum` = $accNum;";
    mysqli_query($conn, $sql);
}

function setHistory($text,$accNum){
    $conn = getconnection();
    $sql = "INSERT INTO `history`(`text`, `accNum`) VALUES ('$text','$accNum');";
    mysqli_query($conn, $sql);
}

function getHistory(){
    $conn = getconnection();
    $sql = "SELECT text FROM History";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}