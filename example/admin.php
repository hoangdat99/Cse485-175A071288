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
    <title>Admin</title>
</head>
<body>
    <?php include('./header/header.php') ?>
    <div class="container" style="margin-top:25px; margin-bottom:25px; width:auto">
        <div class="row">
            <div class="col-md-3">
                <button>
                    <a href="add.php">Thêm mới</a>
                </button>
            </div>
            <div class="col-md-4">
                <form action="" method="GET">
                    <label for="" class="form-label">Unit: </label>
                    <select class="select" name="unit" value="unit">
                        <option value="none" disable></option>
                        <?php 
                            session_start();
                            $sql = "SELECT * FROM `unit`";
                            $result = mysqli_query($conn,$sql);
                            if($result){
                                while( $row = mysqli_fetch_assoc($result)){
                                    $nameUnit = $row['name'];
                                    $idUnit = $row['id'];
                                    $_SESSION['nameUnit']=$nameUnit;
                                    $_SESSION['idUnit']=$idUnit;
                                    echo '
                                        <option value="'.$idUnit.'">'.$nameUnit.'</option>';
                        }}?>
                    </select>
                    <button type="submit" name="submit">Choose</button>
                </form>
            </div>
            <div class="col-md-3">
                <button>
                    <a href="logout.php">Logout</a>
                </button>
            </div>
        </div>
    </div>
<table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Position</th>
        <th scope="col">Unit</th>
        <th scope ="col">Work Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Work Address</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        if(isset($_REQUEST['submit'])){
            $unit = $_GET['unit'];
            if(empty($uint)){
                $sql = "SELECT * FROM `person` INNER JOIN `unit` WHERE person.id_unit = unit.id;";
                $result = mysqli_query($conn,$sql);
                if($result){
                   while( $row = mysqli_fetch_assoc($result)){
                       $id = $row['idPerson'];
                       $name = $row['fullName'];
                       $position = $row['position'];
                       $unit = $row['name'];
                       $workPhone = $row['workPhone'];
                       $email = $row['email'];
                       $phone = $row['phonePerson'];
                       $address = $row['address'];
                       echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$position.'</td>
                            <td>'.$unit.'</td>
                            <td>'.$workPhone.'</td>
                            <td>'.$email.'</td>
                            <td>'.$phone.'</td>
                            <td>'.$address.'</td>
                            <td>
                            <button class="btn btn-primary"><a href="update.php ? updateid='.$id.'" class="text-light">Edit</a></button>
                            <button class="btn btn-danger"><a href="deleteAccount.php  " class="text-light">Delete</a></button>
                        </td>
                       </tr>';
                   }
                }         
            } else{
                $nameUnit = $_SESSION['nameUnit'];
                $idUnit =  $_SESSION['idUnit'];
                $sql = "SELECT * FROM `person` INNER JOIN `unit` WHERE person.id_unit = unit.id AND unit.id=$idUnit";
                $result = mysqli_query($conn,$sql);
                if($result){
                   while( $row = mysqli_fetch_assoc($result)){
                       $id = $row['idPerson'];
                       $name = $row['fullName'];
                       $position = $row['position'];
                       $unit = $row['name'];
                       $workPhone = $row['workPhone'];
                       $email = $row['email'];
                       $phone = $row['phonePerson'];
                       $address = $row['address'];
                       echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$position.'</td>
                            <td>'.$unit.'</td>
                            <td>'.$workPhone.'</td>
                            <td>'.$email.'</td>
                            <td>'.$phone.'</td>
                            <td>'.$address.'</td>
                            <td>
                            <button class="btn btn-primary"><a href="update.php ? updateid='.$id.'" class="text-light">Edit</a></button>
                            <button class="btn btn-danger"><a href="deleteAccount.php  " class="text-light">Delete</a></button>
                        </td>
                       </tr>';
                   }
                }         
            }
        }
    ?>
        <?php 
            $sql = "SELECT * FROM `person` INNER JOIN `unit` WHERE person.id_unit = unit.id;";
            $result = mysqli_query($conn,$sql);
            if($result){
               while( $row = mysqli_fetch_assoc($result)){
                   $id = $row['idPerson'];
                   $name = $row['fullName'];
                   $position = $row['position'];
                   $unit = $row['name'];
                   $workPhone = $row['workPhone'];
                   $email = $row['email'];
                   $phone = $row['phonePerson'];
                   $address = $row['address'];
                   echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$position.'</td>
                        <td>'.$unit.'</td>
                        <td>'.$workPhone.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$address.'</td>
                        <td>
                        <button class="btn btn-primary"><a href="update.php ? updateid='.$id.'" class="text-light">Edit</a></button>
                        <button class="btn btn-danger"><a href="deleteAccount.php  " class="text-light">Delete</a></button>
                    </td>
                   </tr>';
               }
            }         
        ?>    
    </tbody>
</table>
</body>
</html>