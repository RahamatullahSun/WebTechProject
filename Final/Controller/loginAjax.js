function ajax(){
    let accNum = document.getElementById('accNum').value;
    let password = document.getElementById('password').value;
    let xhttp = new XMLHttpRequest();
    //xhttp.open('GET', 'userCheck.php?username='+username, true);
    xhttp.open('GET', '../Controller/LoginCheck.php?accNum='+accNum+'&password='+password, true);
    xhttp.send();
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            if(this.responseText=="Success"){
                alert("Login Successfull");
            }else{
                alert("Invalid credential");
            }
        }             
    }
}