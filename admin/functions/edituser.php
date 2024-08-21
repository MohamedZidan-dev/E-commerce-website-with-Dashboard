<?php 

// echo"<pre>";

// die(print_r($_POST));

//id


$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];
$priv = $_POST['priv'];
$gender = $_POST['gender'];

//check if the values empty 

// if( $username!='' && $email != '' && $phone != '' && $address != '' && $priv != '' && $gender != '')






include('connection.php');

// if($_POST['password'] != ''){

// }

if(!empty($_POST['password'])){
    $newpassword = md5($_POST['password']);

    $updateThatUser = "UPDATE users SET 
    username = '$username ',
    email = '$email',
    phone  = '$phone',
    password  = '$newpassword',
    address = '$address',
    priv = '$priv',
    gender = '$gender'  WHERE id = '$id'";

    $query = $conn->query($updateThatUser);

    if(!$query){
        echo $conn-> error;
    }else{
        header("location: ../users.php");
    }

} else{

    $updateThatUser = "UPDATE users set 
    username = '$username ',
    email = '$email',
    phone  = '$phone',
    address = '$address',
    priv = '$priv',
    gender = '$gender' WHERE id = '$id'";

    $query = $conn->query($updateThatUser);

    if(!$query){
        echo $conn-> error;
    }else{
        header("location: ../users.php");
    }

}



