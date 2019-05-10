<?php 
include('database/db.php');
include('class/Users.php');
include('class/Home.php');
include('class/Comment.php');
include('class/Posts.php');
include('class/Follow.php');

define('BASE_URL_LINK_ALL', 'http://localhost:84/Blog_nyarwanda_CMS/assets/');
define('BASE_URL_LINK', 'http://localhost:84/Blog_nyarwanda_CMS/public/assets/');
// SETTING FILE
define('LOGIN', 'http://localhost:84/Blog_nyarwanda_CMS/public/include/login.php');
define('LOGOUT', 'http://localhost:84/Blog_nyarwanda_CMS/public/include/logout.php');
define('LOCKSCREEN_LOGIN', 'http://localhost:84/Blog_nyarwanda_CMS/public/include/lockscreen.php');
define('FORGET_PASSPOWRD', 'http://localhost:84/Blog_nyarwanda_CMS/public/include/forgotpassword.php');
define('CREATE_PASSPOWRD', 'http://localhost:84/Blog_nyarwanda_CMS/public/include/createpassword.php');
// END SETTING FILE
define('HOME', 'http://localhost:84/Blog_nyarwanda_CMS/public/home.php');
define('FOLLOWERS', 'http://localhost:84/Blog_nyarwanda_CMS/public/followers.php');
define('FOLLOWING', 'http://localhost:84/Blog_nyarwanda_CMS/public/following.php');
define('PROFILE', 'http://localhost:84/Blog_nyarwanda_CMS/public/profile.php');
define('PROFILE_EDIT', 'http://localhost:84/Blog_nyarwanda_CMS/public/profileEdit.php');
define('HASHTAG', 'http://localhost:84/Blog_nyarwanda_CMS/public/hashtag.php');
define('JOBS', 'http://localhost:84/Blog_nyarwanda_CMS/public/jobs.php');
define('NOTIFICATION', 'http://localhost:84/Blog_nyarwanda_CMS/public/NOTIFICATION.php');
define('SETTINGS', 'http://localhost:84/Blog_nyarwanda_CMS/public/settings.php');
// PRIVATE_URL_VIEW
define('BASE_URL_PUBLIC', 'http://localhost:84/Blog_nyarwanda_CMS/public/');
define( 'NO_PROFILE_IMAGE_URL', 'image/users_profile_cover/defaultprofileimage.png');
define( 'NO_COVER_IMAGE_URL', 'image/users_profile_cover/defaultCoverImage.png');
// END_PRIVATE_URL_VIEW
?>