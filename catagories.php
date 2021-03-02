<?php
include_once('core/get_catagories.php')
?>

<li class="drop-down"><a href="#">Products</a>
    <ul>
        <!-- Main cat -->
        <!-- <li><a href="#"> Example 1</a></li>
        <li><a href="#">Example 2</a></li> 
        
        -->

        <?php
            foreach ($categories as $cat) {
                    $sub_cat = $cat -> sub_cat
        ?>

        <?php
                if (sizeof($sub_cat)<=0)
                { ?>
                    <li><a href="<?php  echo ($cat->link); ?>" target="_blank"> <?php  echo ($cat->main_cat); ?> </a></li> 

                <?php 
                }
                else{
        ?>
        <li class="drop-down"><a href="#"><?php  echo ($cat->main_cat); ?></a>
            <ul>
                <?php
                    foreach ($sub_cat as $sub) {                  
                ?>
                     <li><a href="<?php  echo ($sub->link); ?>" target="_blank"> <?php  echo ($sub->name); ?> </a></li>
                  <?php
                    }
                  ?>

            </ul>
        </li>

        <?php
                }}
        ?>
    </ul>
</li>