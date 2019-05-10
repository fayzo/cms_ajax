<?php
include('../init.php');
if(isset($_POST['key'])){

if ($_POST['key'] == 'image') {
	$rowID = $db->real_escape_string($_POST['id']);
	$sql = $db->query("SELECT user_id, username, profile_img , cover_img FROM users WHERE user_id=' $rowID'");
	$data = $sql->fetch_array();
	$jsonArrays = array(
		'user_id' => $data['user_id'],
		'username' => $data['username'],
		'profile_image' => $data['profile_img'],
		'cover_image' => $data['cover_img'],
	);
	exit(json_encode($jsonArrays));
}


    if($_POST['key'] == 'career'){

    $firstname= $users->test_input($_POST['firstname']);
    $lastname= $users->test_input($_POST['lastname']);
    $career= $users->test_input($_POST['career']);
    $id= $users->test_input($_POST['id']);

    if(!preg_match("/^[a-zA-Z ]*$/", $firstname)){
        exit('<p style="color:red;">Only letters and white space allowed</p>');
    }else if(!preg_match("/^[a-zA-Z ]*$/", $lastname)){
        exit('<p style="color:red;">Only letters and white space allowed</strong> </p>');
    }else if (strlen($firstname) > 20) {
         exit('<p style="color:red;">Firstname must be between 2-20 character</p>');
    }else if (strlen($lastname) < 2) {
         exit('<p style="color:red;"> Lastname is too short</p>');
    }else if (strlen($career) < 4) {
         exit('<p style="color:red;"> Your Career is too short</p>');
    }else{
          
        $users->update('users',array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'career' => $career,
        ),$id);

      }
   }
   
    if($_POST['key'] == 'aboutme'){

    $education= $users->test_input($_POST['education']);
    $diploma= $users->test_input($_POST['diploma']);
    $location= $users->test_input($_POST['location']);
    $skills= $users->test_input($_POST['skills']);
    $hobbys= $users->test_input($_POST['hobbys']);
	$id= $users->test_input($_POST['id']);
	
	if(empty($education)|| empty($diploma)|| empty($location)|| empty($skills)|| empty($hobbys)){
		exit('<div class="alert alert-danger alert-dismissible fade show text-center">
                    <button class="close" data-dismiss="alert" type="button">
                        <span>&times;</span>
                    </button>
                    <strong> Try to Fill In</strong></div>');
    }else{
        $users->update('users',array(
            'education' => $education,
            'diploma' => $diploma,
            'location' => $location,
            'skills' => $skills,
            'hobbys' => $hobbys,
        ),$id);

      }
   }
}
?>