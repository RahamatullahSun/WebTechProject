const modal = document.querySelector('.modal');
const overlay = document.querySelector('.overlay');
const btnCloseModal = document.querySelector('.close-modal');
const btnOpenModal = document.querySelector('.btn');

const openModal = function () {
  modal.classList.remove('hidden');
  overlay.classList.remove('hidden');
};

const closeModal = function () {
  modal.classList.add('hidden');
  overlay.classList.add('hidden');
};

btnOpenModal.addEventListener('click', openModal);

btnCloseModal.addEventListener('click', closeModal);

overlay.addEventListener('click', closeModal);

document.addEventListener('keydown', function (event) {
  if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
    closeModal();
  }
});

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

function ajax() {
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
  xhttp.open('POST', '../controller/Edit.php', true);
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      window.location.href = '../View/Profile.php?accNum=' + accNumValue;
    }
  };
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.send('data=' + json);
}
