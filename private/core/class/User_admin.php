<?php 
class User_admin{
   
    private $database;

    public function __construct()
    {
        global $db;
        $this->database=$db;
    }

     public function login($username,$email,$password,$datetime)
    {
       $mysqli= $this->database;
       $sql= $mysqli->query("SELECT admin_id FROM add_admin WHERE username ='{$username}'and password='{$password}' or email ='{$email}'and password='{$password}' ");
       $sql1= $mysqli->query("SELECT admin_id ,username,email FROM add_admin WHERE username ='{$username}'and email ='{$email}'");

        $row= $sql->fetch_assoc();
        $rows= $sql1->fetch_assoc();
    
        if ($sql->num_rows > 0) {
            $_SESSION['key'] = $row['admin_id'];
            $_SESSION['username'] = $username;
            $mysqli->query("UPDATE add_admin SET counts_login=counts_login + 1 WHERE email='$email' AND password= '$password' ");
            $mysqli->query("UPDATE add_admin SET last_login = '$datetime'  WHERE email='$email' AND password= '$password' ");
            exit ('<p style="color:green;">Success</p>');

        }else if($sql1->num_rows > 0){
            $_SESSION['keys'] = $rows['admin_id'];
            $_SESSION['keys'] = $rows['admin_id'];
            $_SESSION['username'] = $rows['username'];
            $_SESSION['email'] = $rows['email'];
            exit ('<p style="color:red;">Fail</p>');

        }else{
            exit ('<p style="color:red;">incorrect input try again</p>');
        }
    }

     public function loggedin()
    {
        if (isset($_SESSION['key'])) {
            return true;
        }else {
            return false;
        }
    }

     public function test_input($data)
    {
        $mysqli=$this->database;
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $mysqli->real_escape_string($data);
        return $data;
    }
          
    public function countUSERS()
    {
        $db =$this->database;
        $sql= $db->query('SELECT COUNT(*) FROM add_admin');
        $row_users = $sql->fetch_array();
        $total_user= array_shift($row_users);
        $array= array(0,$total_user);
        $total_users= array_sum($array);
        echo $total_users;
    }

    public function countPOSTS()
    {
        $db =$this->database;
        $sql= $db->query('SELECT COUNT(*) FROM addpost');
        $row_post = $sql->fetch_array();
        $total_post= array_shift($row_post);
        $array= array(0,$total_post);
        $total_posts= array_sum($array);
        echo $total_posts;
    }

    public function countCOMMENTS()
    {
        $db =$this->database;
        $sql= $db->query('SELECT COUNT(*) FROM comment');
        $row_comment = $sql->fetch_array();
        $total_comment= array_shift($row_comment);
        $array= array(0,$total_comment);
        $total_comments= array_sum($array);
        echo $total_comments;
    }

    public function countApprovalCOMMENTS()
    {
        $db =$this->database;
        $sql= $db->query("SELECT COUNT(*) FROM comment WHERE approved='on'");
        $row_approval = $sql->fetch_array();
        $total_approvalcomm= array_shift($row_approval);
        $array= array(0,$total_approvalcomm);
        $total_approval= array_sum($array);
        echo $total_approval;
    }

    public function countUnapprovalCOMMENTS()
    {
        $db =$this->database;
        $sql= $db->query("SELECT COUNT(*) FROM comment WHERE approved='off'");
        $row_unapproval = $sql->fetch_array();
        $total_unapprovalcomm= array_shift($row_unapproval);
        $array= array(0,$total_unapprovalcomm);
        $total_unapproval= array_sum($array);
        echo $total_unapproval;
    }

    public function countPages()
    {
        $db =$this->database;
        $sql= $db->query('SELECT COUNT(*) FROM pages');
        $row_pages = $sql->fetch_array();
        $total_page= array_shift($row_pages);
        $array= array(4200,$total_page);
        $total_pages= array_sum($array);
        echo $total_pages;
    }

    public function countVISITORS()
    {
        $db =$this->database;
        $sql= $db->query('SELECT COUNT(*) FROM visitors');
        $row_visitors = $sql->fetch_array();
        $total_visitor= array_shift($row_visitors);
        $array= array(20234,$total_visitor);
        $total_visitors= array_sum($array);
        echo $total_visitors;
    }

    public function table_USERS_Activities()
    {
        $db =$this->database;
		$increment= 1;
        $result= $db->query("SELECT * FROM add_admin");
		 if ($result->num_rows > 0) {

           while($row= $result->fetch_array()){ 

         echo '  <tr>
                     <td> '.$increment++.' </td>
                     <td class="text-center">
                         <div class="avatar">
                        '.((!empty($row["profile_image"]))?
                             '<img class="img-avatar"
                                 src="assets/image/users/user_image_profile/'.$row["profile_image"].'"
                                 width="80px" alt="'.$row["email"].'">'
                             :
                            ' <img class="img-avatar" src="assets/image/users/user_image_profile/defaultprofileimage.png"
                                 width="80px" alt="'.$row["email"].'">'
                             ).'
                             <span class="avatar-status badge-success"></span>
                         </div>
                     </td>
                     <td>
                         <div>'.$row["lastname"].'</div>
                         <div class="small text-muted">
                             <span>'. $this->lengths($this->timeAgo($row["date"])).' |Registered :'.$this->timeAgo($row["date"]).'
                             </span>
                         </div>
                         <!-- -Jan 1, 2015 -->
                     </td>
                     <td class="text-center">
                         <!-- <i class="flag-icon flag-icon-rw h4 mb-0" id="us" title="us"></i> -->
                         <i class="flag-icon flag-icon-'.$row["country"].' h4 mb-0"
                             id="'.strtolower($row["country"]).'" title="us"></i>
                     </td>
                     <td>
                         <div class="clearfix">
                             <div class="text-center">
                                 <strong>'.$row["counts_login"].'%</strong>
                             </div>
                             <div>
                                 <small class="text-muted">'.date('M j, Y',strtotime($row["date"])).'-'.date('M j, Y',strtotime($row["last_login"])).'</small>
                                 <!-- Jun 11, 2015 - Jul 10, 2015 -->
                             </div>
                         </div>
                         <div class="progress progress-xs">
                            '.$this->Users_usage_dashboard($row["counts_login"]).' 
                         </div>
                     </td>
                     <td class="text-center">
                         <i class="fa fa-cc-mastercard" style="font-size:24px"></i>
                     </td>
                     <td>
                         <div class="small text-muted">Last login</div>
                         <small>'.$this->timeAgo($row["last_login"]).'</small>
                     </td>
                 </tr>';

                 } 
           }
     }


    public function timeAgo($datetime)
    {
        $mysqli= $this->database;
        $time= strtotime($datetime);
        $current= time($datetime);
        $second= $current - $time;
        $minute= round($second / 60);
        $hour= round($second / 3600);
        $month= round($second / 2600640);

        if ($second <= 60) {
            # code...
             if ($second == 0 ) {
                 # code...
                 return 'now'; 
              }else {
                  # code...
                  return $second.'s'; 
              }

        }elseif ($minute <= 60) {
            # code...
             return $minute.'m'; 
        }elseif ($hour <= 24) {
            # code...
             return $hour.'h'; 

        }elseif ($month <= 12) {
            # code...
             return date('M j',$time); 

        }else { 
            # code...
             return date('M j, Y',$time); 
        }

    }
    public function lengths($date){
        if(strlen($date) == 11  || strlen($date) == 10) {
            return '<p class="btn btn-danger btn-sm">Old</p>';
        }else{
            return '<p class="btn btn-primary btn-sm">New</p>';
        }
    }

    function Users_usage_dashboard($usage){
        if($usage == 0){
            $variable = 1;
        }else{
            $variable = $usage;
        }

    switch ($variable) {
        case $variable <= 5 :
            # code...
            return '<div style="font-size:10px;" class="progress-bar bg-danger" role="progressbar"
                    style="width: '.$variable.' %" aria-valuenow="1" aria-valuemin="0"
                    aria-valuemax="100">'.$variable.'%</div>';
            break;
        case $variable <= 10 :
            # code...
            return '<div style="font-size:10px;" class="progress-bar bg-danger" role="progressbar"
                    style="width: '.$variable.'%" aria-valuenow="'.$variable.'" aria-valuemin="0"
                    aria-valuemax="100">'.$variable.'%</div>';
            break;
        case $variable <= 15 :
            # code...
            return '<div style="font-size:10px;" class="progress-bar bg-danger" role="progressbar"
                    style="width: '.$variable.'%" aria-valuenow="'.$variable.'" aria-valuemin="0"
                    aria-valuemax="100">'.$variable.'%</div>';
            break;
        case $variable <= 25:
            # code...
            return '<div style="font-size:10px;" class="progress-bar bg-warning" role="progressbar"
                    style="width: '.$variable.'%" aria-valuenow="'.$variable.'" aria-valuemin="0"
                    aria-valuemax="100">'.$variable.'%</div>';
            break;
        case $variable <= 35:
            # code...
            return '<div style="font-size:10px;" class="progress-bar bg-info" role="progressbar"
                    style="width: '.$variable.'%" aria-valuenow="'.$variable.'" aria-valuemin="0"
                    aria-valuemax="100">'.$variable.'%</div>';
            break;
        case $variable <= 50:
            # code...
            return '<div style="font-size:10px;" class="progress-bar bg-info" role="progressbar"
                    style="width: '.$variable.'%" aria-valuenow="'.$variable.'" aria-valuemin="0"
                    aria-valuemax="100">'.$variable.'%</div>';
            break;
        case $variable <= 60:
            # code...
            return '<div style="font-size:10px;" class="progress-bar bg-info" role="progressbar"
                    style="width: '.$variable.'%" aria-valuenow="'.$variable.'" aria-valuemin="0"
                    aria-valuemax="100">'.$variable.'%</div>';
            break;
        case $variable <= 75:
            # code...
            return '<div style="font-size:10px;" class="progress-bar bg-primary" role="progressbar"
                    style="width: '.$variable.'%" aria-valuenow="'.$variable.'" aria-valuemin="0"
                    aria-valuemax="100">'.$variable.'%</div>';
            break;
        default:
            # code...
            return '<div style="font-size:10px;" class="progress-bar bg-success" role="progressbar"
                    style="width: '.$variable.'%" aria-valuenow="'.$variable.'" aria-valuemin="0"
                    aria-valuemax="100">'.$variable.'%</div>';
            break;
        }
    } 
} 
$user_admin = new User_admin();

?>