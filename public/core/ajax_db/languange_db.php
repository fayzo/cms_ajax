 <?php 
include('../init.php');
if ($_REQUEST['key']) {

  if ($_REQUEST['key'] == 'lang') {
        # code...
	     $id = $db->real_escape_string($_REQUEST['id']);
	     $lang = $db->real_escape_string($_REQUEST['lang']);
       $db->query("UPDATE users SET language ='$lang' WHERE user_id= '$id' ");
       $sql= $db->query("SELECT user_id, language FROM users WHERE user_id = '$id' ");
       $data = $sql->fetch_array(); 
       $language = array(
           'language' => $data['language'],
        );
        // echo ($conn)? 'good':"ERROR: Could not able to execute $sql.".mysqli_error($conn);
       exit(json_encode($language));
     }
}
?>