<?php

$accNum = $_REQUEST['accNum'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Upload Picture</title>
    <link rel="stylesheet" href="../Asset/UploadStyle.css" />
  </head>
  <body>
    <div class="text">
      <h1>Please Upload your picture to complete the Registration</h1>
    </div>
    <form action="../Controller/Upload.php?accNum=<?php echo $accNum; ?>" method="post" enctype="multipart/form-data">
        <div class="container">

        <input class="input" type="file" name="picture" />
        <input
            class="btn"
            type="submit"
            name="submit"
            value="Register"
        />
        <input
            class="btn"
            type="button"
            name=""
            value="Cancel"
            onclick="location.href='../view/Login.html'"
        />
        </div>
    </form>
  </body>
</html>
