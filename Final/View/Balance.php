<?php
require_once('../Model/CustomerModel.php');

  $accNum = $_REQUEST['accNum'];

$balance = getBalance($accNum);

?>
<html>
  <head>
    <title>Balance</title>
    <link rel="stylesheet" href="../Asset/BalanceStyle.css" />
  </head>
  <body>
    <div class="welcome">
      <div class="welcometext">Welcome MD. Rahamatullah</div>
      <div class="goback"><a href="<?php echo 'UserHome.php?accNum=' . $accNum; ?>">GoBack</a></div>
    </div>
    <div class="balance">
      <?php 
				if($balance==null || $balance ==0){
          echo ' <div id="balance" class="balancetext">Your Balance is 0 !! Please Deposit some money first!!</div>';
				}else{
					echo ' <div id="balance" class="balancetext">Your Balance is: '.$balance.'</div>';
				}
			?>
    </div>
  </body>
</html>