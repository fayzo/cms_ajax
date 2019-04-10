<?php
	if (isset($_POST['key'])) {

		$user = 'root'; $password = ''; $db = 'upand_running'; $host = '127.0.0.1'; $port = 3306;
         $conn = mysqli_connect($host, $user, $password, $db, $port);
         $mysqli = new mysqli($host, $user, $password, $db, $port);
         
         if (mysqli_connect_errno()) {
         	die("database connection failed:" .mysqli_connect_error().
         	"(".mysqli_connect_errno().")"
         	);
         }

		if ($_POST['key'] == 'getRowData') {
			$rowID = $conn->real_escape_string($_POST['rowID']);
			$sql = $conn->query("SELECT countryName, shortDesc, longDesc FROM country WHERE id='$rowID'");
			$data = $sql->fetch_array();
			$jsonArray = array(
				'countryName' => $data['countryName'],
				'shortDesc' => $data['shortDesc'],
				'longDesc' => $data['longDesc'],
			);

			exit(json_encode($jsonArray));
 		}

		if ($_POST['key'] == 'getExistingData') {
			$start = $conn->real_escape_string($_POST['start']);
			$limit = $conn->real_escape_string($_POST['limit']);

			$sql = $conn->query("SELECT id, countryName FROM country LIMIT $start, $limit");
			if ($sql->num_rows > 0) {
				$response = "";
				while($data = $sql->fetch_array()) {
					$response .= '
						<tr>
							<td>'.$data["id"].'</td>
							<td  style="width:100px;"id="country_'.$data["id"].'">'.$data["countryName"].'</td>
							<td  style="width:100px;"id="country_'.$data["id"].'">'.$data["countryName"].'</td>
							<td  style="width:100px;"id="country_'.$data["id"].'">'.$data["countryName"].'</td>
							<td  style="width:100px;"id="country_'.$data["id"].'">'.$data["countryName"].'</td>
							<td  style="width:100px;"id="country_'.$data["id"].'">'.$data["countryName"].'</td>
							<td>
								<input type="button" onclick="viewORedit('.$data["id"].', \'edit\')" value="Edit" class="btn btn-primary">
								<input type="button" onclick="viewORedit('.$data["id"].', \'view\')" value="View" class="btn">
								<input type="button" onclick="deleteRow('.$data["id"].')" value="Delete" class="btn btn-danger">
							</td>
						</tr>
					';
				}
				exit($response);
			} else
				exit('reachedMax');
		}

		$rowID = $conn->real_escape_string($_POST['rowID']);

		if ($_POST['key'] == 'deleteRow') {
			$conn->query("DELETE FROM country WHERE id='$rowID'");
			exit('The Row Has Been Deleted!');
		}

		$name = $conn->real_escape_string($_POST['name']);
		$shortDesc = $conn->real_escape_string($_POST['shortDesc']);
		$longDesc = $conn->real_escape_string($_POST['longDesc']);

		if ($_POST['key'] == 'updateRow') {
			$conn->query("UPDATE country SET countryName='$name', shortDesc='$shortDesc', longDesc='$longDesc' WHERE id='$rowID'");
			exit('success');
		}

		if ($_POST['key'] == 'addNew') {
			$sql = $conn->query("SELECT id FROM country WHERE countryName = '$name'");
			if ($sql->num_rows > 0)
				exit("Country With This Name Already Exists!");
			else {
				$conn->query("INSERT INTO country (countryName, shortDesc, longDesc) 
							VALUES ('$name', '$shortDesc', '$longDesc')");
				exit('Country Has Been Inserted!');
			}
		}
	}
?>