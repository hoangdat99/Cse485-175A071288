
<?php
    for($num = 1; $num <= $totalPage; $num++){ ?>
    <?php if($num != $current_page) { ?> 
           <a class="page-item" href="?per_page=<?=$item_page?>&page=<?=$num?>"><?php echo $num?></a>
    <?php } else {?>      
         <strong class="current-page page-item"><?= $num?></strong>

        <?php }?>
<?php }?>

