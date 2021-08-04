<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/5f58258f46.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/style.css" />
    <title>Categories</title>
  </head>
  <body>
    <?php include('./header/header.php')?>
    <div class="container-fluid">
        <div class="row exFood">
          <div class="col-md-12">
            <p class="ex">Explore</p>
          </div> 
        <div class="row explore-food">
          <div class="col-md-3">
            <image class="imageFoodExplore" src="./image/burger.jpg">
                <p class="foodNameExplore">Burger</p>
            </image>
          </div>
          <div class="col-md-3">
            <image class="imageFoodExplore" src="./image/pizza.jpg">
              <p class="foodNameExplore">Pizza</p>
            </image>
          </div>
          <div class="col-md-3">
          <image class="imageFoodExplore" src="./image/momo.jpg">
            <p class="foodNameExplore">Momo</p>
          </image>
          </div>
        </div>
        <div class="row explore-food">
          <div class="col-md-3">
            <image class="imageFoodExplore" src="./image/burger.jpg">
                <p class="foodNameExplore">Burger</p>
            </image>
          </div>
          <div class="col-md-3">
            <image class="imageFoodExplore" src="./image/pizza.jpg">
              <p class="foodNameExplore">Pizza</p>
            </image>
          </div>
          <div class="col-md-3">
          <image class="imageFoodExplore" src="./image/momo.jpg">
            <p class="foodNameExplore">Momo</p>
          </image>
          </div>
        </div>
        </div>
      

    </div>
    <?php include('./footer/footer.php') ?>
  </body>
</html>