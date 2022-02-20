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
            // echo 'Successful';
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
        <form class='form-cls' action="signup.php" method='post' >
            <h2 class='form-heading'>Signup</h2>

            <div class='input-area'>
                <input type='text' name='name' placeholder='Name' />
            </div>
            <div class='input-area'>
                <input type='email' name='email' placeholder='Email' />
            </div>
            <div class='input-area'>
                <input type='number' name='phone' placeholder='Phone' />
            </div>
            <div class='input-area'>
                <input type='password' name='pass' placeholder='Password' />
            </div>
            <button class='butn form-btn' name="submit">Signup</button>

            <div class='frgot-pswrd-div'>
                <a href='login.php'>Already have an account? <span>Login</span></a>
            </div>
        </form>
</body>

</html>