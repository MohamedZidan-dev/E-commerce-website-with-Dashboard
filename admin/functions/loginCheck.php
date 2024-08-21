<?php 

// echo "<pre>";
// print_r($_POST);

//check if user exist in database

$username = $_POST['username'];
$password = md5($_POST['password']);


if(!empty($username) && !empty($password)){
    include "connection.php";

    $checkUser = "SELECT * FROM users WHERE username = '$username' &&  password = '$password'";
    
    $query = $conn->query($checkUser);
    $result = $query->fetch_assoc();
    $id = $result['id'];
    
    if($query -> num_rows > 0){
        session_start();
        $_SESSION['login_id'] = $id;
        header("location: ../index.php");
    }else{
        header("location: ../login.php");
    }
    
    
    
}else{
    header("location: ../login.php");
}

