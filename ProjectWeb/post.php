<?php   
    session_start();
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
    <title>Posts</title>
</head>
<body>  
    <div class="container-fluid">
        <div class="row posts" style="margin-bottom: 15px; margin-top:15px">
            <div class="col-md-6">
                <button class="btn btn-primary">
                    <a href="createPost.php" class="text-light">Tạo bài viết mới </a>
                </button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-primary">
                    <a href="admin.php" class="text-light">Về trang quản lý</a>
                </button>
            </div>
        </div>
<div class="table-wrapper-scroll-y my-custom-scrollbar" id="dtVerticalScrollExample">
 <table class="table table-bordered table-striped mb-0">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Thời gian</th>
      <th scope="col">Nội dung</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Danh mục</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Tác vụ</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql = "SELECT news.*,category.categoryName FROM `news` INNER JOIN `category` WHERE news.id_category = category.id";
        $result = mysqli_query($conn, $sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $title = $row['title'];
                $time = $row['setTime'];
                $content = $row['content'];
                $image = $row['image'];
                $status = $row['status'];
                $category = $row['categoryName'];
                echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$title.'</td>
                        <td>'.$time.'</td>
                        <td>'.$content.'</td>
                        <td><img src="./images/'.$image.'" style="width:150px; height:80px"/></td>
                        <td>'.$category.'</td>
                        <td>
                            <button class="btn btn-primary"><a href="status.php ? statusid='.$id.' " class="text-light">'.$status.'</button>
                            <button class="btn btn-primary"><a href="drop.php ? statusid='.$id.' " class="text-light">Gỡ</button>
                            </td>
                        <td>
                            <button class="btn btn-primary"><a href="updatePost.php ? updateid='.$id.'" class="text-light">Sửa</a></button>
                            <button class="btn btn-danger"><a href="deletePost.php ? deleteid='.$id.' " class="text-light">Xóa</a></button>
                        </td>
                </tr>';
            }
        }   
    ?>
  </tbody>
 </table>
</div>
    </div>
    <?php include('./footer/footer.php') ?>
    <script src="javascript/javascript.js"></script>
</body>
</html>