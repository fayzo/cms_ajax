<?php 
include('../init.php');

if ($_REQUEST['key']) {

 if ($_REQUEST['key'] == 'background') {
			$id = $conn->real_escape_string($_REQUEST['id']);
			$background = $conn->real_escape_string($_REQUEST['background']);
            $conn->query("UPDATE add_admin SET background='$background' WHERE admin_id='$id'");
            $sql= $conn->query("SELECT admin_id,background FROM add_admin WHERE admin_id = '$id' ");
            // echo ($db)? 'good':"ERROR: Could not able to execute $sql.".mysqli_error($db);
        	$data = $sql->fetch_array();
        	$jsonArrays = array(
        		'admin_id' => $data['admin_id'],
        		'background' => $data['background'],
        	);
           exit(json_encode($jsonArrays));
      }
}
?>