<?php 
    include('connect.php')
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
    <link rel="stylesheet" href="style/admission.css">       
    <title>Quản lý đơn tuyển sinh</title>
</head>
<body>
<p class="text-center font-weight-bold" style="font-size:2em;">Danh sách đơn tuyển sinh</p>
<button type="button" class="btn btn-secondary"><a href="admin.php">Về trang quản lý</a>
</button>

    <table class="table table-striped table-dark">  
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Họ và tên</th>
            <th scope="col-3">Email</th>
            <th scope ="col">Số điện thoại</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Chuyên ngành</th>
            <th scope="col">Loại hình đào tạo</th>
            <th scope="col">Hình thức xét truyển</th>
            <th scope="col">Trạng thái</th>
            </tr>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM `admissions`";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                    while( $row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $birthday = $row['birthday'];
                        $address = $row['address'];
                        $specialized = $row['specialized'];
                        $education = $row['education'];
                        $admission = $row['admission'];
                        $status = $row['status'];
                        echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$birthday.'</td>
                                <td>'.$address.'</td>
                                <td>'.$specialized.'</td>
                                <td>'.$education.'</td>
                                <td>'.$admission.'</td>
                                <td>
                                    <button class="btn btn-primary"><a href="statusAdmission.php ? statusid='.$id.' " class="text-light">'.$status.'</button>
                                </td>
                        </tr>';
                    }
                    }         
                ?>    
            </tbody>
        </thead>
    </table>
</body>
</html>