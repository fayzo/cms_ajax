<?php
include "../core/init.php";

session_start();
$users->forgotUsernameCountsTodelete('users',
array('forgotUsernameCounts' => 0, ),$_SESSION['keycreate']);

session_unset($_SESSION['key']);
session_unset($_SESSION['keycreate']);
session_destroy();
header ('location: '.LOGIN.'');


?>