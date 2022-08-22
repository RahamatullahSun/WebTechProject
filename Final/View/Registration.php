<html>
  <head>
    <title>Registration</title>
    <link rel="stylesheet" href="../Asset/RegFormStyle.css?">
    <!-- <script src="https://kit.fontawesome.com/e2b664239b.js" crossorigin="anonymous"></script> -->
  </head>
  <body>
    <!-- <form  enctype="multipart/form-data"  id="f"> -->

        <div class="wrapper">
        <div class="title">
          Registration Form
        </div>
        <div class="form">
          <div class="inputfield">
              <label>Name</label>
              <input type="text" value="" class="input" placeholder="Enter Your Name" id="userName"  onkeyup="checkName()" required>
              <!-- <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i> -->
              <small>Error Message</small>
          </div>  
          <div class="inputfield">
              <label>Password</label>
              <input type="password" value="" placeholder="Password" class="input" id="password" onkeyup="checkPassword()" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              <small>Error Message</small>
              
          </div>  
          <div class="inputfield">
              <label>Confirm Password</label>
              <input type="password" value="" class="input" id="cpassword" onkeyup="confirmPassword()" required>
              <small>Error Message</small>
          </div> 
          <div class="inputfield">
              <label>Account Number</label>
              <input type="number" class="input" id="accNum" value="<?php echo rand(0, 9); echo rand(0, 9);echo rand(0, 9);echo rand(0, 9);echo rand(0, 9);?>" readonly>
          </div>  
          <div class="inputfield">
            <label>Email Address</label>
            <input type="text" value="" class="input" id="email" onkeyup="checkEmail()" required>
            <small>Error Message</small>
          </div> 
          <div class="inputfield">
            <label>Phone Number</label>
            <input type="text" value="" class="input" id="phnNo" onkeyup="checkPhnNo()" required>
            <small>Error Message</small>
          </div> 
          <div class="inputfield">
            <label>NID</label>
            <input type="text" value="" class="input" id="nid" onkeyup="checkNid()" required>
            <small>Error Message</small>
          </div> 
          <div class="inputfield">
            <label>Date of Birth</label>
            <input type="date" value="" class="input" id="dob" onclick="checkDob()" required>
            <small>Error Message</small>
          </div> 
            <div class="inputfield">
              <label>Gender</label>
                <select name="gender" id="gender" onclick="checkGender()" required>
                  <option value="">Select</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="Others">Others</option>
                </select>
              <small>Error Message</small>
            </div> 
            <div class="inputfield">
              <label>Maritial Status</label>
                <select name="status" id="status" onclick="checkStatus()" required>
                  <option value="">Select</option>
                  <option value="Married">Married</option>
                  <option value="Single">Single</option>
                </select>
              <small>Error Message</small>
            </div> 
            <div class="inputfield">
              <label>Blood Group</label>
                <select name="bGroup" id="bGroup" onclick="checkbGroup()" required>
                  <option value="">Select</option>
                  <option value="Apos">A+ (A positive)</option>
                  <option value="Aneg">A− (A negative)</option>
                  <option value="Bpos">B+ (B positive)</option>
                  <option value="Bneg">B− (B negative)</option>
                  <option value="ABpos">AB+ (AB positive)</option>
                  <option value="ABneg">AB− (AB negative)</option>
                  <option value="Opos">O+ (O positive)</option>
                  <option value="Oneg">O− (O negative)</option>
                </select>
              <small>Error Message</small>
            </div> 
            <div class="inputfield">
              <label>Religion</label>
                <select name="religion" id="religion" onclick="checkReligion()" required>
                  <option value="">Select</option>
                  <option value="Islam">Islam</option>
                  <option value="Hinduism">Hinduism</option>
                  <option value="Buddhism">Buddhism</option>
                  <option value="Chirstianity">Chirstianity</option>
                  <option value="Others">Others</option>
                </select>
              <small>Error Message</small>
            </div> 
          <div class="inputfield">
              <label>Address</label>
              <textarea class="textarea" id="address" value = "" onkeyup="checkAddress()" required></textarea>
              <small>Error Message</small>
          </div>
          <div class="inputfield">
            <input class="btn" type="button" name="" value="Register" onclick="ajax()"/>
            <input class="btn" type="button" name="" value="Go-Back" onclick="location.href='../view/Login.html'"/>
          </div>
        </div>
      </div>

  </body>
  <script src = "../Asset/RegValidation.js"></script>
</html>
