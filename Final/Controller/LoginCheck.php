<?php 
    $accNum = $_REQUEST['accNum'];
    $password = $_REQUEST['password'];

    $accNo = 1234;
    $pass = '1234';

    if($accNum==$accNo && $password == $pass){
        echo "Success";
    }else{
        echo "Null value...";
    }

?>