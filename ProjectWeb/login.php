<?php 
  session_start();
  include('connect.php');
  if(isset($_REQUEST['submit'])){
    $userName = $_REQUEST['userName'];
    $passWord = $_REQUEST['passWord'];
    $role = $_REQUEST['role'];
    $username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
    
    if(empty($userName)){
      header('location:login.php?error = User Name is required!');
    } else if(empty($passWord)){
      header('location:login.php?error = PassWord is required!');
    } else {
            $sql = "SELECT * FROM users WHERE useName = '$userName'";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) === 1){
              $row = mysqli_fetch_assoc($result);  
              $id = $row['id'];   
              if(password_verify($passWord , $row['passWord']) && $row['role']=='admin' && $role =='admin' && $row['status'] == 1){
                $_SESSION['userName'] = $userName;
                header('Location:admin.php');
              }else if(password_verify($passWord , $row['passWord']) && $row['role']=='teacher' && $role=='teacher' && $row['status'] == 1){
                $_SESSION['userName'] = $userName;
                header('Location:teacher.php');
              }
              else if(password_verify($passWord , $row['passWord']) && $row['role']=='student' && $role=='student' && $row['status'] == 1){
                $_SESSION['userName'] = $userName;
                $_SESSION['id']= $id;
                header('Location:student.php');
                } else if(password_verify($passWord , $row['passWord'])&& $row['status'] == 0){
                  $_SESSION['id'] = $id;
                  header('Location:createInfo.php');
                }
            }
        }

    }
?>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="./styleLogin/style.css"> 
 <section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Đăng nhập</h2>
		    <form class="login-form" action="login.php" method="POST">
              <?php if(isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
              <?php } ?>
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase" >Tài khoản</label>
            <input type="text" class="form-control"  name="userName">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase" >Mật khẩu</label>
            <input type="password" class="form-control"name="passWord">
          </div>
          <div class="mb-1">
            <label for="">Quyền của bạn:</label>
          </div>
          <div class="mb-4">
                <select class="select" name="role">
                  <option value="none" disabled>Quyền</option>
                  <option value="admin">Admin</option>
                  <option value="teacher">Giảng viên</option>
                  <option value="student">Học sinh</option>
                </select>
              </div>
            <div class="form-check">
            <button type="submit" name="submit" class="btn btn-login float-right">Đăng nhập</button>
          </div>
          
        </form>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
            </div>			    
		</div>
	</div>
</div>
</section>

