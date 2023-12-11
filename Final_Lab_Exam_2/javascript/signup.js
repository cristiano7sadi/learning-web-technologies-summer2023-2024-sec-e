function abc() {
    let usernamee = document.getElementById('username').value;
    let name = document.getElementById('name').value;
    let password = document.getElementById('password').value;
    let email = document.getElementById('email').value;
    let ConfirmPassword = document.getElementById('confirm_password').value;
    let usernameerror=document.getElementById('usernameerror');
    let nameerror=document.getElementById('nameerror');
    let passerror=document.getElementById('passerror');
    let emailerror=document.getElementById('emailerror');
    let roleerror=document.getElementById('roleerror');
    let success = document.getElementById('success');
    let roleRadios = document.getElementsByName('role');
    let role = "";
    for (let i = 0; i < roleRadios.length; i++) {
        if (roleRadios[i].checked) {
            role = roleRadios[i].value;
            break;
        }
    }
    
    usernameerror.innerHTML="";
    nameerror.innerHTML="";
    passerror.innerHTML="";
    emailerror.innerHTML="";
    roleerror.innerHTML="";
    success.innerHTML="";
    ConfirmPassword.innerHTML="";






    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/SignupCheck.php', true);

   
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    // xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    let data = 'username=' + usernamee + '&name=' + name + '&password=' + password + '&email=' + email + '&role=' + role + '&ConfirmPassword='+ConfirmPassword;

    xhttp.send(data);

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var response = JSON.parse(this.responseText);
            

            if (response.status === 1) {
                usernameerror.innerHTML = response.message;
            }
            if (response.status === 2) {
                nameerror.innerHTML = response.message;
            }
            if (response.status === 3) {
                passerror.innerHTML = response.message;
            }
            if (response.status === 4) {
                emailerror.innerHTML = response.message;
            }
            if(response.status==10){
                success.innerHTML=response.message;

            }
        }
    }
}
