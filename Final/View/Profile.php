<?php

require('Cookie.php');

$accNum = $_REQUEST['accNum'];

$file = fopen('Files/user.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data); 
		if($accNum == trim($user[2])) {
			$userName = trim($user[0]);
			$accNum = trim($user[2]);
			$email = trim($user[3]);
			$phnNum = trim($user[4]);
			$nid = trim($user[5]);
			$DOB = trim($user[6]);
			$gender = trim($user[7]);
			$status = trim($user[8]);
			$bGroup = trim($user[9]);
			$religion = trim($user[10]);
			$address = trim($user[11]);
			break;
		}	
	}

?>

<!DOCTYPE html>
<html>
<head>

	<title>Profile</title>
	
</head>
<body>
		<?php echo '<h2>Profile of ' . $userName . '!!</h2>'; ?>
		<br>
		<table border="1">
			<!-- <tr>
				<td>Name</td>
				<td>Account No</td>
				<td>E-mail</td>
				<td>Phone No</td>
				<td>NID</td>
				<td>DOB</td>
				<td>Gender</td>
				<td>Status</td>
				<td>Blood Group</td>
				<td>Religion</td>
				<td>Address</td>
			</tr> -->
<?php
	
    	// echo'<tr>';
        // echo'<td>'.$userName.'</td>';
        // echo'<td>'.$accNum.'</td>';
        // echo'<td>'.$email.'</td>';
        // echo'<td>'.$phnNum.'</td>';
        // echo'<td>'.$nid.'</td>';
        // echo'<td>'.$DOB.'</td>';
        // echo'<td>'.$gender.'</td>';
        // echo'<td>'.$status.'</td>';
        // echo'<td>'.$bGroup.'</td>';
        // echo'<td>'.$religion.'</td>';
        // echo'<td>'.$address.'</td>';
	   	// echo'</tr>';

			echo '<tr>';
			echo '<th colspan = "2">INFORMATION</th>';
			echo '</tr>';
			echo'<tr>';
			echo'<td > <img src ="./Files/Picture/'.$accNum.'.jpg" height = "100" width = "100"/></td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Name  </td>';
			echo'<td>'.$userName.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Account No  </td>';
			echo'<td>'.$accNum.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>E-mail  </td>';
			echo'<td>'.$email.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Phone No </td>';
			echo'<td>'.$phnNum.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>NID  </td>';
			echo'<td>'.$nid.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>DOB  </td>';
			echo'<td>'.$DOB.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Gender  </td>';
			echo'<td>'.$gender.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Status  </td>';
			echo'<td>'.$status.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Blood Group  </td>';
			echo'<td>'.$bGroup.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Religion  </td>';
			echo'<td>'.$religion.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Address  </td>';
			echo'<td>'.$address.'</td>';
			echo'</tr>';

?>
		</table>
<br>
<a href="<?php echo $href = 'UserHome.php?accNum='.$accNum; ?>"> Go Home </a> <br>
<a href="<?php echo $href = 'Edit.php?accNum='.$accNum; ?>"> Edit Profile</a> <br>
<a href="<?php echo $href = "Delete.php?accNum=$accNum & userName=$userName"?>">Delete Profile </a> <br/>
</body>
</html>