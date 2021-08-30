<?php 
    session_start();
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Quản lý Admin</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/5f58258f46.js"crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/admin.css">       
     </head>
<body>
    <!-- SIDEBAR -->
        <div class="sidebar">     
            <!-- SIDEBAR MENU -->
            <ul class="sidebar-menu">
                <li class="sidebar-submenu">
                    <a href="#" class="sidebar-menu-dropdown">
                        <i class="bi bi-person-fill"></i>
                        <span>Trang quản lý</span>
                        <div class="dropdown-icon"></div>
                    </a>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="account.php" >Quản lý tài khoản</a>
                        </li>
                        <li>
                            <a href="category.php">Quản lý danh mục</a>
                        </li>
                        <li>
                            <a href="post.php">Quản lý bài viết</a>
                        </li>
                        <li>
                            <a href="admission.php">Quản lý tuyển sinh</a>
                        </li>
                        <li>
                            <a href="change.php" >Thay đổi mật khẩu</a>
                        </li>
                </div>
            </div>                  
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    
        <div class="main">
            <div class="main-header">
                <div class="mobile-toggle" id="mobile-toggle">
                    <i class='bx bx-menu-alt-right'></i>
                </div>
                <div class="main-title">
                    Xin chào :
                <?Php if(isset($_SESSION['userName'])){
                            echo $_SESSION['userName'];} ?>
                </div>    
                <div class="right">
                    <button class="btn btn-outline text-light">
                        <a href="logout.php">
                            <i class="text-light"></i>
                        <span>Đăng xuất</span>
                        </a>
                    </button> 
                </div>  
            </div>
            <div class="main-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-hover">
                            <?php 
                                $totalRecord = mysqli_query($conn, "SELECT * FROM `news`");
                                $totalRecord = $totalRecord->num_rows;
                            ?>
                           <div class="content">
                                <p>Bài viết</p>
                                <?php echo '<label class="text-light">'.$totalRecord.'</label>' ?>
                           </div>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="box box-hover">
                            <?php 
                                $totalRecord = mysqli_query($conn, "SELECT * FROM `users`");
                                $totalRecord = $totalRecord->num_rows;
                            ?>
                           <div class="content">
                                <p>Số người dùng</p>
                                <?php echo '<label class="text-light">'.$totalRecord.'</label>' ?>
                           </div>
                        </div>
                    </div>                  
                </div>
                <div class="row">
                <div class="col-md-6">
                        <div class="box box-hover">
                            <?php 
                                $totalRecord = mysqli_query($conn, "SELECT * FROM `admissions`");
                                $totalRecord = $totalRecord->num_rows;
                            ?>
                           <div class="content">
                                <p>Đơn xét tuyển</p>
                                <?php echo '<label class="text-light">'.$totalRecord.'</label>' ?>
                           </div>
                        </div>
                    </div> 
                </div>
            </div>
</body>

</html>