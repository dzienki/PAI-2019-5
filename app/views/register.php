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
    <span>Login</span>
    <input name="login" type="text" placeholder="Login">
    <span>E-mail</span>
    <input name="email" type="text" placeholder="email@email.com">
    <span>Password</span>
    <input name="password" type="password" placeholder="password">
    <span>Confirm Password</span>
    <input name="confirmPassword" type="password" placeholder="password">
    <div id="checkbox">
    <input type="checkbox" value="acceptTerms" id="acceptTerms">
    <span for="acceptTerms">I have read and accept the Terms of Use </span></div>
    <button type="submit">Register</button>
</form>
</div>
</body>
</html>