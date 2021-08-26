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
    <title>Posts</title>
</head>
<body>  
    <?php  include('./header/header.php');?>   
    <div class="container-fluid">
        <div class="row posts" style="margin: bottom 15px;">
            <div class="col-md-6">
                <button class="btn btn-primary">
                    <a href="createPost.php" class="text-light"> Thêm bài viết</a>
                </button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-primary">
                    <a href="admin.php" class="text-light"> Home Admin</a>
                </button>
            </div>
        </div>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Time</th>
      <th scope="col">content</th>
      <th scope="col">image</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql = "SELECT * FROM `news`";
        $result = mysqli_query($conn, $sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $title = $row['title'];
                $time = $row['setTime'];
                $content = $row['content'];
                $image = $row['image'];
                $status = $row['status'];
                echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$title.'</td>
                        <td>'.$time.'</td>
                        <td>'.$content.'</td>
                        <td><img src="./images/'.$image.'" style="width:150px; height:80px"/></td>
                        <td>
                            <button class="btn btn-primary"><a href="status.php ? statusid='.$id.' " class="text-light">'.$status.'</button>
                            <button class="btn btn-primary"><a href="drop.php ? statusid='.$id.' " class="text-light">Drop</button>
                            </td>
                        <td>
                            <button class="btn btn-primary"><a href="updatePost.php ? updateid='.$id.'" class="text-light">Edit</a></button>
                            <button class="btn btn-danger"><a href="deletePost.php ? deleteid='.$id.' " class="text-light">Delete</a></button>
                        </td>
                </tr>';
            }
        }   
    ?>
  </tbody>
</table>
    </div>
    <?php include('./footer/footer.php') ?>
</body>
</html>