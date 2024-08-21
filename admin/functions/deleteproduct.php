<?php 



$id = $_GET['id'];
// echo $id;

require_once("connection.php");

$delete = "DELETE FROM products WHERE id = '$id'";
$query = $conn->query($delete);

if($query){
    header("location: ../products.php");
}else{
    echo $conn->error;
}

