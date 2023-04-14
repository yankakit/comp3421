<?php 
session_start();
require 'PHPutility/config.php'

?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/common.css">
<?php require 'PHPutility/linkcss.php'?>
</head>
<body>
      <?php require 'PHPutility/nav.php'; ?>
      <?php require 'PHPutility/announcement.php'; ?>
      <?php require 'PHPutility/offcanvas.php';
      if(isset($_GET['action']) && $_GET['action']==1){                                                                                                                                                                                                                          ;
        echo "<div class=\"alert alert-success alert-dismissible fade show mx-auto\" style=\"width:40%;margin-top:20px; text-align:center;\" role=\"alert\">
            <strong>Paid successfully!</strong>
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>";
      }
      ?>
      
      <div class="content">
        <div class="subcontent">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="image/summerp.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="image/mmc.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="image/bandg.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev bcl" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next bcr" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
          <div class="gallery mx-auto">
            <div class="container">
                <div class="row">
                  <div class="col-sm-3 gallery_item">
                    <div class="gallery_detail">
                      <p>Best shop for women dddddddddddddddddd</p>
                    </div>
                      <img src="image/m1.jpg" >
                      <div class="overlay"></div>
                      <div class="gallery_button">
                        <button class="btn btn-info" type="button">Shop</button>
                      </div>
                  </div> 
                  <div class="col-sm-9 gallery_item">
                    <div class="gallery_detail">
                      <p>Best shop for women dddddddddddddddddd</p>
                    </div>
                    <img src="image/bandg.jpg" >
                    <div class="overlay"></div>
                      <div class="gallery_button">
                        <button class="btn btn-info" type="button">Shop</button>
                      </div>
                  </div> 
                </div>
                <div class="row">
                  <div class="col-sm-6 gallery_item">
                    <div class="gallery_detail">
                      <p>Best shop for women dddddddddddddddddd</p>
                    </div>
                      <img src="image/mmc.jpg" >
                      <div class="overlay"></div>
                    <div class="gallery_button">
                      <button class="btn btn-info" type="button">Shop</button>
                    </div>
                  </div> 
                  <div class="col-sm-6 gallery_item">
                    <div class="gallery_detail">
                      <p>Best shop for women dddddddddddddddddd</p>
                    </div>
                    <img src="image/summerp.jpg" >
                    <div class="overlay"></div>
                    <div class="gallery_button">
                      <button class="btn btn-info" type="button">Shop</button>
                    </div>
                  </div> 
                </div>
            </div>
        </div>
        <div class="show_items">
              <div class="container-fluid">
                <h4 class="mt-5">Top Seller</h4>
                <div class="scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-2">
                  <?php 
                    $sql="SELECT * FROM product WHERE product_id IN (SELECT product_id FROM cat_product WHERE category_id = (SELECT category_id FROM category WHERE category_name='TOPSELL'))";
                    $result=$db->query($sql);
                    while($row=$result->fetch(PDO::FETCH_ASSOC)){
                      echo "<div class=\" col-12 col-sm-6 col-xl-2\">
                              <div class=\"product-card-item card card-block card-1\">
                                  <img class=\"card-img-top shoppingItem\" src=\"{$row["image"]}\" alt=\"Card image cap\">
                                  <div class=\"card-body product-body\">
                                    <h5 class=\"card-title\">{$row["product_name"]}</h5>
                                    <p class=\"card-text\">{$row["description"]}</p>
                                    <p class=\"card-text\">Price:{$row["price"]}</p>
                                    <a href=\"product_info.php?product={$row["product_id"]}\" class=\"btn btn-primary\">Detail</a>
                                  </div>
                              </div>
                            </div>";
                    }
                    ?>
                

                </div>
            </div>
            <div class="container-fluid">
              <h4 class="mt-5">Specials For You</h4>
              <div class="scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-12">
                <?php 
                    $sql="SELECT * FROM product WHERE product_id IN (SELECT product_id FROM cat_product WHERE category_id = (SELECT category_id FROM category WHERE category_name='SPECIAL'))";
                    $result=$db->query($sql);
                    while($row=$result->fetch(PDO::FETCH_ASSOC)){
                      echo "<div class=\"col-12 col-sm-6 col-xl-2\">
                              <div class=\"card card-block card-1\">
                                  <img class=\"card-img-top shoppingItem\" src=\"{$row["image"]}\" alt=\"Card image cap\">
                                  <div class=\"card-body product-body\">
                                    <h5 class=\"card-title\">{$row["product_name"]}</h5>
                                    <p class=\"card-text\">{$row["description"]}</p>
                                    <p class=\"card-text\">Price:{$row["price"]}</p>
                                    <a href=\"#\" class=\"btn btn-primary\">Detail</a>
                                  </div>
                              </div>
                            </div>";
                    }
                ?>
              </div>
          </div>
        </div>
        </div>
      </div>
      
      <br>
</body>
</html>