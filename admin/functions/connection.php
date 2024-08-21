<?php 

define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DB_NAME','e-commerce1');

$conn = new mysqli(HOST,USER,PASSWORD,DB_NAME);

$conn -> set_charset('utf8');

if(!$conn){
    $conn->connect_error();
}