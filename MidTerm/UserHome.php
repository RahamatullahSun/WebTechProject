<?php

require('Cookie.php');

$accNum = $_REQUEST['accNum'];

$file = fopen('Files/user.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data); 
		if($accNum == trim($user[2])) {
			$userName = trim($user[0]);
            echo '<h1>Welcome '.$userName.' !!</h1>';
		}
		break;
	}
fclose($file);

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