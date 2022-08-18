function balance() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onload = function () {
    var data = JSON.parse(this.responseText);
    console.log(data);
  };
  xmlhttp.open('GET', '../View/UserHome.php', true);
  xmlhttp.send();
}
