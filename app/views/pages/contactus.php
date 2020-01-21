<!DOCTYPE html>
<head>
  <meta charset="UTF-8">  
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fa98ee078d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
      <form action="<?php echo URLROOT;?>/pages/contactus" method="post">
        <label for="name">Name</label>
        <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['nameErr'];?></div>
        <input type="text" name="name" placeholder="Your name..">        
        <label for="email">Email</label>        
        <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['emailErr'];?></div>
        <input type="email" name="email" placeholder="Your email..">
        <label for="country">Country</label>
        <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['countryErr'];?></div>
        <input type="text" name="country" placeholder="Your country..">
        <label for="subject">Subject</label>
        <div class="alert alert-danger p-0 border-0" role="alert"><?php echo $data['subjectErr'];?></div>
        <textarea name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
        <h1 style="color: #54f978;"><?php echo $data['succesfull'];?></h1>
      </form>
    </div>
  </div>
</div>
</div>
</body>
</html>