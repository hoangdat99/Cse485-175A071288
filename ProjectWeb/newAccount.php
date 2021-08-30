<?php
session_start();
 include ('connect.php');
 if(isset($_POST['submit'])){
     $userName =$_POST['useName'] ;
     $passWord = $_POST['passWord'];
     $role =$_POST['role'] ;
     $status = 0;
     $hash_passWord = password_hash($passWord, PASSWORD_DEFAULT);
    //  var_dump($hash_passWord);
     if(empty($userName)){
       header('location:newAccount.php?error=User Name is required!');
     }  else if(empty($passWord)){
         header('location:newAccount.php?error=Password is required!');
     } else {
       $sql = "SELECT * FROM `users` WHERE useName = '$userName'";
       $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
        header('location:newAccount.php?error=User Name already exists!');
      } else {
           $sql = "INSERT INTO `users`(`useName`, `passWord`, `role`, `status`) VALUES ('$userName','$hash_passWord','$role',$status) ";
           if(mysqli_query($conn,$sql)){
              $_SESSION['status'] = "Created account successfully!";
              header('location:account.php');
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
    <title>Tạo tài khoản mới</title>
</head>
<body>
<section class="h-100 h-auto" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/img3.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Thông tin tài khoản</h3>
            <form class="px-md-2" method="post">
            <?php if(isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
              <?php } ?>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtUserName">Tên đăng nhập</label>
                <input type="text" id="txtUserName" class="form-control" name="useName" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtPassWord">Mật khẩu</label>
                <input type="text" id="txtPassWord" class="form-control" name="passWord"/>
              </div>
              <div class="mb-4">
                <select class="select" name="role">
                  <option value="none" disabled>Quyền</option>
                  <option value="admin">Admin</option>
                  <option value="teacher">Giảng viên</option>
                  <option value="student">Học sinh</option>
                </select>
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