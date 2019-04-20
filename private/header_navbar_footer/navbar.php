<nav class="navbar navbar-expand-lg fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>

     <ul class="navbar-nav">
          <li class="nav-item">
              <a href="#" onclick="language('fr',<?php echo $_SESSION['key'];?>);"><img
                      src="<?php echo BASE_URL_LINK ;?>image/flag/iconfinder_Flag_of_France_96147.png" width="30px"></a>
          </li>
          <li class="nav-item">
              <a href="#" onclick="language('en',<?php echo $_SESSION['key'];?>);"><img
                      src="<?php echo BASE_URL_LINK ;?>image/flag/iconfinder_Flag_of_United_Kingdom_96354.png" width="30px"></a>
          </li>
          <li class="nav-item">
              <a href="#" onclick="language('rw',<?php echo $_SESSION['key'];?>);"><img
                      src="<?php echo BASE_URL_LINK ;?>image/flag/iconfinder_Flag_of_Rwanda_96263.png" width="30px"></a>
          </li>
      </ul>

      <div class="navbar-nav nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?php echo "Welcome ".$_SESSION['username'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="d-inline-block" href="#" onclick="colors('blue',<?php echo $_SESSION['key'];?>)">
              <img src="<?php echo BASE_URL_LINK ;?>image/color/blue.png" width="30px"> </a>
          <a href="#" onclick="colors('black',<?php echo $_SESSION['key'];?>)"> <img
                  src="<?php echo BASE_URL_LINK ;?>image/color/black.png" width="30px"></a>
          <a href="#" onclick="colors('yellow',<?php echo $_SESSION['key'];?>)"> <img
                  src="<?php echo BASE_URL_LINK ;?>image/color/yellow.png" width="30px"></a>
          <a href="#" onclick="colors('green',<?php echo $_SESSION['key'];?>)"> <img
                  src="<?php echo BASE_URL_LINK ;?>image/color/green.png" width="30px"></a>
          <a href="#" onclick="colors('purple',<?php echo $_SESSION['key'];?>)"> <img
                  src="<?php echo BASE_URL_LINK ;?>image/color/purple.png" width="30px"></a>
          <a href="#" onclick="colors('rose',<?php echo $_SESSION['key'];?>)"> <img
                  src="<?php echo BASE_URL_LINK ;?>image/color/rose.png" width="30px"></a>
          <a href="#" onclick="colors('chocolate',<?php echo $_SESSION['key'];?>)"> <img
                  src="<?php echo BASE_URL_LINK ;?>image/color/chocolate.png" width="30px"></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item bg-info text-white" href="<?php echo LOGOUT ;?>">Log out</a>
          <!-- <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </div>

  </div>
</nav>