<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <form action="Login.php" method="POST" enctype="">
      <fieldset>
        <legend>LOGIN</legend>
        Account Number : <br />
        <input type="number" name="accNum" value="" /> <br />
        Password : <br />
        <input type="password" name="password" value="" /> <br />
        <input type="submit" name="submit" value="LogIn" />
        <a href="Registration.php">Register </a>
      </fieldset>
    </form>

<?php 

if(isset($_REQUEST['submit'])){
  
    $accNum = $_REQUEST['accNum'];
    $password = $_REQUEST['password'];

    if($accNum == null || $password == null){
      echo '<h3>Account Number/Password can nor be Empty...</h3>';
    }else{
      
        $file = fopen('Files/user.txt', 'r');
      
        $data = fgets($file);
        $user = explode("|", $data); 
        if($accNum == trim($user[2]) && $password == trim($user[1])) {
          setcookie('status', 'true', time()+3600, '/');
          header('location: UserHome.php?accNum='.$accNum);
        }else {
          echo '<h3>Invalid username/password!!!</h3>';
        }
    }
}

?>
  </body>
</html>
