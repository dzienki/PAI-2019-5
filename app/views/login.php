<!DOCTYPE html>
<head>
  <meta charset="UTF-8">  
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/fa98ee078d.js" crossorigin="anonymous"></script>
  <link href="..\..\Public\css\navbar.css" type="text/css" rel="StyleSheet">
  <link href="..\..\Public\css\style.css" type="text/css" rel="StyleSheet">
</head>
<body>
  <?php include(dirname(__DIR__).'\Common\navbar.php'); ?>
<div class="container">
<form action="?page=login" method="POST">
    <div class="messages">
    </div>
    <span>Login/e-mail</span>
    <input name="email" type="text" placeholder="email@email.com">
    <span>Password</span>
    <input name="password" type="password" placeholder="password">
    <div id="checkbox">
    <input type="checkbox" value="lsRememberMe" id="rememberMe">
    <span for="rememberMe">Remember me</span></div>
    <button type="submit">CONTINUE</button>
    <span id="registertxt"> If you don't have account register <a href="register.php">here</a></span>
</form>
</div>
</body>
</html>