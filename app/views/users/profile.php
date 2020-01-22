<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title><?php echo SITENAME ?></title>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/fa98ee078d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="<?php echo URLROOT; ?>/css/style.css" type="text/css" rel="StyleSheet">
  <link href="<?php echo URLROOT; ?>/css/profile.css" type="text/css" rel="StyleSheet">
  <link href="<?php echo URLROOT; ?>/css/navbar.css" type="text/css" rel="StyleSheet">
</head>

<body>
  <?php include(APPROOT . '/views/inc/navbar.php'); ?>
  <div class="container">
    <form action="<?php echo URLROOT; ?>/users/profile" method="POST">
      <div class="messages">
        <?php flash('dataAdd'); ?>
      </div>
      <input name="name" type="text" placeholder="Name" value="<?php echo $data['name']; ?>">
      <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['nameErr']; ?></div>
      <input name="surname" type="text" placeholder="Surname" value="<?php echo $data['surname']; ?>">
      <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['surnameErr']; ?></div>
      <input name="country" type="text" placeholder="Country" value="<?php echo $data['country']; ?>">
      <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['countryErr']; ?></div>
      <input name="adress" type="text" placeholder="Street" value="<?php echo $data['adress']; ?>">
      <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['adressErr']; ?></div>
      <input name="city" type="text" placeholder="City" value="<?php echo $data['city']; ?>">
      <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['cityErr']; ?></div>
      <input name="zipcode" type="text" placeholder="Zip/Postal Code" value="<?php echo $data['zipcode']; ?>">
      <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['zipcodeErr']; ?></div>
      <button type="save"><?php echo $data['button'] ?></button>
    </form>
  </div>
</body>

</html>