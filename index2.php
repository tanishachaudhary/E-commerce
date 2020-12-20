<?php
    require 'common.php';
    if (isset($_SESSION['email'])) { header('location: products.php'); }
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="index2.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lifestyle Stores</title>
  </head>
<body>
    <?php
        include 'header.php';
    ?>  
    <div class="banner_image">
        <div class="container">
            <center>
            <div class="banner_content">
                <h1>We Sell Lifestyle</h1>
                <p>Flat 40% OFF on premium brands<br><br></p>
                <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
        </center>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="1.jpg">
                    <div class="caption">
                        <h3>Cameras</h3>
                        <p>Choose among the best available in the world.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="7.jpg">
                    <div class="caption">
                        <h3>Watches</h3>
                        <p>Original watches from best brands.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="8.jpg">
                    <div class="caption">
                        <h3>Shirts</h3>
                        <p>Our exquisite collection of shirts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br><br>
    <?php
        include 'footer.php';
    ?>  
  </body>
</html>