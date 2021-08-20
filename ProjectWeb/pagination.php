<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/5f58258f46.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
<?php
    for($num = 1; $num <= $totalPage; $num++){ ?>
    <?php if($num != $current_page) { ?> 
           <a class="page-item" href="?per_page=<?=$item_page?>&page=<?=$num?>"><?php echo $num?></a>
    <?php } else {?>      
         <strong class="current-page page-item"><?= $num?></strong>

        <?php }?>
<?php }?>
</body>
</html>
