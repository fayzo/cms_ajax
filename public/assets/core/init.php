<?php 
include('database/db.php');
include('class/Users.php');
include('class/Home.php');
include('class/Comment.php');
include('class/Posts.php');
include('class/Follow.php');

define('BASE_URL_LINK_ALL', 'http://localhost/cms_ajax/assets/');
define('BASE_URL_LINK', 'http://localhost/cms_ajax/public/assets/');
// SETTING FILE
define('LOGIN', 'http://localhost/cms_ajax/public/include/login.php');
define('LOGOUT', 'http://localhost/cms_ajax/public/include/logout.php');
define('LOCKSCREEN_LOGIN', 'http://localhost/cms_ajax/public/include/lockscreen.php');
define('FORGET_PASSPOWRD', 'http://localhost/cms_ajax/public/include/forgotpassword.php');
define('CREATE_PASSPOWRD', 'http://localhost/cms_ajax/public/include/createpassword.php');
// END SETTING FILE
define('HOME', 'http://localhost/cms_ajax/public/home.php');
define('FOLLOWERS', 'http://localhost/cms_ajax/public/followers.php');
define('FOLLOWING', 'http://localhost/cms_ajax/public/following.php');
define('PROFILE', 'http://localhost/cms_ajax/public/profile.php');
define('PROFILE_EDIT', 'http://localhost/cms_ajax/public/profileEdit.php');
define('HASHTAG', 'http://localhost/cms_ajax/public/hashtag.php');
define('JOBS', 'http://localhost/cms_ajax/public/jobs.php');
define('NOTIFICATION', 'http://localhost/cms_ajax/public/NOTIFICATION.php');
define('SETTINGS', 'http://localhost/cms_ajax/public/settings.php');
// PRIVATE_URL_VIEW
define('BASE_URL_PUBLIC', 'http://localhost/cms_ajax/public/');
define( 'NO_PROFILE_IMAGE_URL', 'image/users_profile_cover/defaultprofileimage.png');
define( 'NO_COVER_IMAGE_URL', 'image/users_profile_cover/defaultCoverImage.png');
// END_PRIVATE_URL_VIEW
?>