
<?php
// kenny code
 include("config.php");
session_start();
$user_name=  $_SESSION["username"];
$product_id=$_GET['product_id'];
echo $user_name;
echo $product_id;

 $sql="INSERT INTO test_purchase (user_name,product_id) VALUE ('$user_name','$product_id')";
 $result=mysqli_query($con,$sql);

 if($result){
    echo "success";
 }else{
    echo "unsuccess";
 }



?>