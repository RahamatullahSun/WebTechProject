<?php

    require('Cookie.php');
    $accNum = $_REQUEST['accNum'];
    $userName = $_REQUEST['userName'];

?>
<html>
    <head>
        <title>Delete Profile</title>
    </head>
    <body>
    <form action="Delete.php" method="post">

        <fieldset>
            <legend>Delete</legend>

                <input type="hidden" name="filename" value="Files/user.txt">
                <input type="hidden" name="accNum" value="<?=$accNum?>">
                <input type="hidden" name="userName" value="<?=$userName?>">
                Account Name : <br>
                <input type="text" name="name" value="<?php echo $userName; ?>">
                <br> <br>
                Account Number : <br>
                <input type="text" name="accNum" value="<?php echo $accNum; ?>">
                <br>
                <p>Are you sure want to DELETE your account?</p>
                <input type="submit" name="submit" value="Delete" >
                <input type="submit" name="cancel" value="Cancel" >	
        </fieldset>
    
    </form>

            <?php

                if(isset($_POST['submit'])){
                $filename = $_REQUEST['filename'];
                unlink($filename);
                unlink('Files/History.txt');
                unlink('Files/balance.txt');
                unlink('Files/Picture/' . trim($accNum) . '.jpg');
                header('location: Login.php');

                }elseif(isset($_POST['cancel'])){
                    header('location: Profile.php?accNum='.$accNum);
                }

            ?>
            
    </body>
</html>