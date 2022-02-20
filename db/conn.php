<?php 
    $host = 'localhost';
    $userName = 'root';
    $password = '';
    $db = 'test';

    $conn = mysqli_connect($host, $userName, $password, $db);
    if(!$conn){
        echo 'Not Connected' .mysqli_connect_error($conn);
    }
?>