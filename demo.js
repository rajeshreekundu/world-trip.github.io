<script>
const form = document.getElementById('formId');
const usrName = document.getElementById('usrName');
const email = document.getElementById('usrEmail');
const phone = document.getElementById('usrPhn');
const password = document.getElementById('usrPass');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();
});

function checkInputs() {
    // get the value frm the input
    const nameValue = name.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    const passwordValue = password.value.trim();

    if(name.value === ''){
        // shw error
        // add error cls
        setErrorFor(usrName, 'Username cannot be blank');
    }else{
        // add sucss
        setSuccessFor(usrName);
    }
}
function setErrorFor(input, message){
    const inputArea = input.parentElement;
    const small = inputArea.querrySelector('small');

    small.innerText = message;
    inputArea.className = 'input-area error';
    
}
</script>