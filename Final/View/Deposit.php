<?php

    require('Cookie.php');
    $accNum = $_REQUEST['accNum'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Deposit</title>
        <legend><a href="<?php echo 'UserHome.php?accNum=' . $accNum; ?>">Go Home</a> <br> <br> </legend>   
    </head>
    <body>
        <form action="Deposit.php" method ="post">
            <fieldset>
                <legend>Deposit</legend>
                    <input type="hidden" name="accNum" value=<?php echo $accNum?>>
                    <p>Please enter the amount you want to deposit </p>
                    Amount: <input type="number" name="depositAmount" value="">
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
                    $deposit = $_POST['depositAmount'];

                    if($deposit>=500){

                    $newBalance = $balance + $deposit;
                    fclose($file);

                    $file = fopen($directory, 'w');
	                fwrite($file, $newBalance);
                    fclose($file);
                    
                    $hData ="TK ".$deposit." deposited to account number : ".$accNum.".\r\n";
                    $hFile = fopen('Files/History.txt','a');
                    fwrite($hFile, $hData);
                    header('location: UserHome.php?accNum='.$accNum);

                    }else{
                        echo '<h2>Minimum Deposit amount is TK 500!!</h2>';
                    }


                }elseif(isset($_POST['cancel'])){

                    header('location: UserHome.php?accNum='.$accNum);
                }

            ?>
    </body>
</html>