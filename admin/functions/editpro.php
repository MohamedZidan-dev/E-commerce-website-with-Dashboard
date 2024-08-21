<?php 

// echo"<pre>";

// die(print_r($_POST));



$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$discription = $_POST['discription'];
$category = $_POST['category'];

if( $name!='' && $price != '' && $sale != '' && $discription != '' && $category != '' && $_FILES['img']['error'] == 0){

        
    $imgname = $_FILES['img']['name'];
    $temp = $_FILES['img']['tmp_name'];

    if($_FILES['img']['error'] == 0){
        $extention = ['jpg' , 'jpeg' ,'png' ,'gif'];

        $ext = pathinfo($imgname, PATHINFO_EXTENSION);
        if(in_array($ext,$extention)){
            if($_FILES['img']['size'] <  2000000){
                // change img name
                $newName = md5(uniqid()) .$ext;
                // change img direction or temp
                move_uploaded_file($temp , "../images/" . $newName);
            }else{
                echo "image size is very big";
            }
        }else{
            echo "Extention not Allowed";
        }

    }else{
        echo "uploud an img ,please";
    }

// update data
    require_once('connection.php');

    $insert = "UPDATE products set name='$name' ,price='$price',sale='$sale',discription='$discription',cat_id='$category' ,img='$newName'
     WHERE id = '$id'";
    
    $query = $conn->query($insert);
    
    if(!$conn){
        echo $conn-> error;
    }else{
        header("location: ../products.php");
    }
}else if($_FILES['img']['error'] > 0 &&  $name!='' && $price != '' && $sale != '' && $discription != '' && $category != ''){

    // update data
    require_once('connection.php');

    $insert = "UPDATE products set name='$name' ,price='$price',sale='$sale',discription='$discription',cat_id='$category'
     WHERE id = '$id'";
    
    $query = $conn->query($insert);
    
    if(!$conn){
        echo $conn-> error;
    }else{
        header("location: ../products.php");
    }

}else{
    header("location: ../products.php");
}



