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
    <form action="<?php echo URLROOT; ?>/users/register" method="post">
      <h1>Create An Account</h1>
      <div class="messages">
      </div>
      <span>Login:</span>
      <input name="login" type="text" placeholder="Login" value="<?php echo $data['login']; ?>">
      <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['loginErr']; ?></div>
      <span>E-mail:</span>
      <input name="email" type="email" placeholder="email@email.com" value="<?php echo $data['email']; ?>">
      <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['emailErr']; ?></div>
      <span>Password:</span>
      <input name="password" type="password" placeholder="password">
      <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['passwordErr']; ?></div>
      <span>Confirm Password:</span>
      <input name="confirmPassword" type="password" placeholder="confirm password">
      <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['confirmPasswordErr']; ?></div>
      <div id="checkbox">
        <input name="acceptTerms" value="0" type="hidden">
        <input type="checkbox" name="acceptTerms" value="true">
        <span for="acceptTerms">I have read and accept the Terms of Use </span></div>
      <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['acceptTermsErr']; ?></div>
      <button type="submit">Register</button>
      <span id="registertxt"> If you have account login <a href="<?php echo URLROOT ?>/users/login">here</a></span>
    </form>
  </div>
  <script src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>

</html>