<?php

  require_once('../Model/CustomerModel.php');

  $accNum = $_REQUEST['accNum'];
  $balance = getBalance($accNum);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Deposit</title>
    <link rel="stylesheet" href="../Asset/DepositStyle.css" />
  </head>
  <body>
    <form action='../View/Deposit.php?accNum=<?php echo $accNum?>' method="POST">
    <div class="welcome">
      <div class="welcometext">Welcome MD. Rahamatullah</div>
      <div class="goback"><a href="<?php echo 'UserHome.php?accNum=' . $accNum; ?>">GoBack</a></div>
    </div>
    <div class="deposit">
      <div class="text">
        Enter Amount You Want to Deposit :
        <input
          type="number"
          name="deposit"
          id="deposit"
          class="input"
          value=""
          placeholder="Deposit amount"
          
        />
        <input type="submit" class="btn" name="confirm" value="Confirm"></input>
        <button type="submit" class="btn" name="cancel">Cancel</button>
      </div>
    </div>
    </form>
    <?php

      if(isset($_REQUEST['confirm'])){
    
        $deposit = $_REQUEST['deposit'];

        if($deposit>=500){

        $newBalance = $balance + $deposit;

        updateBalance($newBalance, $accNum);

        echo '<h2 id = "successMsg">TK '.$deposit.' Deposited Successfully </h2>';
        $text = "Tk " . $deposit . " Deposited to Account " . $accNum;

        setHistory($text, $accNum);

      }else{
        echo '<h2 id = "errorMsg">Minimum Deposit amount is TK 500!!</h2>';
      }


  }elseif(isset($_REQUEST['cancel'])){

      header('location: UserHome.php?accNum='.$accNum);
  }

    ?>
  </body>
</html>
