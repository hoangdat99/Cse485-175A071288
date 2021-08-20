<?php
 include ('connect.php');
 $id=$_GET['updateid'];
 $sql="SELECT * FROM `users` WHERE id=$id";
 $result=mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);
 $userName = $row['useName'];
 $passWord = $row['passWord'];
 $role = $row['role'];

 if(isset($_POST['submit'])){
     $userName =$_POST['useName'] ;
     $passWord = $_POST['passWord'];
     $role =$_POST['role'] ;
     $status = true;
     $sql ="UPDATE `users` SET id = '$id', useName='$userName',
        passWord = '$passWord', role = '$role' WHERE id =$id";
      $result = mysqli_query($conn,$sql);
      if($result){
        //   echo "Update account successfully!";
          header('location:account.php');
      } else {
        //   die(mysqli_connect_error($conn));
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
    <title>Create new account</title>
</head>
<body>
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/img3.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Account Info</h3>
            <form class="px-md-2" method="post">
              <div class="form-outline mb-4">
                <input type="text" id="txtUserName" class="form-control" name="useName" value=<?php echo $userName; ?>>
                <label class="form-label" for="txtUserName">UserName</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="txtPassWord" class="form-control" name="passWord" value=<?php echo $passWord;?>>
                <label class="form-label" for="txtPassWord">PassWord</label>
              </div>
              <div class="mb-4">
                <select class="select" name="role" value=<?php echo $role; ?>>
                  <option value="none" disabled>Role</option>
                  <option value="Admin">Admin</option>
                  <option value="Teacher">Teacher</option>
                  <option value="Student">Student</option>
                </select>
              </div>
              <button type="submit" class="btn btn-success btn-lg mb-1" name="submit">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>