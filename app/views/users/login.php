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
<form action="<?php echo URLROOT;?>/users/login" method="post">
    <div class="messages">
      <?php flash('register_success');?>
    </div>
    <span>Login/e-mail</span>
    <input name="email" type="text" placeholder="email@email.com" value="<?php echo $data['email'];?>">
    <span class="invalid-feedback"><?php echo $data['emailErr'];?></span>
    <span>Password</span>
    <input name="password" type="password" placeholder="password">
    <span class="invalid-feedback"><?php echo $data['passwordErr'];?></span>
    <div id="checkbox">
    <input type="checkbox" value="lsRememberMe" id="rememberMe">
    <span for="rememberMe">Remember me</span></div>
    <button type="submit">CONTINUE</button>
    <span id="registertxt"> If you don't have account register <a href="<?php echo URLROOT?>/users/register">here</a></span>
</form>
</div>
</body>
</html>