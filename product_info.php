<?php 
session_start();
require 'PHPutility/config.php'

?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/product_info.css">
<?php require 'PHPutility/linkcss.php'?>
</head>
<body>
      <?php require 'PHPutility/nav.php'; ?>
      <?php require 'PHPutility/announcement.php'; ?>
      <?php require 'PHPutility/offcanvas.php';?>
      <?php
            //print_r($_SESSION["product"]);
            if(isset($_GET['action']) && $_GET['action']==1){                                                                                                                                                                                                                          ;
                  echo "<div class=\"alert alert-success alert-dismissible fade show mx-auto\" style=\"width:40%;margin-top:20px; text-align:center;\" role=\"alert\">
                        <strong>Product added successfully!</strong>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                        </button>
                  </div>";
            }
      ?>
      <div class="content_info mx-auto">      
            <div class="container-fluid">                                                                                                       
                  <div class="row">
                        <div class="col-12 col-xl-6">
                              
                              <?php 
                              $sql="SELECT * FROM product WHERE product_id={$_GET['product']}";
                              $result=$db->query($sql);
                              $row1=$result->fetch(PDO::FETCH_ASSOC);
                              require 'PHPutility/assign2.php';
                              ?>
                        </div>
                        <div class="col-12 col-xl-6 product_information">
                              <?php $sql="SELECT category_name FROM category WHERE category_id IN (SELECT category_id FROM cat_product WHERE product_id={$_GET['product']} ) ORDER BY category_id";
                              $result=$db->query($sql);
                              ?>
                              <h1 style="font-weight:900;"><?php while ($row =$result->fetch(PDO::FETCH_ASSOC)){
                                    echo $row['category_name'];
                                    echo '/';
                              } ?></h1>
                              <br>

                              <h3 class="product_text"><?php 
                                    echo $row1['product_name']; ?></h3>
                              <h6 class="product_text">HKD <?php echo $row1['price']?></h6>
                              <h6 class="product_text">Source: <?php 
                                    echo $row1['source']; ?></h6>
                              <h6 class="product_text">Quantity: <?php 
                                    $sql="SELECT a.quantity,b.size_name FROM size_product a INNER JOIN size b ON a.size_id=b.size_id WHERE a.product_id={$_GET['product']} ORDER BY b.size_id";
                                    $result=$db->query($sql);
                                    while ($row2=$result->fetch(PDO::FETCH_ASSOC)){
                                          echo "{$row2['size_name']}:{$row2['quantity']}". "&nbsp". "&nbsp"; 
                                    }
                              ?></h6>
                              <h6 class="product_text">Description: <?php echo $row1['description'] ?></h6>
                              
                                    <form action="PHPutility/addToCart.php" method="POST">
                                          <input type="hidden" name="product_id" value="<?php echo $_GET["product"]?>">
                                          <label for="size">Size:</label>
                                          <select name="size" id="size">
                                          <?php 
                                                $sql="SELECT a.quantity,b.size_name FROM size_product a INNER JOIN size b ON a.size_id=b.size_id WHERE a.product_id={$_GET['product']} ORDER BY b.size_id";
                                                $result=$db->query($sql);
                                                while ($row2=$result->fetch(PDO::FETCH_ASSOC)){
                                                      echo "<option value=\"{$row2["size_name"]}\">{$row2["size_name"]}</option>";
                                                }
                                          ?>
                                          </select>
                                          <label for="quantity">Quantity :</label>
                                          <input type="number" id="quantity" name="quantity" min="1" max="5" placeholder="1" value='1'>
                                          <button type="submit" class="btn btn-success bg-dark addCartBtn">ADD TO CART</button>
                                    </form>
                              
                        </div>
                  </div>
            </div>
      </div>

      <script src='js/product_info.js'></script>
</body>