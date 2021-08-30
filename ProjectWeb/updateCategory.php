<?php 
    include('connect.php');
    $id=$_GET['updateid'];
    $sql="SELECT * FROM `category` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $categoryName = $row['categoryName'];
    if(isset($_POST['submit'])){
      $category = $_POST['categoryName'];
      $sql ="UPDATE `category` SET categoryName='$category' WHERE id =$id";
       $result = mysqli_query($conn,$sql);
       if($result){
            $_SESSION['status'] = "Created category successfully!";
           header('location:category.php');
       } else {
         echo ('loi');
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
    <title>Cập nhật danh mục</title>
</head>
<body>
<section class="h-auto h-auto" style="background-color: #8fc4b7;">
  <div class="container py-5 h-200">
    <div class="row d-flex justify-content-center align-items-center h-200">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Cập nhật danh mục</h3>
            <form class="px-md-2" method="post" >
              <div class="form-outline mb-4">
              <label class="form-label" for="txtCategoryName">Tên danh mục</label>
              <?php
                echo  "<input type=\"text\" id=\"txtCategoryName\" class=\"form-control\" name=\"categoryName\" value=\"$categoryName\">";
              ?>
               <button class="btn btn-primary" name="submit">Xác nhận</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>