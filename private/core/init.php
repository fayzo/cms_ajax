<?php 
include('database/db.php');
include('database/Database.php');
include('class/user_admin.php');

define('BASE_URL_LINK_ALL', 'http://localhost:84/Blog_nyarwanda_CMS/assets/');
// PRIVATE_URL
define('BASE_URL_LINK', 'http://localhost:84/Blog_nyarwanda_CMS/private/assets/');
// SETTING FILE
define('LOGIN', 'http://localhost:84/Blog_nyarwanda_CMS/private/include/login.php');
define('LOCKSCREEN_LOGIN', 'http://localhost:84/Blog_nyarwanda_CMS/private/include/lockscreen.php');
define('LOGOUT', 'http://localhost:84/Blog_nyarwanda_CMS/private/include/logout.php');
define('SIGNUP', 'http://localhost:84/Blog_nyarwanda_CMS/private/include/sign_up.php');
define('FORGET_PASSPOWRD_LOGIN', 'http://localhost:84/Blog_nyarwanda_CMS/private/include/forgetPassword.php');
// END SETTING FILE

// FOLLOWS AND PROFILE_EDIT
define('HOME', 'http://localhost:84/Blog_nyarwanda_CMS/public/home.php');
define('FOLLOWERS', 'http://localhost:84/Blog_nyarwanda_CMS/public/followers.php');
define('FOLLOWING', 'http://localhost:84/Blog_nyarwanda_CMS/public/following.php');
define('PROFILE', 'http://localhost:84/Blog_nyarwanda_CMS/public/profile.php');
define('PROFILE_EDIT', 'http://localhost:84/Blog_nyarwanda_CMS/public/profileEdit.php');
define('HASHTAG', 'http://localhost:84/Blog_nyarwanda_CMS/public/hashtag.php');
define('JOBS', 'http://localhost:84/Blog_nyarwanda_CMS/public/jobs.php');
define('NOTIFICATION', 'http://localhost:84/Blog_nyarwanda_CMS/public/NOTIFICATION.php');
// END FOLLOWS AND PROFILE_EDIT

// PRIVATE_URL_IMAGE
define('BASE_URL_PRIVATE', 'http://localhost:84/Blog_nyarwanda_CMS/private/');
define( 'NO_PROFILE_IMAGE_URL_PRIVATE_VIEW', 'private/assets/img/defaultprofileimage.png');
define( 'NO_COVER_IMAGE_URL_PRIVATE_VIEW', 'private/assets/img/defaultCoverImage.png');
// END_PRIVATE_URL_IMAGE
?>