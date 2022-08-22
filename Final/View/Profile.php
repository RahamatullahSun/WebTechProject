<?php
require_once('../Model/CustomerModel.php');

$accNum = $_REQUEST['accNum'];

?>
<html>
  <head>
    <title>Profile</title>
    <link rel="stylesheet" href="../Asset/ProfileStyle.css" />
  </head>
  <body>
    <div class="welcome">
      <div class="welcometext">Welcome MD. Rahamatullah</div>
      <div class="goback"><a href="<?php echo 'UserHome.php?accNum=' . $accNum; ?>">GoBack</a></div>
    </div>
	<div class="leftPanel">
      <div class= "img">
      <?php  echo'<img class="im" src ="../Asset/image/'.$accNum.'.jpg"/>';?>
      </div>
      <div class="name"><?php echo getUser($accNum)['Name']; ?></div>
      <input class="btn" type="button" name="" value="Edit Profile"/>
      <input class="btn" type="button" name="" value="Delete Profile"/>
	</div>
	<div class="rightPanel">
    <table class="infoTable">
        <tr>
          <td>Name:</td>
          <td><?php echo getUser($accNum)['Name']; ?></td>
        </tr>
        <tr>
          <td>Account Number</td>
          <td><?php echo getUser($accNum)['AccNum']; ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo getUser($accNum)['Email']; ?></td>
        </tr>
        <tr>
          <td>Phone Number</td>
          <td><?php echo getUser($accNum)['PhnNo']; ?></td>
        </tr>
        <tr>
          <td>NID</td>
          <td><?php echo getUser($accNum)['NID']; ?></td>
        </tr>
        <tr>
          <td>Date of Birth</td>
          <td><?php echo getUser($accNum)['DOB']; ?></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td><?php echo getUser($accNum)['Gender']; ?></td>
        </tr>
        <tr>
          <td>Status</td>
          <td><?php echo getUser($accNum)['Status']; ?></td>
        </tr>
        <tr>
          <td>Blood Group</td>
          <td><?php echo getUser($accNum)['BloodGroup']; ?></td>
        </tr>
        <tr>
          <td>Religion</td>
          <td><?php echo getUser($accNum)['Religion']; ?></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><?php echo getUser($accNum)['Address']; ?></td>
        </tr>
    </table>
  </div>
      <div class="modal hidden">
      <button class="close-modal">&times;</button>
      <h1>Edit Your Profile</h1>

        <div class="wrapper">
        <div class="form">
          <div class="inputfield">
              <input type="text" value="<?php echo getUser($accNum)['Name']; ?>" class="input" id="userName" >
          </div>  
          <div class="inputfield">
              <input type="text" value="<?php echo getUser($accNum)['Password']; ?>"  class="input" id="password" >         
          </div>  
          <div class="inputfield">
              <input type="number" class="input" id="accNum" value="<?php echo getUser($accNum)['AccNum']; ?>"readonly>
          </div>  
          <div class="inputfield">
            <input type="text" value="<?php echo getUser($accNum)['Email']; ?>" class="input" id="email">
          </div> 
          <div class="inputfield">
            <input type="text" value="<?php echo getUser($accNum)['PhnNo']; ?>" class="input" id="phnNo">
          </div> 
          <div class="inputfield">
            <input type="text" value="<?php echo getUser($accNum)['NID']; ?>" class="input" id="nid">
          </div> 
          <div class="inputfield">
            <input type="date" value="<?php echo getUser($accNum)['DOB']; ?>" class="input" id="dob">
          </div> 
          <div class="inputfield">
            <input type="text" value="<?php echo getUser($accNum)['Gender']; ?>" class="input" id="gender">
          </div>  
          <div class="inputfield">
            <input type="text" value="<?php echo getUser($accNum)['Status']; ?>" class="input" id="status">
          </div>  
          <div class="inputfield">
            <input type="text" value="<?php echo getUser($accNum)['BloodGroup']; ?>" class="input" id="bGroup">
          </div> 
          <div class="inputfield">
            <input type="text" value="<?php echo getUser($accNum)['Religion']; ?>" class="input" id="religion">
          </div> 
          <div class="inputfield">
              <input type="text" value="<?php echo getUser($accNum)['Address']; ?>" class="input" id="address">
          </div>
          <div class="inputfield">
            <input class="btn" type="button" name="" value="Update" onclick="ajax()"/>
          </div>
        </div>
      </div>

    </div>
    <div class="overlay hidden"></div>
    <script src="../Asset/EditProfile.js"></script>
  </body>
</html>
