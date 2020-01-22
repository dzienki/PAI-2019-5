<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title><?php echo SITENAME ?></title>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/fa98ee078d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="<?php echo URLROOT; ?>/css/navbar.css" type="text/css" rel="StyleSheet">
  <link href="<?php echo URLROOT; ?>/css/style.css" type="text/css" rel="StyleSheet">
</head>

<body>
  <?php include(APPROOT . '/views/inc/navbar.php'); ?>
  <div class="container">
    <form action="<?php echo URLROOT; ?>/users/login" method="post">
      <div class="messages">
        <?php flash('register_success'); ?>
      </div>
      <span>Login/e-mail</span>
      <input name="email" type="text" placeholder="email@email.com" value="<?php echo $data['email']; ?>">
      <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['emailErr']; ?></div>
      <span>Password</span>
      <input name="password" type="password" placeholder="password">
      <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['passwordErr']; ?></div>
      <button type="submit" style="margin-top:50px;">CONTINUE</button>
      <span id="registertxt"> If you don't have account register <a href="<?php echo URLROOT ?>/users/register">here</a></span>
    </form>
  </div>
  <script src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>

</html>