<?php
require_once('../Model/CustomerModel.php');

$accNum = $_REQUEST['accNum'];
$balance = getBalance($accNum);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Transfer Money</title>
    <link rel="stylesheet" href="../Asset/TransferMoneyStyle.css" />
  </head>
  <body>
    <form action='../View/TransferMoney.php?accNum=<?php echo $accNum?>' method="POST">
    <div class="welcome">
      <div class="welcometext">Welcome MD. Rahamatullah</div>
      <div class="goback"><a href="<?php echo 'UserHome.php?accNum=' . $accNum; ?>">GoBack</a></div>
    </div>
    <div class="deposit">
      <div class="text">
        TO :
        <input
          type="number"
          name="tAccNum"
          id="tAccNum"
          class="input"
          value=""
          placeholder="Account Number"
          required
        />
        :
        <input
          type="text"
          name="name"
          id="name"
          class="input"
          value=""
          placeholder="Account Name"
          required
        />
        :
        <input
          type="number"
          name="amount"
          id="amount"
          class="input"
          value=""
          placeholder="Transfer Amount"
          required
        />
        <input type="submit" class="btn" name="send" value="Send"></input>
        <button type="submit" class="btn" name="cancel">Cancel</button>
      </div>
    </div>
    </form>
      <?php

      if(isset($_REQUEST['send'])){
    
        $send = $_REQUEST['amount'];
        $tAccNum = $_REQUEST['tAccNum'];
        $name = $_REQUEST['name'];

        if($send>$balance){
          echo '<h2 id = "errorMsg">Insufficient Balance !!! Try again !!</h2>';
        }elseif($send>=500){

        $newBalance = $balance - $send;

        updateBalance($newBalance, $accNum);

        echo '<h2 id = "successMsg">TK '.$send.' Transferd Successfully to Account : '.$tAccNum.' Named : '.$name.' </h2>';
          
        $text = "Tk " . $send . " transferd to Account " . $tAccNum . " Named : ".$name;

        setHistory($text, $accNum);
        
        }else{
          echo '<h2 id = "errorMsg">Minimum Transfer amount is TK 500!!</h2>';
        }

      }elseif(isset($_REQUEST['cancel'])){

        header('location: UserHome.php?accNum='.$accNum);
      }

  ?>
  </body>
</html>
