<?php

require('../Controller/Cookie.php');
require_once('../model/CustomerModel.php');

$accNum = $_REQUEST['accNum'];


            echo '<h1>Welcome '.$accNum.' !!</h1>';

getAllUser();
?>

<html>
<head>
	<title>Home</title>
</head>
<body>
	<a href="<?php echo 'Profile.php?accNum='.$accNum; ?>"> Profile </a> <br/>
	<a href="<?php echo 'Balance.php?accNum='.$accNum; ?>"> Balance </a><br>
	<a href="<?php echo 'Deposit.php?accNum='.$accNum; ?>"> Deposit </a><br>
	<a href="<?php echo 'Withdraw.php?accNum='.$accNum; ?>"> Withdraw </a><br>
	<a href="<?php echo 'TransferMoney.php?accNum='.$accNum; ?>"> Transfer Money </a><br>
	<a href="<?php echo 'TransactionHistory.php?accNum='.$accNum; ?>"> Transaction History </a><br>
	<!-- <a href="ChangePassword.php"> Change Password </a> <br> -->
	<a href="logout.php"> logout </a>
	
</body>
</html>