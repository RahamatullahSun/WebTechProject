const accNum = document.getElementById('accNum');
const password = document.getElementById('password');

function loginCheck() {
  const accNumValue = accNum.value;
  const passwordValue = password.value;
  if (accNumValue === null && passwordValue === null) {
    alert('Please Enter your account Number and Password');
  } else {
    const loginCredentials = { accNum: accNumValue, password: passwordValue };

    const json = JSON.stringify(loginCredentials);

    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/LoginCheck.php', true);
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText == 'success') {
          window.location.href = '../View/UserHome.php?accNum=' + accNumValue;
        } else if (this.responseText == 'failed') {
          alert('failed');
        } else if (this.responseText == 'null') {
          alert('null');
        }
      }
    };
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('data=' + json);
  }
}
