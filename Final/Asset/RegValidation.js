// const form = document.getElementById('f');
const userName = document.getElementById('userName');
const password = document.getElementById('password');
const cPassword = document.getElementById('cpassword');
const accNum = document.getElementById('accNum');
const email = document.getElementById('email');
const phnNo = document.getElementById('phnNo');
const nid = document.getElementById('nid');
const dob = document.getElementById('dob');
const gender = document.getElementById('gender');
const mstatus = document.getElementById('status');
const bGroup = document.getElementById('bGroup');
const religion = document.getElementById('religion');
const address = document.getElementById('address');
const message = 'Field Cannot be empty';

function ajax() {
  if (
    checkName() == true &&
    checkPassword() == true &&
    checkEmail() == true &&
    checkPhnNo() == true &&
    checkNid() == true &&
    checkDob() == true &&
    checkGender() == true &&
    checkStatus() == true &&
    checkbGroup() == true &&
    checkReligion() == true &&
    checkAddress() == true
  ) {
    const userNameValue = userName.value;
    const passwordValue = password.value;
    const accNumValue = accNum.value;
    const emailValue = email.value;
    const phnNoValue = phnNo.value;
    const nidValue = nid.value;
    const dobValue = dob.value;
    const genderValue = gender.value;
    const mstatusValue = mstatus.value;
    const bGroupValue = bGroup.value;
    const religionValue = religion.value;
    const addressValue = address.value;

    const user = {
      userName: userNameValue,
      password: passwordValue,
      accNum: accNumValue,
      email: emailValue,
      phnNo: phnNoValue,
      nid: nidValue,
      dob: dobValue,
      gender: genderValue,
      mStatus: mstatusValue,
      bGroup: bGroupValue,
      religion: religionValue,
      address: addressValue,
    };

    const json = JSON.stringify(user);

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/RegCheck.php', true);
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        window.location.href =
          '../View/UploadPicture.php?accNum=' + accNumValue;
      }
    };
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('data=' + json);
  } else {
    alert('Invalid Credintials');
  }
}

function checkName() {
  const userNameValue = userName.value.trim();

  if (userNameValue == '') {
    setError(userName, message);
    return false;
  } else {
    setSuccess(userName);
    return true;
  }
}

function checkPassword() {
  const passwordvalue = password.value.trim();
  if (passwordvalue == '') {
    setError(password, message);
  } else if (!isPassword()) {
    setError(
      password,
      'Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters'
    );
  } else {
    setSuccess(password);
    return true;
  }
}

function confirmPassword() {
  const cPasswordvalue = cPassword.value.trim();
  const passwordvalue = password.value.trim();
  if (cPasswordvalue == '') {
    setError(cPassword, message);
  } else if (cPasswordvalue != passwordvalue) {
    setError(cPassword, 'Password does not match!!');
  } else {
    setSuccess(cPassword);
    return true;
  }
}

function checkPhnNo() {
  const phnNoValue = phnNo.value.trim();
  if (phnNoValue == '') {
    setError(phnNo, message);
  } else {
    setSuccess(phnNo);
    return true;
  }
}
function checkNid() {
  const nidValue = nid.value.trim();
  if (nidValue == '') {
    setError(nid, message);
  } else {
    setSuccess(nid);
    return true;
  }
}
function checkAddress() {
  const addressValue = address.value.trim();
  if (addressValue == '') {
    setError(address, message);
  } else {
    setSuccess(address);
    return true;
  }
}

function checkEmail() {
  const emailValue = email.value.trim();

  if (emailValue === '') {
    setError(email, message);
  } else if (!isEmail(emailValue)) {
    setError(email, 'Not a valid email');
  } else {
    setSuccess(email);
    return true;
  }
}

function checkGender() {
  const genderValue = gender.value;

  if (genderValue == '') {
    setError(gender, 'Please Select an Option');
  } else {
    setSuccess(gender);
    return true;
  }
}
function checkDob() {
  const dobValue = dob.value;

  if (dobValue == '') {
    setError(dob, 'Please Select an Option');
  } else {
    setSuccess(dob);
    return true;
  }
}
function checkbGroup() {
  const bGroupValue = bGroup.value;

  if (bGroupValue == '') {
    setError(bGroup, 'Please Select an Option');
  } else {
    setSuccess(bGroup);
    return true;
  }
}
function checkReligion() {
  const religionValue = religion.value;

  if (religionValue == '') {
    setError(religion, 'Please Select an Option');
  } else {
    setSuccess(religion);
    return true;
  }
}
function checkStatus() {
  const mstatusValue = mstatus.value;

  if (mstatusValue == '') {
    setError(mstatus, 'Please Select an Option');
  } else {
    setSuccess(mstatus);
    return true;
  }
}

function setError(input, message) {
  const form = input.parentElement;
  const small = form.querySelector('small');
  small.innerText = message;
  form.className = 'inputfield error';
  return false;
}

function setSuccess(input) {
  const form = input.parentElement;
  form.className = 'inputfield success';
  return true;
}

function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}

function isPassword() {
  const lowerCaseLetters = /[a-z]/g;
  const upperCaseLetters = /[A-Z]/g;
  const numbers = /[0-9]/g;

  if (
    password.value.match(lowerCaseLetters) &&
    password.value.match(upperCaseLetters) &&
    password.value.match(numbers) &&
    password.value.length >= 8
  ) {
    return true;
  } else {
    return false;
  }
}
