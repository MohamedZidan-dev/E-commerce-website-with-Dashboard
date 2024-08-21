<?php 

// echo"<pre>";

// print_r($_POST);


$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = md5($_POST['password']);
$priv = $_POST['priv'];
$gender = $_POST['gender'];

if( $username!='' && $email != '' && $phone != '' && $address != '' && $password != '' && $priv != '' && $gender != ''){
   
    include('connection.php');

    $insert = "INSERT INTO 
    users(username,email,phone,address,password,priv,gender) 
    VALUES ('$username','$email','$phone','$address','$password','$priv','$gender')";
    
    $query = $conn->query($insert);
    
    if(!$conn){
        echo $conn-> error;
    }else{
        header("location: ../users.php");
    }
}else{
    header("location: ../users.php?action=add");
}



