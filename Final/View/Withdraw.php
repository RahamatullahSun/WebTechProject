<?php

  require_once('../Model/CustomerModel.php');

  $accNum = $_REQUEST['accNum'];
  $balance = getBalance($accNum);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Withdraw</title>
    <link rel="stylesheet" href="../Asset/DepositStyle.css" />
  </head>
  <body>
    <form action='../View/Withdraw.php?accNum=<?php echo $accNum?>' method="POST">
      <div class="welcome">
        <div class="welcometext">Welcome MD. Rahamatullah</div>
        <div class="goback"><a href="<?php echo 'UserHome.php?accNum=' . $accNum; ?>">GoBack</a></div>
      </div>
      <div class="deposit">
        <div class="text">
          Enter Amount You Want to Withdraw :
          <input
            type="number"
            name="withdraw"
            id="withdraw"
            class="input"
            value=""
            placeholder="Withdraw amount"
          />
          <input type="submit" class="btn" name="confirm" value="Confirm"></input>
          <button type="submit" class="btn" name="cancel">Cancel</button>
        </div>
      </div>
    </form>
  <?php

      if(isset($_REQUEST['confirm'])){
    
        $withdraw = $_REQUEST['withdraw'];

        if($withdraw>$balance){
          echo '<h2 id = "errorMsg">Insufficient Balance !!! Try again !!</h2>';
        }elseif($withdraw>=500){

        $newBalance = $balance - $withdraw;

        updateBalance($newBalance, $accNum);

        echo '<h2 id = "successMsg">TK '.$withdraw.' Withdrawn Successfully </h2>';
        $text = "Tk " . $withdraw . " Withdrawn from Account " . $accNum;

        setHistory($text, $accNum);
        
        }else{
          echo '<h2 id = "errorMsg">Minimum Withdraw amount is TK 500!!</h2>';
        }

      }elseif(isset($_REQUEST['cancel'])){

        header('location: UserHome.php?accNum='.$accNum);
      }

  ?>
  </body>
</html>
