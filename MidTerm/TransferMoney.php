<?php
  require('Cookie.php');
  $accNum = $_REQUEST['accNum'];
?>

<html>
  <head>
    <title>Transfer</title>
    <legend><a href="<?php echo 'UserHome.php?accNum=' . $accNum; ?>">Go Home</a> <br> <br> </legend>
  </head>
  <body> 
    <form action="TransferMoney.php" method="POST">
      <fieldset>
        <legend>Transfer</legend>

        <table>
          <tr>
            <td>Account Name : <input type="text" name="accName" value="" /></td>
            <td>Account Number : <input type="number" name="tAccNum" value="" /></td>
            <td>Amount : <input type="number" name="amount" value="" /></td>
            <td><input type="submit" name="send" value="Send" /></td>
            <td><input type="submit" name="cancel" value="Cancel"></td>
            <input type="hidden" name="accNum" value="<?php echo $accNum;?>">
          </tr>
        </table>

      </fieldset>
    </form>
      <?php
          if(isset($_REQUEST['send'])){

            $accName = $_REQUEST['accName'];
            $tAccNum = $_REQUEST['tAccNum'];
            $amount = $_REQUEST['amount'];

            $file = fopen('Files/balance.txt', 'a+');
            $balance = fgets($file);

            if($amount>$balance){

              echo '<h2>Insufficient Balance !!! Try again !!</h2>';

            }else{

            $newBalance = $balance - $amount;
            fclose($file);

            $file = fopen('Files/balance.txt', 'w');
	          fwrite($file, $newBalance);
            fclose($file);

            $data = "Tk " . $amount . " transferd to account named " . $accName . " and account number : ".$tAccNum.".\r\n";

            $file = fopen('Files/History.txt', "a");
            fwrite($file, $data);
            header('location: UserHome.php?accNum='.$accNum);

            }

          }elseif(isset($_REQUEST['cancel'])){
            header('location: UserHome.php?accNum=' . $accNum);
          }
      ?>
  </body>
</html>
