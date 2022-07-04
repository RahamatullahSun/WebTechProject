<html>
  <head>
    <title>Registration</title>
  </head>
  <body>
    <form action="RegCheck.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend>REGISTRATION</legend>

        <table border="1">
          <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="" /></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input type="password" name="password" value="" /></td>
          </tr>
          <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="cPassword" value="" /></td>
          </tr>
          <tr>
            <td>Account Number:</td>
            <td><input type="number" name="accNum" value="<?php echo rand(0, 9); echo rand(0, 9);echo rand(0, 9);echo rand(0, 9);echo rand(0, 9);?>" readonly/></td>
          </tr>
          <tr>
              <td>E-mail:</td>
              <td><input type="email" name="email" value="" /></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="number" name="phnNum" value="" /></td>
            </tr>
            <tr>
                <td>NID:</td>
                <td><input type="number" name="nid" value="" /></td>
            </tr>
            <tr>
              <td>Date of Birth:</td>
              <td><input type="date" name="DOB" value="" /></td>
            </tr>
            <tr>
            <td>Gender:</td>
            <td>
              <input type="radio" name="gender" value="Male" /> Male
              <input type="radio" name="gender" value="Female" /> Female
              <input type="radio" name="gender" value="Other" /> Other
            </td>
          </tr>
          <tr>
            <td>Marital Status:</td>
            <td>
              <input type="radio" name="status" value="Married" /> Married
              <input type="radio" name="status" value="Single" /> Single
            </td>
          </tr>
          <tr>
            <td>Blood Group:</td>
            <td>
              <select name="bGroup">
                <option value="A+">A+ (A positive)</option>
                <option value="A−">A− (A negative)</option>
                <option value="B+">B+ (B positive)</option>
                <option value="B−">B− (B negative)</option>
                <option value="AB+">AB+ (AB positive)</option>
                <option value="AB−">AB− (AB negative</option>
                <option value="O+">O+ (O positive)</option>
                <option value="O−">O− (O negative)</option>
              </select>
            </td>
          </tr>
            <td>Religion:</td>
            <td>
              <select name="religion">
                <option value="Islam">Islam</option>
                <option value="Hinduism">Hinduism</option>
                <option value="Buddhism">Buddhism</option>
                <option value="Chirstianity">Chirstianity</option>
                <option value="Others">Others</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Address:</td>
            <td><textarea name="address"></textarea></td>
          </tr>
          <tr>
            <td>Picture:</td>
            <td><input type="file" name="picture" /></td>
          </tr>
        </table>
      </fieldset>

      <a href="Login.html"><input type="button" name="" value="Go Back" /></a>
      <input type="submit" name="submit" value="Register" />
      <input type="reset" name="reset" value="Reset" />

    </form>
  </body>
</html>
