<?php 
    // session_start();
    include('connect.php');
    $id_category = $_GET['postid'];
?> 
<div class="col-md-8 mainNewsLeft">
                <h5 class="titleMainNews">Tin tức</h5>
                <div class="hrNews">
                    <hr class="hrNews1">
                    <hr class="hrNews2">
                </div>
                <?php 
                    
                    $sql = "SELECT * FROM `news` WHERE status =1 ORDER BY `id` DESC LIMIT ".$item_page." OFFSET ".$offset."";
                    $totalRecord = mysqli_query($conn, "SELECT * FROM `news` WHERE news.id_category = $id_category");
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