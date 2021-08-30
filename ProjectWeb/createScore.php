<?php
  session_start();
 include ('connect.php');
 if(isset($_POST['select'])){
     $sbn = $_POST['select'];
     echo $sbn;
 }
 if(isset($_POST['select1'])){
    $sbn1 = $_POST['select1'];
    echo $sbn1;
}
 if(isset($_POST['submit'])){
    $score = $_POST['score'];
    $sql = "INSERT INTO `scores`(`score`,`id_subject`,`id_user`) VALUES ('$score','$sbn','$sbn1')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:teacher.php');
    } else{
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
    <title>Create new Score</title>
</head>
<body>
<section class="h-100 h-auto" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/img3.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">New Score</h3>
            <form class="px-md-2" method="post">
            <div class="form-outline mb-4">
                <label for="">Tên sinh viên: </label>
                <select name="select1" id="select1" >
                    <option value="none">Choose Student</option>                 
                    <?php 
                        $sql = "SELECT * FROM users INNER JOIN info WHERE users.id = info.id_user AND users.role = 'student'";
                        $result = mysqli_query($conn,$sql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                                $id_user = $row['id_user'];
                                $name = $row['fullName'];
                                $code = $row['Code'];
                                echo '
                                    <option value='.$id_user.' >'.$name.' '.$code.'</option>';
                        }}
                    ?>
                </select>
              </div>
              <div class="form-outline mb-4">
                <label for="">Môn Học: </label>
                <select name="select" id="select" >
                    <option value="none">Choose Subject</option>                 
                    <?php 
                        $sql = "SELECT * FROM subjects ";
                        $result = mysqli_query($conn,$sql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['id'];
                                $nameSubject = $row['nameSubject'];              
                                echo '
                                    <option value='.$id.' >'.$nameSubject.'</option>';
                        }}
                    ?>
                </select>
              </div>
              <div class="form-outline mb-4">
                  <label for="">Điểm</label>
                  <input type="text" name="score">
              </div>
              <button type="submit" class="btn btn-success btn-lg mb-1" name="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>