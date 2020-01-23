<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITENAME ?></title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fa98ee078d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?php echo URLROOT; ?>/css/navbar.css" type="text/css" rel="StyleSheet">
    <link href="<?php echo URLROOT; ?>/css/insurance.css" type="text/css" rel="StyleSheet">
</head>

<body>
    <?php include(APPROOT . '/views/inc/navbar.php'); ?>
    <div class="jumbotron subhead" id="overview">
        <div class="container">
            <h3>YOUR INSURANCES</h3>
        </div>
    </div>
    <div class="container">
        <?php foreach ($data as $row) : ?>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-6 m-1">
                        <img src="<?php echo URLROOT; ?>/public/img/<?php echo $row['img']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['license_plate']?></h5>
                            <p class="card-text">Capacity: <?php echo $row['capacity']?></p>
                            <p class="card-text">Power: <?php echo $row['power']?></p>
                            <p class="card-text">Year of production: <?php echo $row['year_of_production']?></p>
                            <p class="card-text">Cost: <?php echo $row['costOfInsurance']?>zł</p>
                            <p class="card-text">Discount: <?php echo $row['discount']?>%</p>
                            <p class="card-text"><small class="text-muted">Insurance valid from: <?php echo $row['validFrom'];?></small></p>
                            <p class="card-text"><small class="text-muted">Insurance valid to: <?php echo $row['validTo'];?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?php echo URLROOT; ?>/js/main.js"></script>

</html>