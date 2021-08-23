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
    <title>Guest</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center; margin-top:15px">Thông tin giảng viên</h2>
                <form action="" method="GET">
                    <div class="formSearch" style="float:right">
                     Search : <input type="text" name="search">
                        <button type="submit" name="submit" value = "search">Search</button>
                    </div>
                </form>
            </div>
            <?php  
                include('connect.php');
                if (isset($_REQUEST['submit'])) {
                    $search = addslashes($_GET['search']);
                    if (empty($search)) {
                        echo '<script language="javascript">';
                        echo 'alert("Search not null!")';
                        echo '</script>';
                        $sql = "SELECT * FROM `person` INNER JOIN `unit` WHERE person.id_unit = unit.id;";
                        $result = mysqli_query($conn,$sql);
                        if($result){
                           while( $row = mysqli_fetch_assoc($result)){
                               $id = $row['idPerson'];
                               $name = $row['fullName'];
                               $position = $row['position'];
                               $unit = $row['name'];
                               $phone = $row['phonePerson'];
                               $email = $row['email'];
                               $address = $row['address'];
                         echo '
                            <div class="col-md-6">
                                <form class="formInfo">
                                    <label class="fullName"> Họ và tên: '.$name.'</label><br>
                                    <label class="position"> Chức vụ :'.$position.'</label><br>
                                    <label class="unit"> Phòng,Ban : '.$unit.'</label><br>
                                    <label class="phonePerson"> Số điện thoại : '.$phone.'</label><br>
                                    <label class="email"> email : '.$email.'</label><br>  
                                </form>
                            </div>
                         '; 
                     }};
                        
                    } else {
                        $sql = "SELECT * FROM `person` INNER JOIN `unit` WHERE person.id_unit = unit.id AND fullName LIKE '%$search%'";
                        $result = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($result);
                        if($count >= 1 && $search != ""){
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['idPerson'];
                                $name = $row['fullName'];
                                $position = $row['position'];
                                $unit = $row['name'];
                                $phone = $row['phonePerson'];
                                $email = $row['email'];
                                $address = $row['address'];
                                echo '
                                    <form class="formInfoSearch">
                                        <label class="fullName"> Họ và tên: '.$name.'</label><br>
                                        <label class="position"> Chức vụ :'.$position.'</label><br>
                                        <label class="unit"> Phòng,Ban : '.$unit.'</label><br>
                                        <label class="phonePerson"> Số điện thoại : '.$phone.'</label><br>
                                        <label class="email"> email : '.$email.'</label><br>  
                                    </form>';
                                    }} else {
                                             echo "Khong tim thay ket qua!";}
                    }
                }   else {       
                        $sql = "SELECT * FROM `person` INNER JOIN `unit` WHERE person.id_unit = unit.id;";
                        $result = mysqli_query($conn,$sql);
                        if($result){
                           while( $row = mysqli_fetch_assoc($result)){
                               $id = $row['idPerson'];
                               $name = $row['fullName'];
                               $position = $row['position'];
                               $unit = $row['name'];
                               $phone = $row['phonePerson'];
                               $email = $row['email'];
                               $address = $row['address'];
                         echo '
                            <div class="col-md-6">
                                <form class="formInfo">
                                    <label class="fullName"> Họ và tên: '.$name.'</label><br>
                                    <label class="position"> Chức vụ :'.$position.'</label><br>
                                    <label class="unit"> Phòng,Ban : '.$unit.'</label><br>
                                    <label class="phonePerson"> Số điện thoại : '.$phone.'</label><br>
                                    <label class="email"> email : '.$email.'</label><br>  
                                </form>
                            </div>
                         '; 
                     }};
                };

            ?>
        </div>
    </div>
</body>
</html>