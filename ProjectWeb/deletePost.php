<?php 
    include('connect.php');
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql = "DELETE FROM `news` WHERE id=$id";
        $result = mysqli_query($conn,$sql);
        if($result){
            header('location:post.php');
        }else{
            die(mysqli_connect_error($conn));
        }
    }
?>