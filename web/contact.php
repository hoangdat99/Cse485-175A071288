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
    <link rel="stylesheet" href="./style/style.css" />
    <title>Contact</title>
</head>
<body>
    <?php include('./header/header.php') ?>
    <div class="container-fluid contact">
            <div class="row">
                <div class="col-md-12">
                      <p class="confirm">Fill this form to confirm your order</p>
                </div>
                <div class="col-md-6">
                    <p class="txtOder">Order</p>
                    <form class="formContact">
                        <image class="imageFoodContact" src="./image/pizza.jpg">
                        <div class="orderTitle">
                            <p class="nameFoodContact">Burger</p>
                            <p class="price">2.5$</p>
                            <input type="number" class="inputNumber">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <p class="txtContactDetail" >Contact</p>
                    <form class="formDetail">
                        <label class="txtContact">Full Name:</label>
                        <input type="text" placeholder=" Your full name" class="txtNameDetail">
                        <label class="txtContact">Phone Number:</label>
                        <input type="text" placeholder=" Your phone number" class="txtPhoneNumber">
                        <label class="txtContact">Email:</label>
                        <input type="email" placeholder=" Your email" class="txtEmail">
                        <label class="txtContact">Address:</label>
                        <input type="textAria" placeholder=" Your address" class="address">
                        <button class="confirmOder">Confirm Order</button>
                    </form>
                </div>
                
            </div>
    </div>

    <?php include('./footer/footer.php') ?>
</body>
</html>