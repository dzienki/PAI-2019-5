<!DOCTYPE html>
<head>
  <meta charset="UTF-8">  
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fa98ee078d.js" crossorigin="anonymous"></script>
    <link href="<?php echo URLROOT;?>/css/navbar.css" type="text/css" rel="StyleSheet">
    <link href="<?php echo URLROOT;?>/css/contactus.css" type="text/css" rel="StyleSheet">

</head>
<body>
<?php include(APPROOT.'/views/inc/navbar.php');?>
<div class="container">
  <div style="text-align:center; margin-top: 10px;">
    <h1>Contact Us</h1>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="<?php echo URLROOT;?>\img\contactus.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <input type="text" id="country" name="firstname" placeholder="Your country..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
</div>
</body>
</html>