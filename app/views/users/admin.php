<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo SITENAME ?></title>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/fa98ee078d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="<?php echo URLROOT; ?>/css/navbar.css" type="text/css" rel="StyleSheet">

</head>

<body>
  <?php include(APPROOT . '/views/inc/navbar.php'); ?>
  <div class="container" id="messagesTable">
    <table class="table m-4">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Country</th>
          <th scope="col">Tekst</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $message) {
          echo '<tr><th scope="row">' . $message['name'] . '</th>';
          echo '<td>'.$message['id'].'</td>';
          echo '<td>' . $message['email'] . '</td>';
          echo '<td>' . $message['country'] . '</td>';
          echo '<td>' . $message['subject'] . '</td>';
          echo '<td><button onclick="deleteRecord('.$message['id'].')"><p class="fas fa-trash-alt"></p></button></td></tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>

</html>