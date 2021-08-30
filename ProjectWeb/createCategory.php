<?php
session_start();
 include ('connect.php');
 if(isset($_POST['submit'])){
     $categoryName =$_POST['categoryName'];
     if(empty($categoryName)){
        header('location:createCategory.php?error=Category Name is required!');
      } else {
        $sql = "SELECT * FROM `category` WHERE categoryName = '$categoryName'";
        $result = mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)>0){
         header('location:createCategory.php?error=Category Name already exists!');
       } else {
            $sql = "INSERT INTO `category`(`categoryName`) VALUES ('$categoryName') ";
            if(mysqli_query($conn,$sql)){
               $_SESSION['status'] = "Created category successfully!";
               header('location:category.php');
             } else {
               echo "loi";
             }
       }
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
    <title>Tạo danh mục mới</title>
</head>
<body>
<section class="h-100 h-auto" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/img3.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Danh mục mới</h3>
            <form class="px-md-2" method="post">
            <?php if(isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
              <?php } ?>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtCategoryName">Tên danh mục</label>
                <input type="text" id="txtCategoryName" class="form-control" name="categoryName" />
              </div>
              <button type="submit" class="btn btn-success btn-lg mb-1" name="submit">Xác nhận</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>