<?php
 include ('connect.php');
 $id=$_GET['updateid'];
 $sql="SELECT * FROM `subjects` WHERE id=$id";
 $result=mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);
 $nameSubject = $row['nameSubject'];
 if(isset($_POST['submit'])){
     $nameSubject =$_POST['nameSubject'] ;
     $sql ="UPDATE `subjects` SET nameSubject='$nameSubject' WHERE id = '$id'";
      $result = mysqli_query($conn,$sql);
      if($result){
        echo '<script language="javascript">';
        echo 'alert(" successfully!")';
        echo '</script>';
        header('location:subject.php');
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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Subject Info</h3>
            <form class="px-md-2" method="post">
              <div class="form-outline mb-4">
                <label class="form-label" for="txtNameSubject">Subject</label>
                <?php
                   echo "<input type=\"text\" id=\"txtNameSubject\" class=\"form-control\" name=\"nameSubject\" value=\"$nameSubject\">";
                ?> 
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