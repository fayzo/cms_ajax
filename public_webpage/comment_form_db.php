<?php 
	     $user = 'root'; $password = ''; $db = 'upand_running'; $host = '127.0.0.1'; $port = 3306;
         $conn = mysqli_connect($host, $user, $password, $db, $port);
         $mysqli = new mysqli($host, $user, $password, $db, $port);
         
         if (mysqli_connect_errno()) {
         	die("database connection failed:" .mysqli_connect_error().
         	"(".mysqli_connect_errno().")"
         	);
         }
         
        $title = $conn->real_escape_string($_POST['title']);
		$athors = $conn->real_escape_string($_POST['athors']);
		$textarea = $conn->real_escape_string($_POST['textarea']);
		$email = $conn->real_escape_string($_POST['email']);
		$date = $conn->real_escape_string($_POST['date']);
		$address = $conn->real_escape_string($_POST['address']);
		$country = $conn->real_escape_string($_POST['country']);
        $state = $conn->real_escape_string($_POST['state']);
        $id = $conn->real_escape_string($_POST['RowID']);
        $approved = $conn->real_escape_string($_POST['approved']);
        
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
        // $upload = 'uploads/'; // upload directory
		$fileName =$mysqli->real_escape_string(strtolower($_FILES['image']['name']));
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
		    	// $sql = $conn->query("SELECT * FROM comment WHERE title = '$title'");
		    	// if ($sql->num_rows > 0)
		    	//    exit("Country With This Name Already Exists!");
		    	// else {
		            $conn->query("INSERT INTO comment (image, title, athors, textarea, email, date, address, country, state, post_comment, approved) 
		    		VALUES ('$fileName','$title','$athors', '$textarea','$email','$date','$address','$country','$state','$id','$approved')");
		            exit('Country Has Been Inserted!');
		    	// }
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
?>