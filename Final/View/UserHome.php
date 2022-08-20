<?php

$accNum = $_REQUEST['accNum'];

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="../Asset/userHomeStyle.css" />
  </head>
  <body>
    <div class="welcome">
      <div class="welcometext">Welcome MD. Rahamatullah</div>
      <div class="logout"><a href="../Controller/Logout.php">logout</a></div>
    </div>
    <div class="inputfield">
      <button
        class="btn"
        onclick="window.location.href = '../View/Withdraw.html?';"
      >
        Profile
      </button>
      <button class="btn" onclick="window.location.href='../View/Balance.php?accNum=<?php echo $accNum?>';">Balance</button>
      <button class="btn" onclick="window.location.href='../View/Deposit.php?accNum=<?php echo $accNum?>';">Deposit</button>
      <button class="btn" onclick="window.location.href='../View/Withdraw.php?accNum=<?php echo $accNum?>';">Withdraw</button>
      <button class="btn" onclick="window.location.href='../View/TransferMoney.php?accNum=<?php echo $accNum?>';">Transfer Money</button>
      <button class="btn" onclick="window.location.href='../View/TransactionHistory.php?accNum=<?php echo $accNum?>';">Transaction History</button>
    </div>
  </body>
 <script src="../Asset/BalanceCheck.js"></script>
</html>
