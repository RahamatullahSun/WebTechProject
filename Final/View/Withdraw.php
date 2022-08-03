<?php

    require('Cookie.php');
    $accNum = $_REQUEST['accNum'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Withdraw</title>
        <legend><a href="<?php echo 'UserHome.php?accNum=' . $accNum; ?>">Go Home</a> <br> <br> </legend>
    </head>
    <body>
        <form action="Withdraw.php" method ="post">
            <fieldset>
                <legend>Withdraw</legend>
                    <input type="hidden" name="accNum" value=<?php echo $accNum?>>
                    <p>Please enter the amount you want to withdraw </p>
                    Amount: <input type="number" name="withdrawAmount" value="">
                    <input type="submit" name="confirm" value="Confirm">
                    <input type="submit" name="cancel" value="Cancel">
                    </br>
                    </br>
            </fieldset>
        </form>
            <?php

                if(isset($_POST['confirm'])){
                    
                    $directory = 'Files/balance.txt';

                    $file = fopen($directory, 'a+');
                    $balance = fgets($file);
                    $withdraw =$_POST['withdrawAmount'];

                    if($withdraw>$balance){

                        echo '<h2>Insufficient Balance !!! Try again !!</h2>';

                    }else{

                    $newBalance = $balance - $withdraw;
                    fclose($file);

                    $file = fopen($directory, 'w');
	                fwrite($file, $newBalance);
                    fclose($file);

                    $hData ="TK ".$withdraw." has been withdrawn from account number : ".$accNum.".\r\n";
                    $hFile = fopen('Files/History.txt','a');
                    fwrite($hFile, $hData);

                    header('location: UserHome.php?accNum='.$accNum);

                    }

                }elseif(isset($_POST['cancel'])){

                    header('location: UserHome.php?accNum='.$accNum);
                }

            ?>
    </body>
</html>