<?php
    session_start();
    $id = $_SESSION['id'];
    if(isset($_POST['submit'])){ 
       include('connect.php');
        //  $id=$_GET['infoid'];
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $code = $_POST['code'];
        $image = $_POST['image'];
        $phone = $_POST['phone'];
        $sql = "INSERT INTO `info`(`fullName`, `email`, `Code`, `image`,`phoneNumber`, `id_user`) VALUES ('$fullName','$email','$code','$image', '$phone',$id)";
        $sql1 = "UPDATE `users` SET `status` = 1 WHERE `id` = $id";
        $result = mysqli_query($conn,$sql);
        $result1 = mysqli_query($conn,$sql1);
         if($result && $result1){
             header('location:login.php');
         } else {
            //  die(mysqli_connect_error($conn));
            echo "loi";
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
    <title>Create Information</title>
</head>
<body>
    <section class="h-100 h-auto" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Your Info</h3>
            <form class="px-md-2" method="post">
              <div class="form-outline mb-4">
                <label class="form-label" for="txtFullName">FullName :</label>
                <input type="text" id="txtFullName" class="form-control" name="fullName" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtEmail">Email :</label>
                <input type="email" id="txtEmail" class="form-control" name="email">
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtCode">Code :</label>
                <input type="text" id="txtCode" class="form-control" name="code">
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtImage">Image</label>
                <input type="file" class="form-control" name="image">
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtPhone">Phone : </label>
                <input type="text" id="txtPhone" class="form-control" name="phone">
              </div><br>  
              <button class="btn btn-primary" name="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>