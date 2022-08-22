<?php


$accNum = $_REQUEST['accNum'];
$fileName = $_FILES['picture']['name'];

    $fileTmpPath = $_FILES['picture']['tmp_name'];
    $fileName = $_FILES['picture']['name'];
    $fileSize = $_FILES['picture']['size'];
    $fileType = $_FILES['picture']['type'];
    $fileNameEx = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameEx));

    $newFileName = $accNum . '.' . $fileExtension;

    $allowedfileExtensions = array('jpg');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
   
      $uploadFileDir = '../asset/image/';
      $newDir = $uploadFileDir . $newFileName;

      move_uploaded_file($fileTmpPath, $newDir);
    }

    header('location: ../View/Login.html');


?>