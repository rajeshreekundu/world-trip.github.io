<?php 
    // session_start();
    include('db/conn.php');
    include('assets/function.php');

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pass = md5($pass);

        $sql = "SELECT uid, email, name from users WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1){
            $arr = array();
            $arr = mysqli_fetch_assoc($result);

            $_SESSION['id']=$arr['uid'];
            $_SESSION['email']=$arr['email'];
            $_SESSION['name']=$arr['name'];
            header('Location: index.php');
        }else{
            echo '<div class="alert-wrap-cls">
            <div class="alert alert-warning alert-dismissible fade show d-flex" role="alert">
            <h6 class="alert-headng pr-1">Error :</h6>
            Please enter the correct username and password!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="icon-clear">x</span>
            </button>
            </div>
          </div>
          ';
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href='style.css' rel='stylesheet' type='text/css' />

</head>

<body>
    <div class='login-form'>
        <form class='form-cls' method='post' action='login.php'>
        <div class='frm-header-cls'>  
        <h2 class='form-heading'>Login</h2>
            <p>Welcome to WorldTrip</p>
            </div>  
            <div class='input-area'>
                <input type='text' name='email' placeholder='Email' />
            </div>
            <div class='input-area'>
                <input type='password' name='pass' placeholder='Password' />
            </div>
            <button name='submit' class='butn form-btn'>Log In</button>

            <div class='frgot-pswrd-div'>
                <a href='signup.php'>Don't have an account? <span>Sign-up</span></a>
            </div>
        </form>
</body>

</html>