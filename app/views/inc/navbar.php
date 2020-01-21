<div id="mySidepanel" class="sidepanel">
  <div>
  <span>Insurance Dzienki</span>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="<?php echo URLROOT; ?>">Home page</a>
    <?php if(isLoggedIn()) :?>
    <a href="<?php echo URLROOT; ?>/users/logout">Logout</a>
    <a href="<?php echo URLROOT; ?>/insurances/index">Your Insurances</a>
    <?php else : ?>
    <a href="<?php echo URLROOT; ?>/users/login">Login</a>
    <a href="<?php echo URLROOT; ?>/users/register">Register</a>
    <?php endif;?>
    <?php if(isAdmin()):?>
    <a href="<?php echo URLROOT; ?>/users/admin">Admin Panel</a>
    <?php endif;?>    
    <a href="<?php echo URLROOT;?>/pages/about">About us</a>
    <a href="<?php echo URLROOT; ?>/pages/contactus">Contact</a>
    <div class="row p-4">
    <form class="form-inline col-12">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
    </div>
<!-- footer -->
<div class="row mb-1 footer">
  <a href="http://www.fb.com" class="fab fa-facebook"></a>
  <a href="http://www.twitter.com/" class="fab fa-twitter"></a>
  <a href="http://www.instagram.com" class="fab fa-instagram"></a>
  <a href="http://www.youtube.com" class="fab fa-youtube"></a>
  </div>
</form>
  </div>

  <div class="navbar">
      <button class="openbtn" onclick="openNav()">☰</button>
      <img src="<?php echo URLROOT;?>/img/logo.png">
      <?php if(!isLoggedIn()) :?>
      <a href="<?php echo URLROOT; ?>/users/login"><i class="fas fa-user"></i></a>
      <?php else : ?>
      <a href="<?php echo URLROOT; ?>/users/profile"><i class="fas fa-user" style="color: #72c183;"><?php echo $_SESSION['user_login'];?></i></a>
      <?php endif;?>
      <script src="<?php echo URLROOT;?>/js/main.js"></script>
</div>