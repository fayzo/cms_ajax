<?php
include('../init.php');

	if (isset($_POST['key'])) {

		if ($_POST['key'] == 'viewORedit') {
			$rowID = $conn->real_escape_string($_POST['rowID']);
			$sql = $conn->query("SELECT firstname, lastname, username, password,
			 email, address, address2, country, state FROM add_admin WHERE admin_id='$rowID'");
			$data = $sql->fetch_array();
			$jsonArrays = array(
				'firstname'=> $data['firstname'],
                'lastname'=> $data['lastname'],
                'username'=> $data['username'],
                'password'=> $data['password'],
                'email'=> $data['email'],
                'address'=> $data['address'],
                'address2'=> $data['address2'],
                'country'=> $data['country'],
                'state'=> $data['state'],
			);
			
			exit(json_encode($jsonArrays));
 		}

		if ($_POST['key'] == 'fetch_admin') {
			$start = $conn->real_escape_string($_POST['start']);
			$limit = $conn->real_escape_string($_POST['limit']);

			$sql = $conn->query("SELECT * FROM add_admin LIMIT $start, $limit");
			if ($sql->num_rows > 0) {
				$response = "";
				$increment=0;
				while($row = $sql->fetch_array()) {
			     	$increment++;
					$response .= '
						<tr>
							<td>'.$increment.'</td>
							<td  style="width:100px;"id="firstname'.$row["admin_id"].'">'.$row["firstname"].'</td>
							<td  style="width:100px;"id="lastname'.$row["admin_id"].'">'.$row["lastname"].'</td>
							<td  style="width:100px;"id="username'.$row["admin_id"].'">'.$row["username"].'</td>
							<td  style="width:100px;"id="password'.$row["admin_id"].'">'.$row["password"].'</td>
							<td  style="width:100px;"id="email'.$row["admin_id"].'">
						    '.
                            (strlen($row["email"]) > 20 ?
                            $row["email"] = substr($row["email"],0,10)."..."
                            : $row["email"])
							.'
							</td>
							<td  style="width:100px;"id="country'.$row["admin_id"].'">'.$row["country"].'</td>
							<td>
								<input type="button" onclick="viewORedits('.$row["admin_id"].', \'edit\')" value="Edit" class="btn btn-primary">
								<input type="button" onclick="viewORedits('.$row["admin_id"].', \'view\')" value="View" class="btn">
								<input type="button" onclick="deleteRow('.$row["admin_id"].')" value="Delete" class="btn btn-danger">
								<button type="button" name="update_profile_id" id="'.$row["admin_id"].'" class="btn btn-primary update_profile_id" role="button"><span class="fa fa-image"></button>
							</td>
						</tr>
					';
				}
				exit($response);
			} else
				exit('Max');
		}

		if ($_POST['key'] == 'image') {
        	$rowID = $db->real_escape_string($_POST['id']);
        	$sql = $db->query("SELECT admin_id, username, profile_image , cover_image FROM add_admin WHERE admin_id=' $rowID'");
        	$data = $sql->fetch_array();
        	$jsonArrays = array(
        		'admin_id' => $data['admin_id'],
        		'username' => $data['username'],
        		'profile_image' => $data['profile_image'],
        		'cover_image' => $data['cover_image'],
        	);
        	exit(json_encode($jsonArrays));
		}

		$rowID = $conn->real_escape_string($_POST['rowID']);

		if ($_POST['key'] == 'deleteRow') {
			$conn->query("DELETE FROM add_admin WHERE admin_id='$rowID'");
			exit('The Row Has Been Deleted!');
		}

		$firstname = $conn->real_escape_string($_POST['firstname']);
		$lastname = $conn->real_escape_string($_POST['lastname']);
		$username = $conn->real_escape_string($_POST['username']);
		$password = $conn->real_escape_string($_POST['password']);
		$email = $conn->real_escape_string($_POST['email']);
		$address = $conn->real_escape_string($_POST['address']);
		$address2 = $conn->real_escape_string($_POST['address2']);
		$country = $conn->real_escape_string($_POST['country']);
		$state = $conn->real_escape_string($_POST['state']);

		if ($_POST['key'] == 'update_Row') {
			$conn->query("UPDATE add_admin SET firstname='$firstname', lastname='$lastname',
			 username='$username', password='$password',email='$email', address2='$address2',
			  address='$address', country='$country', state='$state' WHERE admin_id='$rowID'");
			exit('success');
		}

		if ($_POST['key'] == 'add_admin') {
			$sql = $conn->query("SELECT * FROM add_admin WHERE lastname = '$lastname'");
			if ($sql->num_rows > 0)
				exit("Country With This Name Already Exists!");
			else {
				$conn->query("INSERT INTO add_admin (firstname, lastname, username, password, email, address, address2, country, state) 
							VALUES ('$firstname', '$lastname', '$username', '$password','$email','$address','$address2','$country','$state')");
				exit('Country Has Been Inserted!');
			}
		}
		$conn->close();
	}
?>