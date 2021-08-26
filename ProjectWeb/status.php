<?php
    session_start();
    include('connect.php');
    $id = $_GET['statusid'];
    $sql = "UPDATE `news` SET status = 1 WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:post.php');
    }   else {
        echo "loi";
    }
?>