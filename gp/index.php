<?php 
session_start();
require 'PHPutility/config.php';
require 'PHPutility/display_product.php';

//call print_all_product() from PHPutility/display_product.php, store the product's array to $product_list
$product_list=print_all_product();

//print all product
for($i=0;$i<count($product_list);$i++){
  echo $product_list[$i]['product_id'];
  echo $product_list[$i]['product_name'];
  /*
  echo $product_list[$i]['category'];
  echo $product_list[$i]['description'];
  echo $product_list[$i]['price'];
  echo $product_list[$i]['image'];
  echo $product_list[$i]['source'];
  echo $product_list[$i]['remain'];
  echo $product_list[$i]['size'];
*/
}
//test
echo $customerid;
echo $_SESSION["customer_id"];
echo $_SESSION["username"];
echo $_SESSION["email"];
echo $_SESSION["nickname"];

//insery product to cart


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
      <?php require 'PHPutility/offcanvas.php';?>
      
      <div class="content">
        <div class="subcontent mx-auto">
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
        <div class="container">
          <h4 class="mt-5">Top Seller</h4>
          <div class="scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-2">
          <h1><?php 
      
      for($i=0;$i<count($product_list);$i++){
       
        echo $product_list[$i]['product_name'];?>
        <form action="./PHPutility/add_to_cart.php" method="GET">
          <button type="submit" name="product_id" value="<?php  echo $product_list[$i]['product_id'] ?>">Add to cart</button>
        </form>
      <?php }?></h1>
            
            <div class="col-5">
              <div class="card card-block card-1"></div>
            </div>
            <div class="col-5">
              <div class="card card-block card-2"></div>
            </div>
            <div class="col-5">
              <div class="card card-block card-3"></div>
            </div>
            <div class="col-5">
              <div class="card card-block card-4"></div>
            </div>
            <div class="col-5">
              <div class="card card-block card-5"></div>
            </div>
            <div class="col-5">
              <div class="card card-block card-6"></div>
            </div>
            <div class="col-5">
              <div class="card card-block card-7"></div>
            </div>
            <div class="col-5"> 
              <div class="card card-block card-8"></div>
            </div>
            <div class="col-5">
              <div class="card card-block card-9"></div>
            </div>
            <div class="col-5">
              <div class="card card-block card-10"></div>
            </div>
          </div>
      </div>
      <div class="container">
        <h4 class="mt-5">Specials For You</h4>
        <div class="scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-2">
          
          <div class="col-5">
            <div class="card card-block card-1"></div>
          </div>
          <div class="col-5">
            <div class="card card-block card-2"></div>
          </div>
          <div class="col-5">
            <div class="card card-block card-3"></div>
          </div>
          <div class="col-5">
            <div class="card card-block card-4"></div>
          </div>
          <div class="col-5">
            <div class="card card-block card-5"></div>
          </div>
          <div class="col-5">
            <div class="card card-block card-6"></div>
          </div>
          <div class="col-5">
            <div class="card card-block card-7"></div>
          </div>
          <div class="col-5"> 
            <div class="card card-block card-8"></div>
          </div>
          <div class="col-5">
            <div class="card card-block card-9"></div>
          </div>
          <div class="col-5">
            <div class="card card-block card-10"></div>
          </div>
        </div>
    </div>
        </div>
      </div>
      
      <br>
</body>
</html>