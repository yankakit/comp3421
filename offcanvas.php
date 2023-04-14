
<div class="dark-overlay"></div>
<div class="cart-menu bg-light">
    <a href="#" id='close'><i class="fa fa-close" style="font-size:24px"></i></a>
    <div class="title">
        <h3>Shopping Cart</h3>
    </div>
    <ul class="list-group">
    <?php if(isset($_SESSION['product'])){
        $total=0;
        $i=0;
        foreach($_SESSION['product'] as $value){
            $svalue=preg_split("/[a-z]+/i", $value);
            $size=preg_replace("/[0-9]+/",'',$value);
            $sql="SELECT * FROM product WHERE product_id=$svalue[0]";
            $result=$db->query($sql);
            $row=$result->fetch(PDO::FETCH_ASSOC);
            echo "<li class=\"list-group-item d-flex bg-light justify-content-between align-items-center\">
                <div class=\"productItemInfo\">
                    <h5>{$row['product_name']}</h5>
                    <p>size: $size</p>
                    <p>quantity: $svalue[1]</p>
                    <p>Price:{$row['price']}</p>
                    <a id=\"$i\" onclick=\"request(this.id)\" href=\"#\">Remove</a>
                </div>
                <img src=\"${row['image']}\" width=\"60px\">
            </li>";
            $i++;
            $total+=intval($row['price'])*intval($svalue[1]);
        }
        $_SESSION['amount']=$total;
    }
    if(!isset($total))$total=0;
      echo "</ul>";
echo    "<div class=\"total\">
            <h3>Total: $$total</h3>
        </div>
        <div class=\"processBtn\">
            <a href=\"Payment_form.php\" class=\" btn bg-dark\" type=\"submit\">Pay</a>
        </div>
</div>";
?>
  