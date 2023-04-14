<?php session_start();
require 'PHPutility/config.php'
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/product_detail.css">
<link rel="stylesheet" href="css/common.css">
<?php require 'PHPutility/linkcss.php'?>
</head>
<body>
<?php require 'PHPutility/nav.php'?>
<?php include 'PHPutility/announcement.php' ?>
<?php require 'PHPutility/offcanvas.php';?>
<div class="content">
    <div class="product_sub mx-auto">
            <div class="product_header">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

                <?php
                if(!($_SERVER["REQUEST_METHOD"] == "POST" and $_POST['search']!="")){
                    if (isset($_GET['edition'])){?>
                        <li class="breadcrumb-item" aria-current="page"><?php echo htmlspecialchars(strtoupper($_GET['edition'])); ?></li>
                    <?php };?>
                    <li class="breadcrumb-item" aria-current="page"><?php echo $sex=(isset($_GET['sex']))? htmlspecialchars(strtoupper($_GET['sex'])):"MEN"; ?></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $sex=(isset($_GET['category']))?  htmlspecialchars(strtoupper($_GET['category'])):"all"; ?></li>
                <?php }else{?>
                    <li class="breadcrumb-item" aria-current="page">search</li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo "\"" .htmlspecialchars(strtoupper($_POST['search'])). "\""; ?></li>
                <?php };?>
            </ol>
            </nav>
        </div>
        <div class="product_cat">
            <div class="container-fluid products">
                <div class="row">
                    <?php if(isset($db)){
                        if($_SERVER["REQUEST_METHOD"] != "POST")
                        {
                            if($_GET['category']=='all') {$_GET['category']=$_GET['sex'];}
                            $sql="SELECT * FROM product WHERE product_id IN (SELECT product_id FROM cat_product WHERE category_id IN (SELECT category_id FROM category WHERE category_name='{$_GET['sex']}' OR category_name='{$_GET['category']}'))";
                            $sql="SELECT * FROM `product` WHERE `product_id` IN ((SELECT `product_id` FROM `cat_product` WHERE `category_id`=(SELECT `category_id` FROM `category` WHERE `category_name`='{$_GET['sex']}')) INTERSECT (SELECT `product_id` FROM `cat_product` WHERE `category_id`=(SELECT `category_id` FROM `category` WHERE `category_name`='{$_GET['category']}')))";
                            $result=$db->query($sql);
                            //$sql="SELECT * FROM product";
                            //$result=$db->query($sql);
                            while($row=$result->fetch(PDO::FETCH_ASSOC)){
                                echo "<div class=\"productIItem col-lg-3\">";
                                echo "<div class=\"product\">";
                                echo "<div class=\"card card-block card-1\">";
                                echo  "<img class=\"card-img-top shoppingItem\" src=\"{$row["image"]}\" alt=\"Card image cap\">";
                                echo  "<div class=\"card-body product-body\">";
                                echo  "<h5 class=\"card-title\">{$row["product_name"]}</h5>";
                                echo "<p class=\"card-text\">{$row["description"]}</p>";
                                echo "<p class=\"card-text\">Price:{$row["price"]}</p>";
                                echo "<a href=\"product_info.php?product={$row['product_id']}\" class=\"btn btn-primary\">Detail</a>";
                                echo "</div></div></div></div>";
                            }
                        }
                        } ?>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
</body>
</html>