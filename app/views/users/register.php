<!DOCTYPE html>
<head>
  <meta charset="UTF-8">  
  <title><?php echo SITENAME?></title>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/fa98ee078d.js" crossorigin="anonymous"></script>
  <link href="<?php echo URLROOT;?>/css/navbar.css" type="text/css" rel="StyleSheet">
  <link href="<?php echo URLROOT;?>/css/style.css" type="text/css" rel="StyleSheet">
</head>
<body>
  <?php include(APPROOT.'/views/inc/navbar.php');?>
<div class="container">
<form action="<?php echo URLROOT;?>/users/register" method="post">
    <h1>Create An Account</h1>
    <div class="messages">
    </div>
    <span>Login:</span>
    <input name="login" type="text" placeholder="Login" value="<?php echo $data['login'];?>">
    <span class="invalid-feedback"><?php echo $data['loginErr'];?></span>
    <span>E-mail:</span>
    <input name="email" type="email" placeholder="email@email.com" value="<?php echo $data['email'];?>">
    <span class="invalid-feedback"><?php echo $data['emailErr'];?></span>
    <span>Password:</span>
    <input name="password" type="password" placeholder="password">
    <span class="invalid-feedback"><?php echo $data['passwordErr'];?></span>
    <span>Confirm Password:</span>
    <input name="confirmPassword" type="password" placeholder="confirm password">
    <span class="invalid-feedback"><?php echo $data['confirmPasswordErr'];?></span>
    <div id="checkbox">
    <input type="checkbox" name="acceptTerms">
    <span for="acceptTerms">I have read and accept the Terms of Use </span></div>
    <span class="invalid-feedback"><?php echo $data['acceptTermsErr'];?></span>
    <button type="submit">Register</button>
    <span id="registertxt"> If you have account login <a href="<?php echo URLROOT?>/users/login">here</a></span>
</form>
</div>
</body>
</html>