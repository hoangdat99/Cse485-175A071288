<?php 
    include('connect.php');
    include('./header/header.php');
    if(isset($_GET['postid'])){
        $id_category = $_GET['postid']; 
    }   else {
        $id_category =1;
    }
?>
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
    <title>Tin tức - Thông báo</title>
</head>
<body>
<div class="container-fluid ctn-mainNews">
        <div class="row paths">
            <div class="col-md-12 path">
                <h5>Trang chủ / </h5>
                <p class="text-warning">Tin Tức</p>
            </div>
        </div>
        <div class="row mainNews">
        <div class="col-md-8 mainNewsLeft">
                <h5 class="titleMainNews">Tin Tức</h5>
                <div class="hrNews">
                    <hr class="hrNews1">
                    <hr class="hrNews2">
                </div>
                <?php
                          
                    $sql = "SELECT * FROM `news` WHERE status =1 AND news.id_category = $id_category ORDER BY `id` DESC LIMIT 6";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        while ($row = mysqli_fetch_assoc($result)){
                            $title = $row['title'];
                            $time = $row['setTime'];
                            $content = $row['content'];
                            $image = $row['image'];
                            echo '
                            <div class="row contentMainNewsLeft">
                                <div class="col-sm-6 imageLeftMainNews" >
                                    <img src="./images/'.$image.'" alt="" class="imageMainNews">
                                </div>
                                <div class="col-sm-6">
                                    <div class="time-title">
                                    <p class="p1">'.$time.'</p>
                                    <h6 class="p2">'.$title.'</h6>  
                                    </div>
                                    <div class="content-MainNews">
                                        <p>'.$content.'</p>
                                    </div>
                                </div>
                            </div>';
                        }
                    }   
                ?>   
            </div> 
            <div class="col-md-3 mainNewsRight">
            <h5 class="titleMainNewsRight">Danh Mục</h5>
                <div class="hrNewsRight">
                    <hr class="hrNews1">
                    <hr class="hrNews2">
                </div>
                    <?php 
                            $sql = "SELECT * FROM `category`";
                            $result = mysqli_query($conn,$sql);
                            if($result){
                                while($row = mysqli_fetch_assoc($result)){
                                    $categoryName = $row['categoryName'];
                                    $id_category = $row['id'];
                                    $_SESSION['categoryName']= $categoryName;
                                    $_SESSION['id']= $id_category;
                                    echo'
                                        <ul class="ulMainNews">
                                            <li class="liMainNews"><i class="fas fa-hand-point-right"></i><a href="news.php ? postid='.$id_category.'">'.$categoryName.'</a></li>  
                                         </ul>
                                    ';
                                }
                            }
                    ?>
                
            </div>
        </div>
    </div>
</div>
    <?php include('./footer/footer.php') ?>
</body>
</html>