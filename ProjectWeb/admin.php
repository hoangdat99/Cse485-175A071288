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
    <!-- ** header ** -->
        <?php include('./header/header.php') ?>
        <div class="container-fluid">
            <div class="row admin">
                <div class="col-md-3">
                    <button class="control" >
                        <a href="account.php">Quản lý tài khoản</a>
                    </button>
                </div>
                <div class="col-md-3">
                    <button class="control">
                    <a href="post.php">Quản lý bài viết</a>
                    </button>
                </div>
                <div class="col-md-3">
                    <button class="control">
                        Quản lý môn học
                    </button>
                </div>
                <div class="col-md-3">
                    <button class="control" >
                        <a href="logout.php">LogOut</a>
                    </button>
                </div>
            </div>    
        </div>
        <!-- ** footer** -->
</body>
</html>