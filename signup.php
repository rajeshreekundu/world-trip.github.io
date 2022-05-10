<?php 
    include('db/conn.php');
    include('assets/function.php');

      if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];
        $pass = md5($pass);

     $sql = "INSERT INTO users (name, email, phone, password) 
        VALUES('$name', '$email', '$phone', '$pass')";
        
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo mysqli_connect_errno($conn);
        }else{
            echo 'Successful';
            header('location: login.php');
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
    <link href='style.css' rel='stylesheet' type='text/css' />

</head>

<body>
    <div class='login-form signup-form'>
        <form class='form-cls' id='formId' action="signup.php" method='post' >
            <!-- <h2 class='form-heading'>Signup</h2> -->
            <div class='frm-header-cls'>  
        <h2 class='form-heading'>Signup</h2>
            <p>Welcome to WorldTrip</p>
            </div>  
            <div class='input-area '>
                <input type='text' name='name' placeholder='Name' id='usrNme'/>
                <small>Error sms</small>
            </div>
            <div class='input-area '>
                <input type='email' name='email' placeholder='Email' id='usrEmail'/>
            </div>
            <div class='input-area'>
                <input type='number' name='phone' placeholder='Phone' id='usrPhn'/>
            </div>
            <div class='input-area'>
                <input type='password' name='pass' placeholder='Password' id='usrPswrd'/>
            </div>
            <button class='butn form-btn' type="submit">Signup</button>

            <div class='frgot-pswrd-div'>
                <a href='login.php'>Already have an account? <span>Login</span></a>
            </div>
        </form>


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




</body>

</html>