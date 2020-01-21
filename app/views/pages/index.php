<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITENAME?></title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fa98ee078d.js" crossorigin="anonymous"></script>
    <link href="<?php echo URLROOT;?>/css/navbar.css" type="text/css" rel="StyleSheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php include(APPROOT.'/views/inc/navbar.php');?>
    <div class="alert alert-danger p-0 border-0" role="alert"><?php flash('data');?></div>
    <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Home Page of Dzienki Insurance</h1>
      <p>Ea nulla eu aute qui aute incididunt. Ad consequat irure aliquip proident nisi reprehenderit sit commodo fugiat sint exercitation. Aliqua labore adipisicing in in ullamco laborum qui. Est ea tempor enim dolor duis non et labore culpa ipsum adipisicing aliqua duis. Nisi proident aliquip excepteur reprehenderit aute laboris culpa cupidatat laborum officia incididunt. Adipisicing elit nostrud et est veniam consectetur dolor esse proident occaecat cillum mollit.</p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Ex voluptate labore ut sunt.</h2>
        <p>Id esse mollit ullamco consectetur. Qui aliquip velit aute cupidatat esse consectetur esse sunt quis proident. Pariatur pariatur consectetur eiusmod esse nulla proident quis aliqua dolor eiusmod deserunt in id enim. Culpa sunt occaecat nisi id laborum eiusmod quis sint ut anim anim non anim. Adipisicing mollit aliqua officia commodo qui. Pariatur esse elit anim consequat irure sit ex id veniam eiusmod duis velit nisi irure. Dolor duis voluptate sint anim enim mollit duis amet nisi exercitation.</p>
      </div>
      <div class="col-md-4">
        <h2>Tempor ex qui officia mollit sint proident.</h2>
        <p>Sit proident consequat elit do est velit occaecat reprehenderit culpa aute ex labore officia. Enim Lorem nulla commodo anim adipisicing veniam. Nostrud Lorem esse deserunt in pariatur laboris incididunt velit sunt amet duis dolore aute ut. Culpa proident velit enim eu ut velit ullamco adipisicing labore ut ut nostrud. In laborum dolor quis commodo. Est cillum anim adipisicing officia Lorem Lorem esse in sit incididunt enim sit.</p>
      </div>
      <div class="col-md-4">
        <h2>Commodo aute ea et sunt.</h2>
        <p>Est elit voluptate eu quis. Officia duis veniam excepteur nisi fugiat eiusmod. Anim reprehenderit Lorem est eiusmod. Commodo eu ipsum id id mollit aliquip duis est culpa. Nostrud enim do anim velit aliqua fugiat. Cillum dolor ad cupidatat pariatur labore.</p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>
</body>
</html>