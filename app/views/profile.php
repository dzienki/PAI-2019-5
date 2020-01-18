<!DOCTYPE html>
<head>
  <meta charset="UTF-8">  
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/fa98ee078d.js" crossorigin="anonymous"></script>
  <link href="..\..\Public\css\style.css" type="text/css" rel="StyleSheet">
  <link href="..\..\Public\css\profile.css" type="text/css" rel="StyleSheet">
  <link href="..\..\Public\css\navbar.css" type="text/css" rel="StyleSheet">
</head>
<body>
  <?php include(dirname(__DIR__).'\Common\navbar.php'); ?>
<div class="container">
<form action="?page=login" method="POST">
    <div class="messages">
    </div>
    <input name="name" type="text" placeholder="Name">
    <input name="surname" type="text" placeholder="Surname">
    <input name="adress" type="text" placeholder="Adress">
    <input name="country" type="text" placeholder="Country">
    <input name="city" type="text" placeholder="City">
    <input name="zipcode" type="text" placeholder="Zip/Postal Code">
    <button type="save">SAVE</button>
    </form>
</div>
</body>
</html>