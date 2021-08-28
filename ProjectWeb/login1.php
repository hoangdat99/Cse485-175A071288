<?php
    include('connect.php');
    $paaa = "555555";
   $hh= password_hash($paaa,PASSWORD_DEFAULT);
    var_dump($hh);
    if(isset($_POST['submit'])){
        $userName = $_POST['userName'];
        $passWord = $_POST['passWord'];
        $sql = "SELECT * FROM users WHERE useName = '$userName'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($passWord, $row['passWord'])){
                header('location:admin1.php');
            }
        }   else {
            echo "loi";
        }
    }
?>
<form method="post" action="">
    <input type="text" name="userName">
    <input type="text" name="passWord">
    <button type="submit" name="submit">Login</button>
</form>