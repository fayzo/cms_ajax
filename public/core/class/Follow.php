<?php 
class Follow extends Home
{
    public function checkfollow($follow_id,$user_id)
    {
       $mysqli= $this->database;
       $query= "SELECT * FROM follow WHERE sender = $user_id AND receiver = $follow_id";
       $result=$mysqli->query($query);
       while ($follow= $result->fetch_array()) {
           # code...
           return $follow;
       }
    }

      public function followBtn($profile_id,$user_id)
    {
       $data= $this->checkfollow($profile_id,$user_id);

       if ($this->loggedin() == true) {
           # code...
           if ($profile_id != $user_id) {
               # code...
               if ($data['receiver'] == $profile_id) {
                   # code...followin Btn
                   return '
                   <button type="button" class="btn btn-primary btn-sm following-btn follow-btn" data-follow="'.$profile_id.'"  >Following</button>
                   ';
               }else {
                   # code...follow btn
                    return '
                   <button type="button" class="btn btn-primary btn-sm follow-btn" data-follow="'.$profile_id.'"  ><i class="fa fa-user-plus"></i>Follow</button>
                   ';
               }
           }else {
               # code...
               return ' 
                <button type="button" class="btn btn-primary btn-sm" onclick=location.href="'.BASE_URL_PUBLIC.'profileEdit.php" >Edit Profile</i></button>
                ';
           }

       }else {
           # code...
          return ' 
           <button type="button" class="btn btn-primary btn-sm" onclick=location.href="'.BASE_URL_PUBLIC.'index.php" ><i class="fa fa-user-plus"></i>Follow</button>
           ';
       }

    }

}
$follow = new follow();
?>