<?php
    session_start();
    include('connect.php');
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $time = $_POST['time'];
        $content = $_POST['content'];
        $image = $_POST['image'];
        $status = 0;
        $id = 1;
        $sql = "INSERT INTO `news`(`title`, `setTime`, `content`, `image`, `status`, `user_id`) VALUES ('$title','$time','$content','$image','$status','$id') ";
        $result = mysqli_query($conn,$sql);
        if($result){
          echo '<script language="javascript">';
          echo 'alert(" successfully!")';
          echo '</script>';
          header('location:post.php');
        }else{
            echo "error!";
        }
           
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
    <title>New Post</title>
</head>
<body>
<section class="h-100 h-auto" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/img3.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Post</h3>
            <form class="px-md-2" method="post">
              <div class="form-outline mb-4">
                <label class="form-label" for="txtTitle">Title</label>
                <textarea rows="3" type="text" id="txtTitle" class="form-control" name="title"></textarea>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtTime">Time</label>
                <input type="date" id="txtTime" class="form-control" name="time"/>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtContent">Content</label>
                <textarea rows="6" type="text" id="txtContent" class="form-control" name="content"></textarea>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtImage">Image</label>
                <input type="file" id="txtImage" class="form-control" name="image"/>
              </div>
              <button type="submit" class="btn btn-success btn-lg mb-1" name="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>