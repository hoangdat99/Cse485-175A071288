<?php 
    include('connect.php');
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
    <?php include('./header/header.php')?>
<div class="container-fluid ctn-mainNews">
        <div class="row paths">
            <div class="col-md-12 path">
                <h5>Trang chủ / </h5>
                <p class="text-warning"> Tin tức - Thông báo</p>
            </div>
        </div>
        <div class="row mainNews">
            <div class="col-md-8 mainNewsLeft">
                <h5 class="titleMainNews">Tin tức</h5>
                <div class="hrNews">
                    <hr class="hrNews1">
                    <hr class="hrNews2">
                </div>
                <?php 
                    $item_page = !empty($_GET['per_page'])?$_GET['per_page']:3;
                    $current_page = !empty($_GET['page'])?$_GET['page']:1;
                    $offset = ($current_page -1) * $item_page;
                    $sql = "SELECT * FROM `news` WHERE status =1 ORDER BY `id` DESC LIMIT ".$item_page." OFFSET ".$offset."";
                    $totalRecord = mysqli_query($conn, "SELECT * FROM `news`");
                    $totalRecord = $totalRecord->num_rows;
                    $totalPage = ceil($totalRecord/$item_page);
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
                <?php include('pagination.php') ?>    
            </div>
            <div class="col-md-3 mainNewsRight">
            <h5 class="titleMainNewsRight">Danh Mục</h5>
                <div class="hrNewsRight">
                    <hr class="hrNews1">
                    <hr class="hrNews2">
                </div>
                <ul class="ulMainNews">
                    <li class="liMainNews"><i class="fas fa-hand-point-right"></i><a href="">Tin tuyển sinh</a></li>
                    <li class="liMainNews"><i class="fas fa-hand-point-right"></i><a href="">Tuyển sinh đại học chính quy</a></li>
                    <li class="liMainNews"><i class="fas fa-hand-point-right"></i><a href="">Tuyển sinh đại học liên thông</a></li>
                    <li class="liMainNews"><i class="fas fa-hand-point-right"></i><a href="">Tuyển sinh sau đại học</a></li>
                    <li class="liMainNews"><i class="fas fa-hand-point-right"></i><a href="">Chương trình đào tạo</a></li>
                    <li class="liMainNews"><i class="fas fa-hand-point-right"></i><a href="">Mẫu phiếu đăng ký xét tuyển</a></li>
                    <li class="liMainNews"><i class="fas fa-hand-point-right"></i><a href="">Tại sao chọn Phenikaa</a></li>
                    <li class="liMainNews"><i class="fas fa-hand-point-right"></i><a href="">Thông báo tuyển sinh</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <?php include('./footer/footer.php') ?>
</body>
</html>