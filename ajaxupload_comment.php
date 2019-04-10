<?php 
	     $user = 'root'; $password = ''; $db = 'upand_running'; $host = '127.0.0.1'; $port = 3306;
         $conn = mysqli_connect($host, $user, $password, $db, $port);
         $mysqli = new mysqli($host, $user, $password, $db, $port);
         
         if (mysqli_connect_errno()) {
         	die("database connection failed:" .mysqli_connect_error().
         	"(".mysqli_connect_errno().")"
         	);
         }
         
        $title = $conn->real_escape_string($_POST['title_comment']);
		$athors = $conn->real_escape_string($_POST['athors_comment']);
		$textarea = $conn->real_escape_string($_POST['textarea_comment']);
		$email = $conn->real_escape_string($_POST['email_comment']);
		$date = $conn->real_escape_string($_POST['date_comment']);
		$address = $conn->real_escape_string($_POST['address_comment']);
		$country = $conn->real_escape_string($_POST['country_comment']);
        $state = $conn->real_escape_string($_POST['state_comment']);
		$rowID = $conn->real_escape_string($_POST['rowID']);
		$fileName =$mysqli->real_escape_string(strtolower($_FILES['image']));
        
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
        // $upload = 'uploads/'; // upload directory
		// $img = $_FILES['image']['name'];
		// $tmp = $_FILES['image']['tmp_name'];
		   
		// if ($_POST['key'] == 'addpost') {
   	          $fileName =$mysqli->real_escape_string(strtolower(rand(100,1000).$_FILES['image']['name']));
            // get uploaded file's extension
          	// $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
              $fileExt = explode('.', $fileName);
              $fileActualExt = strtolower(end($fileExt));
          	
          	// can upload same image using rand function
          	// $final_image = rand(100,1000).$img;
          
          	// check's valid format
        if(in_array($fileActualExt, $valid_extensions)) {					
			 $message  = $_FILES['image']['name'].' <span style = "color:green";>was upload succsessful</span>';
   		     // $upload =strtolower($final_image);
   		     $fileName = strtolower(rand(100,1000).$_FILES['image']['name']);
   		     $fileTmpName = $_FILES['image']['tmp_name'];
   		     $fileDestination = 'uploads/'. $fileName;	
   		
   		    if(move_uploaded_file($fileTmpName,$fileDestination)) {
   		    	// echo "<img src='$upload' />";
                  //include database configuration file
		    	$sql = $conn->query("SELECT * FROM comment WHERE title = '$title'");
		    	if ($sql->num_rows > 0)
		    	   exit("Country With This Name Already Exists!");
		    	else {
		            $conn->query("INSERT INTO comment (image, title, athors, textarea, email, date, address, country, state) 
		    		VALUES ('$fileName','$title','$athors', '$textarea','$email','$date','$address','$country','$state')");
					exit('Country Has Been Inserted!');
					// $conn->query("UPDATE comment SET image='$fileName',title='$title', athors='$athors', textarea='$textarea',
			        // email='$email', date='$date', address='$address', country='$country', state='$state' WHERE post_id='$rowID'");
			        // exit('success');
		    	}
			}
		  }else {
   
           switch ($_FILES['image']['error']) {
                case 2:
                    $message  = $_FILES['image']['name'].' <span style = "color:red";>is too big</span>';
                    break;
                 case 4:
                    $message  = $_FILES['image']['name'].' <span style = "color:red";>No file selected</span>';
                    break;
                default:
                    $message  = $_FILES['image']['name'].' <span style = "color:red";>sorry that type of file is not allowed</span>';
                    break;
                  }
   	          }
		// }
		$conn->close();
?>