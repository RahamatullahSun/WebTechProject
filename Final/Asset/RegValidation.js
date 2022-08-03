const form = document.getElementById('f');
const userName = document.getElementById('userName');
const password = document.getElementById('password');
const cPassword = document.getElementById('cpassword');
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

const selectGender = document.getElementById('selectGender');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  checkName();
  checkPassword();
  confirmPassword();
  checkNid();
  checkAddress();
  checkPhnNo();
  checkEmail();
  checkGender();
  checkDob();
  checkReligion();
  checkStatus();
  checkbGroup();
});

function checkName() {
  const userNameValue = userName.value.trim();

  if (userNameValue == '') {
    setError(userName, message);
  } else {
    setSuccess(userName);
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
  }
}

function checkPhnNo() {
  const phnNoValue = phnNo.value.trim();
  if (phnNoValue == '') {
    setError(phnNo, message);
  } else {
    setSuccess(phnNo);
  }
}
function checkNid() {
  const nidValue = nid.value.trim();
  if (nidValue == '') {
    setError(nid, message);
  } else {
    setSuccess(nid);
  }
}
function checkAddress() {
  const addressValue = address.value.trim();
  if (addressValue == '') {
    setError(address, message);
  } else {
    setSuccess(address);
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
  }
}

function checkGender() {
  const genderValue = gender.value;

  if (genderValue == '') {
    setError(gender, 'Please Select an Option');
  } else {
    setSuccess(gender);
  }
}
function checkDob() {
  const dobValue = dob.value;

  if (dobValue == '') {
    setError(dob, 'Please Select an Option');
  } else {
    setSuccess(dob);
  }
}
function checkbGroup() {
  const bGroupValue = bGroup.value;

  if (bGroupValue == '') {
    setError(bGroup, 'Please Select an Option');
  } else {
    setSuccess(bGroup);
  }
}
function checkReligion() {
  const religionValue = religion.value;

  if (religionValue == '') {
    setError(religion, 'Please Select an Option');
  } else {
    setSuccess(religion);
  }
}
function checkStatus() {
  const mstatusValue = mstatus.value;

  if (mstatusValue == '') {
    setError(mstatus, 'Please Select an Option');
  } else {
    setSuccess(mstatus);
  }
}

function setError(input, message) {
  const form = input.parentElement;
  const small = form.querySelector('small');
  small.innerText = message;
  form.className = 'inputfield error';
}

function setSuccess(input) {
  const form = input.parentElement;
  form.className = 'inputfield success';
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
