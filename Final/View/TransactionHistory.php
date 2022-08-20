<?php
require_once('../Model/CustomerModel.php');
	$accNum = $_REQUEST['accNum'];
?>
<html>
  <head>
    <title>Transaction History</title>
    <link rel="stylesheet" href="../Asset/HistoryStyle.css" />
  </head>
  <body>
    <div class="welcome">
      <div class="welcometext">Welcome MD. Rahamatullah</div>
      <div class="goback"><a href="<?php echo 'UserHome.php?accNum=' . $accNum; ?>">GoBack</a></div>
    </div>
	<div class="border">
		<h1>TRANSACTION HISTORY</h1>
	<table class="infoTable">
      <?php
        foreach(getHistory() as $data) {
          echo'<tr>';
          echo'<td>'.$data['text'].'</td>';
          echo'</tr>';
        }
      ?>
    </table>
    </div>
  </body>
</html>
