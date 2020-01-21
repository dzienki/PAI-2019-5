<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITENAME?></title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fa98ee078d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?php echo URLROOT;?>/css/navbar.css" type="text/css" rel="StyleSheet">
    <link href="<?php echo URLROOT;?>/css/insurance.css" type="text/css" rel="StyleSheet">
</head>
<body>
<?php include(APPROOT.'/views/inc/navbar.php');?>
<div class="jumbotron subhead" id="overview">
    <div class="container">
    <h3>YOUR INSURANCES</h3>
    </div>
    <!-- <?php foreach($data['insurances'] as $insurance):?>
        <h1><?php echo $insurance->data;?></h1>
    <?php endforeach;?> -->
</div>
<div id="carouselExampleIndicators" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="container">
        <div class="row">
            <div class="col m-2 p-2">
                <img src="<?php echo URLROOT;?>/img/first.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col m-2">
            <h3>FIat</h3>
            <hr>
            <p>Labore ad nulla do fugiat magna consectetur labore sunt nostrud deserunt. Amet amet et minim aute voluptate culpa proident dolore id ullamco magna. Officia laboris elit cillum consectetur reprehenderit voluptate in ut commodo. Commodo minim ullamco Lorem nostrud nostrud. Irure mollit consequat pariatur culpa exercitation excepteur sunt ullamco fugiat labore. Incididunt in officia exercitation nulla anim duis.</p>
            </div>
        </div>
</div>
    </div>
    <div class="carousel-item">
    <div class="container">
        <div class="row">
            <div class="col m-2 p-2">
                <img src="<?php echo URLROOT;?>/img/first.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col m-2">
            <h3>FIat2</h3>
            <hr>
            <p>Labore ad nulla do fugiat magna consectetur labore sunt nostrud deserunt. Amet amet et minim aute voluptate culpa proident dolore id ullamco magna. Officia laboris elit cillum consectetur reprehenderit voluptate in ut commodo. Commodo minim ullamco Lorem nostrud nostrud. Irure mollit consequat pariatur culpa exercitation excepteur sunt ullamco fugiat labore. Incididunt in officia exercitation nulla anim duis.</p>
            </div>
        </div>
</div>
    </div>
    <div class="carousel-item">
    <div class="container">
        <div class="row">
            <div class="col m-2 p-2">
                <img src="<?php echo URLROOT;?>/img/first.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col m-2">
            <h3>FIat3</h3>
            <hr>
            <p>Labore ad nulla do fugiat magna consectetur labore sunt nostrud deserunt. Amet amet et minim aute voluptate culpa proident dolore id ullamco magna. Officia laboris elit cillum consectetur reprehenderit voluptate in ut commodo. Commodo minim ullamco Lorem nostrud nostrud. Irure mollit consequat pariatur culpa exercitation excepteur sunt ullamco fugiat labore. Incididunt in officia exercitation nulla anim duis.</p>
            </div>
        </div>
</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>