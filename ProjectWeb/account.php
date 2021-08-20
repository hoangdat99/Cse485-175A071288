<?php 
    include('connect.php');
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
    <title>Account</title>
</head>
<body>
    <?php include('./header/header.php') ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <button class="addAccount">
                    <a href="newAccount.php" class="text-decoration-none">Thêm Tài Khoản</a>
                </button>
            </div>
            <div class="col-md-6">
                <button class="addAccount">
                    <a href="admin.php" class="text-decoration-none">Home Admin</a>
                </button>
            </div>
        </div>
        
<table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">UseName</th>
        <th scope="col">PassWord</th>
        <th scope ="col">Active</th>
        <th scope="col">Role</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $sql = "SELECT * FROM `users`";
            $result = mysqli_query($conn,$sql);
            if($result){
               while( $row = mysqli_fetch_assoc($result)){
                   $id = $row['id'];
                   $useName = $row['useName'];
                   $passWord = $row['passWord'];
                   $status = $row['status'];
                   $role = $row['role'];
                   echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$useName.'</td>
                        <td>'.$passWord.'</td>
                        <td>'.$status.'</td>
                        <td>'.$role.'</td>
                        <td>
                        <button class="btn btn-primary"><a href="updateAccount.php ? updateid='.$id.'" class="text-light">Edit</a></button>
                        <button class="btn btn-danger"><a href="deleteAccount.php ? deleteid='.$id.' " class="text-light">Delete</a></button>
                        <button class="btn btn-primary"><a href="showInfo.php ? infoid='.$id.' " class="text-light">ShowInfo</a></button>                  
                    </td>
                   </tr>';
               }
            }         
        ?>    
    </tbody>
</table>
    </div>
</body>
</html>