<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="index.php">SportLight</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Men
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="product_detail.php?sex=MAN&category=all">All</a>
                  <a class="dropdown-item" href="product_detail.php?sex=MAN&category=BOTTOMS">bottoms</a>
                  <a class="dropdown-item" href="product_detail.php?sex=MAN&category=OUTERWEAR">outerwear</a>
                  <a class="dropdown-item" href="product_detail.php?sex=MAN&category=SHOES">shoes</a>
                  <a class="dropdown-item" href="product_detail.php?sex=MAN&category=TOPS">tops</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Women
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="product_detail.php?sex=WOMAN&category=all">All</a>
                  <a class="dropdown-item" href="product_detail.php?sex=WOMAN&category=BOTTOMS">bottoms</a>
                  <a class="dropdown-item" href="product_detail.php?sex=WOMAN&category=OUTERWEAR">outerwear</a>
                  <a class="dropdown-item" href="product_detail.php?sex=WOMAN&category=SHOES">shoes</a>
                  <a class="dropdown-item" href="product_detail.php?sex=WOMAN&category=TOPS">tops</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Kids
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="product_detail.php?sex=KID&category=all">All</a>
                  <a class="dropdown-item" href="product_detail.php?sex=BOYS&category=set">SETS</a>
                  <a class="dropdown-item" href="product_detail.php?sex=GIRLS&category=dress">DRESS</a>
                </div>
            </li>
            <li class="nav-item ml-lg-auto nav_end">
              <?php if(!isset($_SESSION["username"])){?>
              <div class="login">
                  <a class="nav-link" href="login.php">Login</a>
              </div>
              <?php }else{ ?>
              <div class="user">
              <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown"><i class='fas fa-user-alt' style='font-size:22px;color:white'></i>
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                  <li><a class="dropdown-item" href="PHPutility/logout.php">Logout</a></li>
                </ul>
              </div>
              </div>
              <a class="cart" id="cart-btn" href="#">
                  <i class="fa fa-shopping-cart" style="font-size:22px;color:white;"></i>
              </a>
              <?php }; ?>
            </li>
          </ul>
        </div>
      </nav>
