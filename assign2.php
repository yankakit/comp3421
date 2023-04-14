<div class="content">
        <div class="subcontent">
            <a class="left"><div class="arrow-left"></div></a>
            <div class="img-bg">
                <img class="main" style="display: flex;" src="<?php echo $row1['image']?>">
                <img class="main" style="display: none;" src="<?php echo str_replace(".jpg","a.jpg",$row1['image']);?>">
                <div class="des">
                </div>
            </div>
            <a class="right"><div class="arrow-right"></div></a>
        </div>  
        <div class="min-pic">
            <img class="smain" style="border: 7px solid white;" src="<?php echo $row1['image']?>">
            <img class="smain" src="<?php echo str_replace(".jpg","a.jpg",$row1['image']);?>">
        </div>
</div>
