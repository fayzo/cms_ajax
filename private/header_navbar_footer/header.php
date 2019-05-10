<?php 
session_start();
include "core/init.php";

if ($user_admin->loggedin() == false) {
	header('location: '.LOGIN.'');
}

$sql= $conn->query("SELECT admin_id, color,background ,language FROM add_admin WHERE admin_id = $_SESSION[key]");
$data = $sql->fetch_array(); 

if(!empty($data['language'])){
    $_SESSION['language'] = $data['language'];
}

 if (!isset($_SESSION['language'])){
 		$_SESSION['lang'] = "en";
}else if (isset($_SESSION['language']) && !empty($_SESSION['language'])) {
		$_SESSION['lang'] = $_SESSION['language'];
}
 require_once "../assets/languages/".$_SESSION['lang']. ".php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CONTENT MANAGEMENT SYSTEMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1" >

    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/main.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/navbar_blac.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/navbar_yellow.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/navbar_blue.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/navbar_purple.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/navbar_rose.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/navbar_green.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/navbar_chocolate.css" rel="stylesheet">

    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/dropdown.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/siderbarResponsive.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/boxChat.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/directChat.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/cardboxChat.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/profile.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/timeline.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/mailbox.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/calendar.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/follow.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/profileEdit.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/whoTofollow.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/upload_profile_imagee.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/home.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/background.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>plugin/iCheck/flat/blue.css"  rel="stylesheet">
    <!-- <link href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/AdminLTE.css" rel="stylesheet"> -->

    <link href="<?php echo BASE_URL_LINK_ALL ;?>icon/google_icon/google_icons.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>icon/flag-icon-css-master/css/flag-icon.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>icon/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL_LINK_ALL ;?>plugin/Ionicons/css/ionicons.min.css" rel="stylesheet">

    
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_LINK_ALL ;?>dist/css/responsive.bootstrap4.min.css">
  
    <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="<?php echo BASE_URL_LINK_ALL ;?>plugin/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="<?php echo BASE_URL_LINK_ALL ;?>plugin/bootstrap-daterangepicker/daterangepicker.css"> -->
  <!-- bootstrap wysihtml5 - text editor -->
  <!-- <link rel="stylesheet" href="<?php echo BASE_URL_LINK_ALL ;?>plugin/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->
    <!-- <link   href="fontawesome_5_4/css/fontawesome.css" rel="stylesheet">
    <link   href="fontawesome_5_4/css/solid.css" rel="stylesheet">
    <link   href="fontawesome_5_4/css/regular.css" rel="stylesheet">
    <link   href="fontawesome_5_4/css/brands.css" rel="stylesheet"> -->
    <!-- <link   href="fontawesome_5_4/css/all.css" rel="stylesheet"> -->
    <!-- <script src="fontawesome_5_4/js/fontawesome.js"></script>
    <script src="fontawesome_5_4/js/solid.js"></script>
    <script src="fontawesome_5_4/js/regular.js"></script>
    <script src="fontawesome_5_4/js/brands.js"></script> -->
    <!-- <script src="<?php echo BASE_URL_LINK_ALL ;?>icon/fontawesome_5_4/js/all.js"></script> -->
    <script src="<?php echo BASE_URL_LINK_ALL ;?>dist/js/country.js"></script>


    <script>
     function colors(requests, id) {
        var xhr = new XMLHttpRequest();
        var url = "core/ajax_db/color_db.php?key=color" + '&id=' + id + '&color=' + requests;
        xhr.open("POST", url, true);
        xhr.send();

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var json = JSON.parse(xhr.responseText);
                var sc = document.body;
                sc.setAttribute("id", json.color);
                
                // console.log(json.admin_id + ", " + json.color);
                // console.log(xhr.responseText);
                // location.reload();
                // if (xhr.responseText.indexOf('color') >= 0) {
                //     window.location = 'admin.php';
                // }
            };
        }
    }

     function background(requests, id) {
        var xhr = new XMLHttpRequest();
        var url = "core/ajax_db/background_db.php?key=background" + '&id=' + id + '&background=' + requests;
        xhr.open("POST", url, true);
        xhr.send();

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var json = JSON.parse(xhr.responseText);
                var sc = document.body;
                sc.setAttribute("class", json.background);
                
                // console.log(json.admin_id + ", " + json.background);
                // console.log(xhr.responseText);
                // location.reload();
                // if (xhr.responseText.indexOf('color') >= 0) {
                //     window.location = 'admin.php';
                // }
            };
        }
    }

    function language(lang, id) {
        var xmlhttp = new XMLHttpRequest();
        var url = "core/ajax_db/languange_db.php?key=lang" + '&id=' + id + '&lang=' + lang;
        xmlhttp.open("POST", url, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                var sc = document.body;
                sc.setAttribute("class", myObj.language);
                var lang = document.body.className;
                if (myObj.language == 'rw') {
                    document.getElementById('welcome-json').innerHTML = rw.welcome;
                } else if (myObj.language == 'fr') {
                    document.getElementById('welcome-json').innerHTML = fr.welcome;
                } else {
                    document.getElementById('welcome-json').innerHTML = en.welcome;
                }
                console.log("Json parsed data is: " + JSON.stringify(myObj));
                // console.log(myObj);
            }
        };
    }
    </script>
    <style>
    body{
        background-color: #f8f9fa!important;
        padding-top: 3rem !important;
    }
    html,body { font-size: 14px }
    </style>

</head>

<body class="<?php echo $data['language']; ?>  <?php echo $data['background']; ?>" style="padding-top:5rem;" id="<?php echo $data['color']; ?>">

