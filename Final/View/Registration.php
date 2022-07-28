<html>
  <head>
    <title>Registration</title>
    <link rel="stylesheet" href="../view/style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <form action="../Controller/RegCheck.php" method="post" enctype="multipart/form-data" name="form">

        <div class="wrapper">
        <div class="title">
          Registration Form
        </div>
        <div class="form">
          <div class="inputfield">
              <label>Name</label>
              <input type="text" class="input" name="name">
          </div>  
          <div class="inputfield">
              <label>Password</label>
              <input type="password" class="input" name="password">
          </div>  
          <div class="inputfield">
              <label>Confirm Password</label>
              <input type="password" class="input">
          </div> 
          <div class="inputfield">
              <label>Account Number</label>
              <input type="number" class="input" value="<?php echo rand(0, 9); echo rand(0, 9);echo rand(0, 9);echo rand(0, 9);echo rand(0, 9);?>" readonly>
          </div>  
          <div class="inputfield">
            <label>Email Address</label>
            <input type="text" class="input">
          </div> 
          <div class="inputfield">
            <label>Phone Number</label>
            <input type="text" class="input">
          </div> 
          <div class="inputfield">
            <label>NID</label>
            <input type="text" class="input">
          </div> 
          <div class="inputfield">
            <label>Date of Birth</label>
            <input type="date" class="input">
          </div> 
            <div class="inputfield">
              <label>Gender</label>
              <div class="custom_select">
                <select>
                  <option value="">Select</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            </div> 
            <div class="inputfield">
              <label>Maritial Status</label>
              <div class="custom_select">
                <select>
                  <option value="">Select</option>
                  <option value="Married">Married</option>
                  <option value="Single">Single</option>
                </select>
              </div>
            </div> 
            <div class="inputfield">
              <label>Blood Group</label>
              <div class="custom_select">
                <select name="bGroup">
                  <option value="">Select</option>
                  <option value="A+">A+ (A positive)</option>
                  <option value="A−">A− (A negative)</option>
                  <option value="B+">B+ (B positive)</option>
                  <option value="B−">B− (B negative)</option>
                  <option value="AB+">AB+ (AB positive)</option>
                  <option value="AB−">AB− (AB negative)</option>
                  <option value="O+">O+ (O positive)</option>
                  <option value="O−">O− (O negative)</option>
                </select>
              </div>
            </div> 
            <div class="inputfield">
              <label>Religion</label>
              <div class="custom_select">
                <select name="religion">
                  <option value="">Select</option>
                  <option value="Islam">Islam</option>
                  <option value="Hinduism">Hinduism</option>
                  <option value="Buddhism">Buddhism</option>
                  <option value="Chirstianity">Chirstianity</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            </div> 
          <div class="inputfield">
              <label>Address</label>
              <textarea class="textarea" ></textarea>
          </div> 
          <div class="inputfield">
            <input type="button" value="Register" class="btn" onclick="return validateForm()">
          </div>

          <div class="message-container">
			      <h3 id="message">Fill form to continue</h3>
		      </div>
        </div>
      </div>

    </form>
  </body>
</html>
