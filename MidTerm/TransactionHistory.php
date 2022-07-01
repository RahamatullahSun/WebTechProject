<?php
	$accNum = $_REQUEST['accNum'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transaction History</title>
	<legend><a href="<?php echo 'UserHome.php?accNum=' . $accNum; ?>">Go Home</a> <br> <br> </legend>	
</head>
<body>	
		<br>
		<table border="1">
			<th><h2>Transaction History</h2></th>
<?php

$file = fopen('Files/History.txt', 'r');
	
while (!feof($file)) {
    $data = fgets($file);   
      	echo'  <tr>';
        echo'<td><h3>'.$data.'<h3></td>';
      	echo'   </tr>';

    // echo '<p>'.$data.'</p>';

}

?>
		</table>
</body>
</html>