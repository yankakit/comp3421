<?php 

print_all_product();

function print_all_product(){
    include("config.php");
    $sql="SELECT * from product WHERE 1;";
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)>0){
       $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
    }else{
        echo'eror';
    }
   
/*
    for($i=0;$i<count($result);$i++){
        echo $result[$i]['product_id'];
        echo $result[$i]['product_name'];
        echo $result[$i]['category'];
        echo $result[$i]['description'];
        echo $result[$i]['price'];
        echo $result[$i]['image'];
        echo $result[$i]['source'];
        echo $result[$i]['remain'];
        echo $result[$i]['size'];
      }
      */
      return $result;
}



?>