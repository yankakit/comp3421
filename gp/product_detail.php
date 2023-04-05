<?php session_start();
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
<div class="cart-menu">
        <ul>
            <li>Home</li>
            <li>Home</li>
            <li>Home</li>
        </ul>
    </div>
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
            <form class="sort">
            <label for="sort">Sort By :</label>
                <select name="sort" id="sort">
                <option value="time">Newest</option>
                <option value="rating">Highest Rated</option>
                <option value="LTH">Price:Low-High</option>
                <option value="HTL">Price:High-Low</option>
                </select>
            </form>
        </div>
        <div class="product_cat">
            <div class="container-fluid products">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product placeholder">
                           
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