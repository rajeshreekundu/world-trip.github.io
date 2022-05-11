function formValidation(){
    var name = document.getElementById('usrName').value;
    var email = document.getElementById('usrEmail').value;
    var phone = document.getElementById('usrPhn').value;
    var password = document.getElementById('usrPswrd').value;

    if(name == ""){
        document.getElementById('usrname').innerHTML= "Please fill the name field";
        setErrorFor(usrName);
        return false;
    } 

    if(email == ""){
        document.getElementById('usremail').innerHTML= "Please fill the email field";
        setErrorFor(usrEmail);
        return false;
    }

    if(phone == ""){
        document.getElementById('usrphn').innerHTML= "Please fill the phone field";
        setErrorFor(usrPhn);
        return false;
    }

    if(password == ""){
        document.getElementById('usrpass').innerHTML= "Please fill the password field";
        setErrorFor(usrPswrd);
        return false;
    }

    function setErrorFor(input){
        var inputArea = input.parentElement;
        inputArea.className = 'input-area error-field'
    }
};