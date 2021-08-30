<?php
    include('./header/header.php');
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
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="margin-top:15px; margin-bottom:15px"> 
            <div class="col-md-4">
                <button class="btn btn-primary">
                    <a href="createScore.php" class="text-light">Thêm mới điểm</a>
                </button>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary">
                    <a href="change.php" class="text-light">Thay Đổi mật khẩu</a>
                </button>
            </div>
            <div class="col-md-4">
                <button class="btn btn-danger">
                    <a href="logout.php" class="text-light">LogOut</a>
                </button>
            </div>
        </div>
    </div>
  
   <table class="table">
    <thead>
        <tr>
            <th scope ="col">ID</th>
            <th scope="col">Name Student</th>
            <th scope="col">Code</th>
            <th scope="col">Name Subject</th>
            <th scope="col">Score</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php   
            include('connect.php');        
            $sql = "SELECT scores.id, scores.score, subjects.nameSubject, info.fullName, info.Code FROM scores INNER JOIN subjects INNER JOIN info WHERE scores.id_subject = subjects.id AND scores.id_user = info.id_user";
            $result = mysqli_query($conn,$sql);
            if($result){
               while( $row = mysqli_fetch_assoc($result)){
                   $id = $row['id'];
                   $fullName= $row['fullName'];
                   $code=$row['Code'];
                   $name = $row['nameSubject'];
                   $score = $row['score'];
                   echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$fullName.'</td>
                        <td>'.$code.'</td>
                        <td>'.$name.'</td>
                        <td>'.$score.'</td>
                        <td>
                            <button class="btn btn-danger"><a href="deleteScore.php ? deleteid='.$id.' " class="text-light">Delete</a></button>
                        </td>
                   </tr>';
               }
            }         
        ?>    
    </tbody>
</table>
</body>
</html>