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
        <form class='form-cls' id='formId' action="signup.php" method='post' onsubmit="return formValidation()">
            <div class='frm-header-cls'>  
        <h2 class='form-heading'>Signup</h2>
            <p>Welcome to WorldTrip</p>
            </div>  
            <div class='input-area '>
                <input type='text' name='name' placeholder='Name' id='usrName'/>
                <span id='usrname' class='error-sms'></span>
            </div>
            <div class='input-area '>
                <input type='email' name='email' placeholder='Email' id='usrEmail'/>
                <span id='usremail' class='error-sms'></span>
            </div>
            <div class='input-area'>
                <input type='number' name='phone' placeholder='Phone' id='usrPhn'/>
                <span id='usrphn' class='error-sms'></span>
            </div>
            <div class='input-area'>
                <input type='password' name='pass' placeholder='Password' id='usrPswrd'/>
                <span id='usrpass' class='error-sms'></span>
            </div>
            <button class='butn form-btn' type="submit">Signup</button>

            <div class='frgot-pswrd-div'>
                <a href='login.php'>Already have an account? <span>Login</span></a>
            </div>
        </form>
</div>

<script src='index.js'></script>
<!-- <script type='text/javascript'>

    function formValidation(){
    var user = document.getElementById('usrNme').value;

    if(user == ""){
        document.getElementById('usrname').innerHTML= " * Please fill the username field";
        return false;
    }
}
</script> -->
</body>

</html>