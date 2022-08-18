<?php

$accNum = $_REQUEST['accNum'];

echo json_encode($accNum);

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
      <!-- <button class="btn" onclick="window.location.href='../View/Balance.html?accNum=<?php echo $accNum?>';">Balance</button> -->
      <button class="btn" onclick="balance()">Balance</button>
      <button
        class="btn"
        onclick="window.location.href = '../View/Deposit.html?';"
      >
        Deposit
      </button>
      <button
        class="btn"
        onclick="window.location.href = '../View/Withdraw.html?';"
      >
        Withdraw
      </button>
      <button
        class="btn"
        onclick="window.location.href = '../View/TransferMoney.html?';"
      >
        Transfer Money
      </button>
      <button
        class="btn"
        onclick="window.location.href = '../View/TransactionHistory.html?';"
      >
        Transaction History
      </button>
    </div>
  </body>
 <script src="../Asset/BalanceCheck.js"></script>
</html>
