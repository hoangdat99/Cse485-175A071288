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
    <title>Information</title>
</head>
<body>
  <?php 
        include('./header/header.php');
        include('connect.php');
        $id=$_GET['infoid'];
        $sql= "SELECT * FROM `info` Where id_user='$id'" ;
        $result = mysqli_query($conn,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $fullName = $row['fullName'];
                $email = $row['email'];
                $code = $row['Code'];
                $image = $row['image'];
                $phone = $row['phoneNumber'];
              echo '
 
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Your Info</h3>
            <form class="px-md-2" method="post">
              <div class="form-outline mb-4">
                <label class="form-label" for="txtFullName">FullName :</label>
                <label>'.$fullName.'</label>             
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtEmail">Email :</label>
                <label>'.$email.'</label>  
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtCode">Code :</label>
                <label>'.$code.'</label>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtImage">Image</label>
                <img src="./images/'.$image.'" alt="" style="width:200px;height:190px">
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtPhone">Phone : </label>
                <label>'.$phone.'</label>
              </div><br>
              <button class="btn btn-primary"><a href="updateInfo.php ? infoid='.$id.' " class="text-light">Edit</a></button>;                        
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>';?>
</body>
 <?php  }} else echo  "<label> No have Information of users! </label>";
  ?>
</html>