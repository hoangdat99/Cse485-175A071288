<?php 
    include('connect.php');
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql = "DELETE FROM `person` WHERE idPerson=$id";
        $result = mysqli_query($conn,$sql);
        if($result){
            header('location:admin.php');
        }else{
            die(mysqli_connect_error($conn));
        }
    }
?>