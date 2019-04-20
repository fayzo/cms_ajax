<?php 
include('../init.php');

if ($_REQUEST['key']) {

 if ($_REQUEST['key'] == 'color') {
			$id = $conn->real_escape_string($_REQUEST['id']);
			$color = $conn->real_escape_string($_REQUEST['color']);
            $conn->query("UPDATE add_admin SET color='$color' WHERE admin_id='$id'");
            $sql= $conn->query("SELECT admin_id,color FROM add_admin WHERE admin_id = '$id' ");
            // echo ($db)? 'good':"ERROR: Could not able to execute $sql.".mysqli_error($db);
        	$data = $sql->fetch_array();
        	$jsonArrays = array(
        		'admin_id' => $data['admin_id'],
        		'color' => $data['color'],
        	);
           exit(json_encode($jsonArrays));
      }
}
?>