<?php
    session_start();
    include('connect.php');
    if(isset($_POST['submit'])){
        $userName=$_POST['userName'];
        $pwn=$_POST['pwn'];
        $npw=$_POST['npw'];
        $cpw=$_POST['cpw'];
        if(empty($userName)){
            header('location:change.php?error = UserName is required!');
        }   else if(empty($pwn)){
             header('location:change.php?error = PassWord Now is required!');
        }   else if(empty($npw)){
             header('location:change.php?error = New PassWord is required!');
        }   else if(empty($cpw)){
            header('location:change.php?error = Confirm PassWord  is required!');
       }    else{
            $sql="SELECT * FROM `users` WHERE useName='$userName'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)===1){
                $row = mysqli_fetch_assoc($result);
                if(password_verify($pwn, $row['passWord']) && $npw === $cpw ){
                     $hash_pass = password_hash($npw, PASSWORD_DEFAULT);
                     $sql ="UPDATE `users` SET passWord ='$hash_pass' WHERE useName='$userName'";
                     echo $sql,
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        header('location:login.php');
                    }             
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
    <title>Create Information</title>
</head>
<body>
    <section class="h-100 h-auto" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Change Your PassWord</h3>
            <form class="px-md-2" method="post">
              <div class="form-outline mb-4">
                <label class="form-label" for="txtUserName">UserName :</label>
                <input type="text" id="txtUserName" class="form-control" name="userName" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtPwn">PassWord Now :</label>
                <input type="password" id="txtPwn" class="form-control" name="pwn">
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtNpw">New PassWord :</label>
                <input type="password" id="txtNpw" class="form-control" name="npw">
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="txtCpw">Confirm PassWord : </label>
                <input type="password" id="txtCpw" class="form-control" name="cpw">
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