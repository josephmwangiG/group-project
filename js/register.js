function registrationFormValidation(){

    var username = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var region = document.getElementById('region').value;
    var phone = document.getElementById('mobile').value;
    var password = document.getElementById('pwd').value;
    var c_password = document.getElementById('c_pwd').value;

    if (username == "" | email == "" | region == "" | password == "" | c_password == "" ){
        document.getElementById("infors").innerHTML = "Field can't be empty!!";
        return false;
    }
    
    else if (c_password != password){
        document.getElementById("vc_password").innerHTML = "password doesn't match!";
        return false;        
    }

    else{
        return true;
    }

}

function loginFormValidation(){
    if (email == ""){
        document.getElementById("mail").innerHTML = "Username Field can't be empty!!";
        return false;
    }
    else if (password == ""){
        document.getElementById("vpassword").innerHTML = "Enter Your Password!!";
        return false;
    }
    else{
        return true;
    }
}