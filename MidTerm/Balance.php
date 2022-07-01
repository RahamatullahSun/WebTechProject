<?php

	$directory = 'Files/balance.txt';
	// $file = fopen($directory, 'w');
	// fclose($file);

	$file = fopen($directory, 'r');
	$balance = fgets($file);

$accNum = $_REQUEST['accNum'];

?>

<html>
	<head>
		<title>Balance</title>
		<legend><a href="<?php echo 'UserHome.php?accNum=' . $accNum; ?>">Go Home</a> <br> <br> </legend>
	</head>
	<body>
		<fieldset>
			<legend>Balance</legend>
			<?php echo '<h1>Your Balance is : '.$balance.'</h1>';?>
		</fieldset><br>
	</body>
</html>