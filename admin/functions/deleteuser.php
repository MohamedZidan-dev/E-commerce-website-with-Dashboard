<?php

$id = $_GET['id'];
// echo $id;

require_once("connection.php");

$delete = "DELETE FROM users WHERE id = '$id'";
$query = $conn->query($delete);

if($query){
    header("location: ../users.php");
}else{
    echo $conn->error;
}

