<html>
    <head>
        <title>Delete Profile</title>
    </head>
    <body>
        <?php

            $accNum = $_REQUEST['accNum'];
            $userName = $_REQUEST['userName'];

        ?>
    <form action="Delete.php" method="post">

	<input type="hidden" name="filename" value="user.txt">
	<input type="hidden" name="accNum" value="<?=$accNum?>">
	<input type="hidden" name="userName" value="<?=$userName?>">
	Account Name : <br>
    <input type="text" name="name" value="<?php echo $userName; ?>">
	<br> <br>
	Account Number : <br>
    <input type="text" name="accNo" value="<?php echo $accNum; ?>">
	<br>
    <p>Are you sure want to DELETE your account?</p>
	<input type="submit" name="submit" value="Delete" >
	<input type="submit" name="cancel" value="Cancel" >	
    
    </form>

            <?php

                if(isset($_POST['submit'])){

                $filename = $_REQUEST['filename'];
                unlink($filename);
                header('location: Login.html');

                }elseif(isset($_POST['cancel'])){
                    header('location: Profile.php?accNum='.$accNum);
                }

            ?>
            
    </body>
</html>