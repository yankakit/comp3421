<?php 
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $check=0;
    if(!isset($_SESSION["product"])) $_SESSION["product"]= array($_POST["product_id"] . $_POST["size"] . $_POST["quantity"]);
    else {
            
          $offset=$_POST["product_id"] . $_POST["size"];
          //echo $offset;
          for($i=0;$i<count($_SESSION["product"]);$i++){
                //echo strstr($_SESSION["product"][$i],$offset)!=false;
                //echo $i;
                if(strstr($_SESSION["product"][$i],$offset)!=false){
                      //echo intval(explode($_SESSION["product"][$i],$offset)[1]);
                      $total=intval(explode($offset,$_SESSION["product"][$i])[1])+intval($_POST["quantity"]);
                      //echo $total;
                      $_SESSION["product"][$i]=$offset . strval($total);
                      //echo $_SESSION["product"][$i];
                      $check=1;
                      break;
                }
                //echo $check;
          }
          if(!$check)$_SESSION["product"][]=$_POST["product_id"] . $_POST["size"] . $_POST["quantity"];

    }

}
setcookie("product",json_encode($_SESSION["product"]),time()+3600);
header("Location: ../product_info.php?product={$_POST["product_id"]}&action=1");
?>