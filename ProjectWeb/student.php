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
            <div class="col-md-6">
                <button class="btn btn-primary">
                    <a href="change.php" class="text-light">Thay Đổi mật khẩu</a>
                </button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-danger">
                    <a href="logout.php" class="text-light">LogOut</a>
                </button>
            </div>
        </div>
    </div>
  
   <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name Subject</th>
        <th scope="col">Score</th>
        </tr>
    </thead>
    <tbody>
        <?php   
            include('connect.php');    
            $id = $_SESSION['id'];     
            $sql = "SELECT * FROM scores INNER JOIN subjects WHERE scores.id_subject = subjects.id AND scores.id_user = $id";
            $result = mysqli_query($conn,$sql);
            if($result){
               while( $row = mysqli_fetch_assoc($result)){
                   $id = $row['id'];
                   $name = $row['nameSubject'];
                   $score = $row['score'];
                   echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$score.'</td>
                   </tr>';
               }
            }         
        ?>    
    </tbody>
</table>
</body>
</html>