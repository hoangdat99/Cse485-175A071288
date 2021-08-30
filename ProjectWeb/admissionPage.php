<?php 
    session_start();
    if(isset($_POST['submit'])){
        include('connect.php');
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $specialized = $_POST['specialized'];
        $education = $_POST['education'];
        $admission = $_POST['admission'];
        $status = 0;
        if(empty($fullName)){
            header('location:admissionPage.php  ? error = Full name is required!');
        }   else if(empty($email)){
             header('location:admissionPage.php ? error = Email is required!');
        }   else if(empty($phone)){
             header('location:admissionPage.php ? error = Phone is required!');
        }   else if(empty($birthday)){
             header('location:admissionPage.php ? error = Birthday is required!');
        }   else if(empty($address)){
             header('location:admissionPage.php ? error = Address is required!');
        }   else if(empty($specialized)){
             header('location:admissionPage.php ? error = Specialized is required!');      
        }   else if(empty($education)){
              header('location:admissionPage.php ? error = Education is required!');      
        }   else if(empty($admission)){
             header('location:admissionPage.php ? error = Admission is required!');      
        }   else{
            $sql= "INSERT INTO `admissions`(`name`, `email`, `phone`, `birthday`, `address`, `specialized`, `education`, `admission`, `status`) VALUES ('$fullName','$email','$phone','$birthday','$address','$specialized','$education','$admission','$status')";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo '<script>alert("Welcome to Geeks for Geeks")</script>';
                header('location:admissionPage.php');
            }   else{
                echo "loi";
            }
        }
    }
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
    <title>Tuyển sinh</title>
</head>
<body style="background-color: cornsilk;">
    <div class="container col-md-4 my-5">
        <form class="text-left" method="POST">
            <?php if(isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>
            <div class="form-row">
                <h2>THÔNG TIN ĐĂNG KÝ TUYỂN SINH</h2>
                <h5 class="font-italic">Lưu ý: Những mục đánh dấu (*) là thông tin bắt buộc phải điền.</h5>
                <div class="form-group col-md-12">
                <label for="inputfullName">Tên*</label>
                <input type="fullName" class="form-control" id="inputfullName" placeholder="Name" name="fullName">
                </div>
                <div class="form-group col-md-12">
                <label for="inputEmail">Email*</label>
                <input type="Email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPhoneNumber">Số điện thoại*</label>
                <input type="text" class="form-control" id="inputPhoneNumber" placeholder="Số điện thoại" name="phone">
            </div>
            <div class="form-group">
                <label for="inputBirthday">Ngày sinh*</label>
                <input type="date" class="form-control" id="inputBirthday" placeholder="dd/mm/yy" name="birthday">
            </div>
            <div class="form-group">
                <label for="inputPhoneNumber">Địa chỉ*</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Địa chỉ" name="address">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState">Chuyên ngành*</label>
                    <select id="inputState" class="form-control" name="specialized">
                        <option selected>Chọn chuyên ngành...</option>
                        <option value="Công nghệ thông tin">Công nghệ thông tin</option>
                        <option value="Công nghệ thông tin Việt Nhật">Công nghệ thông tin Việt Nhật</option>
                        <option value="Điều Dưỡng">Điều dưỡng</option>
                        <option value="Dược học">Dược học</option>
                        <option value="Kỹ thuật ô tô">Kỹ thuật ô tô</option>
                        <option value="Công nghe chế tạo">Công nghệ chế tạo</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Loại hình đào tạo*</label>
                    <select id="inputState" class="form-control" name="education">
                        <option selected>Chọn loại hình đào tạo</option>
                        <option value="Đại học chính quy">Đại học chính quy</option>
                        <option value="Liên thông">Liên thông</option>
                        <option value="Sau đại học">Sau đại học</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                    <label for="inputState">Hình thức xét tuyển*</label>
                    <select id="inputState" class="form-control" name="admission">
                        <option selected>Chọn hình thức xét tuyển...</option>
                        <option value="Xét tuyển">Xét tuyển</option>
                        <option value="Thi">Thi</option>
                </select>
            </div>       
            <button type="submit" class="btn btn-primary col-md-12" name="submit">Đăng ký</button>
        </form>
    </div>
    <?php include('./footer/footer.php') ?>
</body>
</html>