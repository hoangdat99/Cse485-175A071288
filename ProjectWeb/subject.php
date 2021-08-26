
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
    <?php 
        include('./header/header.php');
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <button class="addAccount">
                    <a href="createSubject.php" class="text-decoration-none">Thêm Môn</a>
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
        <th scope="col">Name Subject</th>
        </tr>
    </thead>
    <tbody>
        <?php       
            include('connect.php');
            $sql = "SELECT * FROM `subjects`";
            $result = mysqli_query($conn,$sql);
            if($result){
               while( $row = mysqli_fetch_assoc($result)){
                   $id = $row['id'];
                   $name = $row['nameSubject'];
                   echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>
                        <button class="btn btn-primary"><a href="updateSubject.php ? updateid='.$id.'" class="text-light">Edit</a></button>
                        <button class="btn btn-danger"><a href="deleteSubject.php ? deleteid='.$id.' " class="text-light">Delete</a></button>
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