 <?php 
include('../init.php');
if ($_REQUEST['key']) {

  if ($_REQUEST['key'] == 'lang') {
        # code...
	     $id = $conn->real_escape_string($_REQUEST['id']);
	     $lang = $conn->real_escape_string($_REQUEST['lang']);
       $conn->query("UPDATE add_admin SET language ='$lang' WHERE admin_id= '$id' ");
       $sql= $conn->query("SELECT admin_id, language FROM add_admin WHERE admin_id = '$id' ");
       $data = $sql->fetch_array(); 
       $language = array(
           'language' => $data['language'],
        );
        // echo ($conn)? 'good':"ERROR: Could not able to execute $sql.".mysqli_error($conn);
       exit(json_encode($language));
     }
}
?>