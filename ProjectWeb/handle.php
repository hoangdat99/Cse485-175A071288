<?php 
    session_start();
    include('connect.php');
    $id_category = $_GET['postid'];
    $categoryName = $_SESSION['categoryName'];
?> 
<div class="col-md-8 mainNewsLeft">
                <h5 class="titleMainNews"><?php echo $categoryName; ?></h5>
                <div class="hrNews">
                    <hr class="hrNews1">
                    <hr class="hrNews2">
                </div>
                <?php 
                    $item_page = !empty($_GET['per_page'])?$_GET['per_page']:3;
                    $current_page = !empty($_GET['page'])?$_GET['page']:1;
                    $offset = ($current_page -1) * $item_page;
                    $sql = "SELECT * FROM `news` WHERE status =1 AND news.id_category = $id_category ORDER BY `id` DESC LIMIT ".$item_page." OFFSET ".$offset."";
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