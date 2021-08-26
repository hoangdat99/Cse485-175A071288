<!DOCTYPE html>
<?php 
    include('connect.php');
    $id=$_GET['infoid'];
    $sql="SELECT * FROM `info` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $fullName = $row['fullName'];
    $email = $row['email'];
    $code = $row['Code'];
    $image = $row['image'];
    $phone = $row['phoneNumber'];
    if(isset($_POST['submit'])){
      $fullName = $row['fullName'];
      $email = $row['email'];
      $code = $row['Code'];
      $image = $row['image'];
      $phone = $row['phoneNumber'];
      $sql ="UPDATE `info` SET id = '$id', fullName='$fullName',
         email = '$email', Code = '$code', image ='$image', phoneNumber='$phone' WHERE id =$id";
       $result = mysqli_query($conn,$sql);
       if($result){
           echo "Update account successfully!";
           header('location:showInfo.php');
       } else {
         //   die(mysqli_connect_error($conn));
         echo ('loi');
       }
  }
?>
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
    <title>Information Your Account</title>
</head>
<body>
    <?php include('./header/header.php')?>
<section class="h-200 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-200">
    <div class="row d-flex justify-content-center align-items-center h-200">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Your Info</h3>
            <form class="px-md-2" method="post" >
              <div class="form-outline mb-4">
              <label class="form-label" for="txtFullName">FullName</label>
              <?php
                echo  "<input type=\"text\" id=\"txtFullName\" class=\"form-control\" name=\"fullName\" value=\"$fullName\">";
              ?>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtEmail">Email</label>
                <input type="email" id="txtEmail" class="form-control" name="email" value=<?php  echo json_encode($email); ?> >
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtCode">Code</label>
                <input type="text" id="txtCode" class="form-control" name="code" value=<?php  echo json_encode($code); ?>>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtImage">Image</label>
                <input type="file" id="txtImage" class="form-control" name="image">
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtPhone">Phone</label>
                <input type="text" id="txtPhone" class="form-control" name="phone" value=<?php  echo json_encode($phone); ?>>
              </div> 
               <button class="btn btn-primary" name="submit"><a href="account.php" class="text-light">Submit</a></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>