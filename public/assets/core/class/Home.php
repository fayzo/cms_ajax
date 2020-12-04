<?php 
class Home extends Users{

     public function usersNameId($username)
    {
        $mysqli= $this->database;
        $query= $mysqli->query("SELECT user_id FROM users WHERE username= '$username'");
        $row= $query->fetch_array();
        return $row;
        $mysqli->close();
    }

        public function userData($user_id)
    {
        $mysqli= $this->database;
        $query= $mysqli->query("SELECT * FROM users WHERE user_id= '{$user_id}' ");
        $row= $query->fetch_array();
        return $row;
        $mysqli->close();
    }

    public function search($search)
    {
        $mysqli= $this->database;
        $param= '%'.$search.'%';
        $query = "SELECT user_id, username, email, career,hobbys, profile_img FROM users Where username LIKE '{$param}' OR firstname LIKE '{$param}' OR lastname LIKE '{$param}' ";
        $result= $mysqli->query($query);
        $contacts = array();
        while ($row= $result->fetch_array()) {
            $contacts[] = array(
            'user_id' => $row['user_id'],
            'username' => $row['username'],
            'email' => $row['email'],
            'career' => $row['career'],
            'hobbys' => $row['hobbys'],
            'profile_img' => $row['profile_img']
           );
        }
        return $contacts; // Return the $contacts array
        $mysqli->close();
    }

     public function uploadImageProfiles($files)
    {
        $mysqli= $this->database;
        $filename= basename($files['name']);
        $fileTmpName= $files['tmp_name'];
        $filesize= $files['size'];
        $error= $files['error'];

        $fileExt = explode('.', $filename);
        $fileActualExt = strtolower(end($fileExt));
        $allower_ext = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions

        if (in_array($fileActualExt,$allower_ext) == true) {
            # code...
             if ($error == 0) {
                 if ($filesize <= 100*1024) {
                     # code...
                     $filename= basename($files['name']);
                     $filenames = (strlen($filename) > 10)? 
                     strtolower(rand(100,1000).substr($filename,0,4).".".$fileActualExt):
                     strtolower(rand(100,1000).$filename);
   		             $fileTmpName = $files['tmp_name'];
                    //  $file_dest= 'uploads/posts/'.$filenames;
                     $file_dest= $_SERVER['DOCUMENT_ROOT'].'Blog_nyarwanda_CMS/public/uploads/posts/'.$filenames;
                     move_uploaded_file($fileTmpName,$file_dest);
                   
                    return substr($file_dest,42);

                 }else {
                      switch ($files['error']) {

                        case 2:
                            exit( $files['name'].' <span style = "color:red";>is too big</span>');
                            break;
                         case 4:
                             exit( $files['name'].' <span style = "color:red";>No file selected</span>');
                            break;
                        default:
                             exit( $files['name'].' <span style = "color:red";>sorry that type of file is not allowed</span>');
                            break;
                       }
                 }
             }

        }else {
                exit( "the extension is not allowed");
        }
    }

    public function uploadPostsImage($file)
    {

        $insertValuesSQL ="";
        $filename = $file['name'];
        $fileTmpName = $file["tmp_name"];
        $targetDir = $_SERVER['DOCUMENT_ROOT'].'Blog_nyarwanda_CMS/public/uploads/posts/';
        $allowTypes = array('jpg','png','jpeg','gif');
        
        foreach($filename as $key => $value){
            // File upload path
            $fileName = basename($filename[$key]);
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

             $filenames = (strlen($fileName) > 10)? 
                     strtolower(date('Y').'_'.rand(10,100).substr($fileName,0,4).".".$fileActualExt):
                     strtolower(date('Y').'_'.rand(10,100).$fileName);

            $valued[] = $filenames;

            $targetFilePath = $targetDir . $filenames;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                $fileTmpName = $file["tmp_name"];
                move_uploaded_file($fileTmpName[$key], $targetFilePath);
            }
        }
        
        # Build the values
        $filenamedb = implode("=", $valued);
        return  $filenamedb;

    }

    public function tweets($user_id,$limit)
    {
        $mysqli= $this->database;
        $sql="SELECT * FROM tweets LEFT JOIN users ON tweetBy= user_id WHERE tweetBy = $user_id AND retweet_id='0' OR tweetBy= user_id AND retweet_by= $user_id LIMIT $limit ";
        $query= $mysqli->query($sql);
        $tweets=array();
        while ($row= $query->fetch_assoc()) {
            # code...
             $tweets[]= $row;
        }

                          
                               foreach ($tweets as $tweet) {
                                $likes= $this->likes($user_id,$tweet['tweet_id']);
                                $retweet= $this->checkRetweet($tweet['tweet_id'],$user_id);
                                 $user= $this->userData($tweet['retweet_by']);
                                     # code... 
                                    //  echo var_dump($retweet['retweet_Msg']).'<br>';
                                ?>
                                <!-- <div class="card mb-3"> -->
                                    <!-- <div class="card-body"> -->
                                   
                                <div class="post">
                                    <?php 
                                     if($retweet['retweet_id'] == $tweet["tweet_id"] || $tweet["retweet_id"] > 0){ ?>
                                      <span class="t-show-banner">
                                          <div class="t-show-banner-inner">
                                              <span><i class="fa fa-retweet "></i></span><span><?php echo $user['username'].' Shared';?></span>
                                          </div>
                                      </span>
                                     <?php } else{ echo '';}?>

                               <?php if(!empty($retweet['retweet_Msg']) && $tweet["tweet_id"] == $retweet["retweet_id"] || $tweet["retweet_id"] > 0){ ?> 
                                    <div class="user-block">
                                        <img class="rounded-circle img-bordered-sm"
                                            src="<?php echo BASE_URL_LINK."image/users_profile_cover/".$user['profile_img'] ;?>"
                                            alt="user image">
                                        <span class="username">
                                            <a style="float:left;padding-right:3px;" href="<?php echo PROFILE ;?>"><?php echo $user['firstname']." ".$user['lastname'] ;?></a>
                                            <!-- //Jonathan Burke Jr. -->
                                            <span class="description">Shared public - <?php echo $users->timeAgo($retweet['posted_on']); ?></span>
                                        </span>
                                        <span class="description"><?php echo $this->getTweetLink($retweet['retweet_Msg']); ?></span>
                                    </div>

                                    <div class="card bg-light t-show-popup more" data-tweet="<?php echo $tweet["tweet_id"];?>">
                                      <div class="card-body ">
                                        <?php if (!empty($tweet['tweet_image'])) {
                                     			    $expode = explode("=",$tweet['tweet_image']); 
                                                    $count = count($expode); ?>
                                          <div class="row">
                                              <div class="col-6 ">

                                               <?php if ($count === 1) { ?>
                                                    <div class="row mb-1">
                                                           <?php $expode = explode("=",$tweet['tweet_image']); ?>
                                                       <div class="col-sm-12">
                                                           <img class="img-fluid"
                                                               src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$expode[0] ;?>"
                                                               alt="Photo">
                                                       </div>
                                                    </div>

                                               <?php }else if($count == 2 || $count > 2){ ?>
                                                     <div class="row mb-2">
                                                           <?php 
                                                             $expode = explode("=",$tweet['tweet_image']);
                                                             $splice= array_splice($expode,0,2);
                                                             for ($i=0; $i < count($splice); ++$i) { 
                                                             ?>
                                                       <div class="col-sm-6">
                                                           <img class="img-fluid mb-2"
                                                               src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                               alt="Photo">
                                                       </div>
                                                           <?php } ?>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-sm-12">
                                                           <a name="" id="" class="btn btn-primary btn-sm float-right" href="#" role="button">View More <i class="fa fa-picture-o"></i> >>></a>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                               <?php } ?>
                                                </div> <!-- col -->

                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-12">
                                                              <div class="user-block">
                                                                  <img class="rounded-circle img-bordered-sm"
                                                                      src="<?php echo BASE_URL_LINK."image/users_profile_cover/".$tweet['profile_img'] ;?>"
                                                                      alt="user image">
                                                                  <span class="username">
                                                                      <a style="float:left;padding-right:3px;" href="<?php echo PROFILE ;?>"><?php echo $tweet['firstname']." ".$tweet['lastname'] ;?></a>
                                                                      <!-- //Jonathan Burke Jr. -->
                                                                      <span class="description">Public </span>
                                                                  </span>
                                                                  <span class="description"> <?php echo $this->getTweetLink($tweet['status']); ?></span>
                                                              </div>
                                                        </div> <!-- col -->

                                                        <div class="col-12" style="clear:both">
                                     		    	          <!-- STATUS -->
                                                             <span><?php 
                                                             $tatus= $this->getTweetLink($tweet['status']);
                                                             if(!empty($tatus)){
                                                             $post = (strlen($tatus) > 140)? 
                                                                           strtolower(substr($tatus,0,strlen($tatus)-140).' ...
                                                                                <a name="" id="" class="btn btn-primary btn-sm float-right" 
                                                                                href="#" role="button">
                                                                                View More >>></a>
                                                                           '): $tatus;
                                                             echo $post;
                                                            }else{
                                                            
                                                              echo '<div class="text-center p-0 m-0 "><a style="text-decoration:none;color:#333333;" name="" id=""   
                                                                                href="#" role="button"><i class="fa fa-photo" style="font-size:50px;"></i></a></div>';
                                                             } ?>
                                                             </span>
                                                        </div><!-- col -->
                                                        
                                                    </div><!-- row -->
                                                </div><!-- col -->
                                           </div><!-- row -->
                                           
                                            <?php }else { ?>
                                                    <div class="row">
                                                       <div class="col-12">

                                                              <div class="user-block">
                                                                   <img class="rounded-circle img-bordered-sm"
                                                                       src="<?php echo BASE_URL_LINK."image/users_profile_cover/".$tweet['profile_img'] ;?>"
                                                                       alt="user image">
                                                                   <span class="username">
                                                                       <a style="float:left;padding-right:3px;" href="<?php echo PROFILE ;?>"><?php echo $tweet['firstname']." ".$tweet['lastname'] ;?></a>
                                                                       <!-- //Jonathan Burke Jr. -->
                                                                       <span class="description">Shared publicly - <?php echo $this->timeAgo($tweet['posted_on']); ?></span>
                                                                   </span>
                                                                   <span class="description"><?php echo $this->getTweetLink($tweet['status']); ?></span>
                                                               </div>

                                                        </div><!-- col -->
                                                    </div><!-- row -->

                                            <?php } ?>

                                      </div><!-- card-body -->
                                    </div><!-- card -->

                                <?php } else { ?> 

                                    <div class="user-block">
                                        <img class="rounded-circle img-bordered-sm"
                                            src="<?php echo BASE_URL_LINK."image/users_profile_cover/".$tweet['profile_img'] ;?>"
                                            alt="user image">
                                        <span class="username">
                                            <a
                                                href="<?php echo PROFILE ;?>"><?php echo $tweet['firstname']." ".$tweet['lastname'] ;?></a>
                                            <!-- //Jonathan Burke Jr. -->
                                        </span>
                                        <span class="description">Shared publicly - <?php echo $this->timeAgo($tweet['posted_on']); ?></span>
                                    </div>
                                    <!-- /.user-block -->
                                    <?php 
                                    if (!empty($tweet['tweet_image'])) {
                                        $expode = explode("=",$tweet['tweet_image']);
                                        $count = count($expode); ?>

                                     <?php if ($count === 1) { ?>

                                     <div class="row mb-1">
                                            <?php $expode = explode("=",$tweet['tweet_image']); ?>
                                        <div class="col-sm-12 more">
                                            <img class="img-fluid imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$expode[0] ;?>"
                                                alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                        </div>
                                     </div>


                                    <?php
                                     }else if($count === 2){?>
                                        <div class="row mb-2 more">
                                                <?php $expode = explode("=",$tweet['tweet_image']);
                                                  $splice= array_splice($expode,0,2);
                                                  for ($i=0; $i < count($splice); ++$i) { 
                                                  ?>
                                            <div class="col-sm-6">
                                                <img class="img-fluid mb-2 imagePopup"
                                                    src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                    alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                            </div>
                                                <?php }?>
                                        </div>

                                    <?php }else if($count === 3 || $count === 4 || $count === 5){?>
                                     <div class="row mb-2 more">
                                            <?php $expode = explode("=",$tweet['tweet_image']);
                                              $splice= array_splice($expode,0,1);
                                              ?>
                                        <div class="col-sm-6">
                                            <img class="img-fluid mb-2 imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[0] ;?>"
                                                alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                        </div>
                                        <!-- /.col -->

                                        <div class="col-sm-6">
                                            <div class="row mb-2 more">
                                                    <?php 
                                                    $expode = explode("=",$tweet['tweet_image']);
                                                    // var_dump($expode);
                                                    $splice= array_splice($expode,1,2);
                                                    // var_dump($splice);
                                                     for ($i=0; $i < count($splice); ++$i) { ?>
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-2 imagePopup"
                                                        src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                        alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                                </div>
                                                    <?php }?>

                                            </div>
                                            <!-- /.row -->
                                            <div class="row more">
                                                    <?php 
                                                    $expode = explode("=",$tweet['tweet_image']);
                                                    $splice= array_splice($expode,3,2);
                                                     for ($i=0; $i < count($splice); ++$i) { ?>
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-2 imagePopup"
                                                        src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                        alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                                </div>
                                                    <?php }?>

                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                  <?php   }else if($count === 6 || $count === 7 || $count === 8 ) { ?>

                                    <div class="row mb-2 more">
                                            <?php $expode = explode("=",$tweet['tweet_image']);
                                              $splice= array_splice($expode,0,1);
                                              ?>
                                        <div class="col-sm-6 mb-2">
                                            <img class="img-fluid imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[0] ;?>"
                                                alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                        </div>
                                        <!-- /.col -->

                                        <div class="col-sm-6">
                                            <div class="row">
                                                    <?php 
                                                    $expode = explode("=",$tweet['tweet_image']);
                                                    // var_dump($expode);
                                                    $splice= array_splice($expode,1,2);
                                                    // var_dump($splice);
                                                     for ($i=0; $i < count($splice); ++$i) { ?>
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-2 imagePopup"
                                                        src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                        alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                                </div>
                                                    <?php }?>

                                            </div>
                                            <!-- /.row -->
                                            <div class="row">
                                                    <?php 
                                                    $expode = explode("=",$tweet['tweet_image']);
                                                    $splice= array_splice($expode,3,2);
                                                     for ($i=0; $i < count($splice); ++$i) { ?>
                                                <div class="col-sm-6  mb-2">
                                                    <img class="img-fluid imagePopup"
                                                        src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                        alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                                </div>
                                                    <?php }?>

                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <div class="row more ">
                                        <?php 
                                        $expode = explode("=",$tweet['tweet_image']);
                                        $count = count($expode);
                                        if($count == 6){?>
                                           <div class="col-sm-12">
                                               <a name="" id="" class="btn btn-primary btn-sm float-right" href="#" role="button">View More photo >>></a>
                                           </div>
                                        <?php 
                                        }else{
                                           $expode = explode("=",$tweet['tweet_image']);
                                           $count = count($expode);
                                           $splice= array_splice($expode,5,3);
                                           for ($i=0; $i < count($splice); ++$i) { ?>
                                       <div class="col-sm-4">
                                            <img class="img-fluid mb-1 imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                        </div>

                                           <?php }
                                        }?>
                                    </div>
                                    <!-- /.row -->

                                    <?php }else if($count === 9 || $count === 10 || $count >= 11) {?>
                                         <div class="row mb-1 more">
                                            <?php $expode = explode("=",$tweet['tweet_image']);
                                              $splice= array_splice($expode,0);
                                              ?>
                                        <div class="col-sm-6">
                                            <img class="img-fluid mb-2 imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[0] ;?>"
                                                alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                        </div>
                                        <!-- /.col -->

                                        <div class="col-sm-6">
                                            <div class="row">
                                                    <?php 
                                                    $expode = explode("=",$tweet['tweet_image']);
                                                    // var_dump($expode);
                                                    $splice= array_splice($expode,1,2);
                                                    // var_dump($splice);
                                                     for ($i=0; $i < count($splice); ++$i) { ?>
                                                <div class="col-sm-6 mb-2">
                                                    <img class="img-fluid imagePopup"
                                                        src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                        alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                                </div>
                                                    <?php }?>

                                            </div>
                                            <!-- /.row -->
                                            <div class="row">
                                                    <?php 
                                                    $expode = explode("=",$tweet['tweet_image']);
                                                    $splice= array_splice($expode,3,2);
                                                     for ($i=0; $i < count($splice); ++$i) { ?>
                                                <div class="col-sm-6 mb-2">
                                                    <img class="img-fluid imagePopup"
                                                        src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                        alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                                </div>
                                                    <?php }?>

                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <div class="row mb-2">
                                        <?php 
                                        $expode = explode("=",$tweet['tweet_image']);
                                        $splice= array_splice($expode,5,3);
                                         for ($i=0; $i < count($splice); ++$i) { ?>
                                       <div class="col-sm-4 mb-2">
                                            <img class="img-fluid imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                alt="Photo">
                                        </div>
                                            <?php }?>
                                    </div>
                                    <!-- /.row -->

                                    <div class="row more">
                                        <?php 
                                        $expode = explode("=",$tweet['tweet_image']);
                                        $splice= array_splice($expode,7,3);
                                         for ($i=0; $i < count($splice); ++$i) { ?>
                                       <div class="col-sm-4 mb-2">
                                            <img class="img-fluid imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                        </div>
                                            <?php }?>
                                    </div>
                                    <!-- /.row -->
                                    <div class="row">
                                       <div class="col-sm-12">
                                           <a name="" id="" class="btn btn-primary btn-sm float-right" href="#" role="button">View More photo >>></a>
                                        </div>
                                    </div>
                                    <!-- /.row -->


                                       <?php }
                                     
                                    } ?>
                                   

                                    <p id="link_">
                                        <?php echo $this->getTweetLink($tweet['status']) ;?>
                                    </p>
                                    
                              <?php }?>

                              <ul class="mt-2 list-inline" style="list-style-type: none; margin-bottom:10px;">  
                                        <?php if($tweet['tweet_id'] == $retweet['retweet_id']){ ?>
                                         <li class=" list-inline-item"><button class="share-btn retweeted text-sm mr-2" data-tweet="<?php echo $tweet['tweet_id']; ?>"  data-user="<?php echo $tweet['tweetBy']; ?>">
                                         <i class="fa fa-share green mr-1" style="color: green"> <span class="retweetcounter"><?php echo $retweet["retweet_counts"];?></span></i>
                                            Share</button></li>
                                        <?php }else{ ?>

                                               <li  class=" list-inline-item"> <button class="share-btn retweet text-sm mr-2" data-tweet="<?php echo $tweet['tweet_id']; ?>"  data-user="<?php echo $tweet['tweetBy']; ?>">
                                                <?php if($retweet["retweet_counts"] > 0){ echo '<i class="fa fa-share mr-1" style="color: green"> <span class="retweetcounter">'.$retweet["retweet_counts"].'</span></i>' ; }else{ echo '<i class="fa fa-share mr-1"> <span class="retweetcounter">'.$retweet["retweet_counts"].'</span></i>';} ?>
                                                   Share</button></li>

                                         <?php } ?>
                                            <?php if($likes['like_on'] == $tweet['tweet_id']){ ?>
                                                <li  class=" list-inline-item"><button class="unlike-btn text-sm" data-tweet="<?php echo $tweet['tweet_id']; ?>"  data-user="<?php echo $tweet['tweet_by']; ?>">
                                                <i class="fa fa-thumbs-up mr-1" style="color: red"> <span class="likescounter"><?php echo $tweet['likes_counts'] ;?></span></i>
                                                    Like</button></li>

                                            <?php }else{ ?>
                                                  <li  class=" list-inline-item"> <button class="like-btn text-sm" data-tweet="<?php echo $tweet['tweet_id']; ?>"  data-user="<?php echo $tweet['tweet_by']; ?>">
                                                   <i class="fa fa-thumbs-o-up mr-1"> <span class="likescounter"><?php if ($tweet['likes_counts'] > 0){ echo $tweet['likes_counts'];}else{ echo '';} ?></span></i>
                                                       Like</button></li>
                                            <?php } ?>
                                         <span style="float:right">
                                    
                                          <li  class=" list-inline-item"><button class="comments-btn text-sm" data-target="#collapseExampl" data-toggle="collapse">
                                              <i class="fa fa-comments-o mr-1"></i> Comments (5)
                                          </button></li>
                                        

                                         <?php if ($tweet["tweetBy"] == $user_id){ ?>
                                            <li  class=" list-inline-item">
                                                <ul class="deleteButt" style="list-style-type: none; margin:0px;" >
                                                    <li>
                                                       <a href="#" class="more"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                                        <ul style="list-style-type: none; margin:0px;" >
											                <li style="list-style-type: none; margin:0px;"> 
                        					                    <label class="deleteTweet" data-tweet="<?php echo  $tweet["tweet_id"];?>"  data-user="<?php echo $tweet["tweetBy"];?>" >Delete </label>
                                                           </li>
                                                       </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                         <?php }else{ echo '';}?>
                                         </span>
                                </ul>

                                    <div class="card collapse hide" id="collapseExampl">
                                      <div class="card-body">
                                        <!-- Conversations are loaded here -->
                                        <div class="direct-chat-messages">
                                          <!-- Message. Default to the left -->
                                            <div class="direct-chat-msg">
                                                <div class="direct-chat-info clearfix">
                                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                                </div>
                                                <!-- /.direct-chat-info -->
                                                <img class="direct-chat-img" src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg" alt="message user image">
                                                <!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                  Is this template really for free? That's unbelievable!
                                                </div>
                                              <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->
                        
                                          <!-- Message to the right -->
                                          <div class="direct-chat-msg right">
                                                <div class="direct-chat-info clearfix">
                                                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                                                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                                </div>
                                                <!-- /.direct-chat-info -->
                                                 <img class="direct-chat-img" src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user3-128x128.jpg" alt="message user image">
                                                 <!-- /.direct-chat-img -->
                                                 <div class="direct-chat-text">
                                                   You better believe it!
                                                 </div> <!-- /.direct-chat-text -->
                                           </div> <!-- /.direct-chat-msg -->
                                        </div> <!-- /.direct-chat-message -->
                                      </div> <!-- /.card-body-->
                                    </div> <!-- /.card /collapse -->

                                    <div class="input-group">
                                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                        <div class="input-group-append">
                                            <span class="input-group-text btn" onclick="#" aria-label="Username" aria-describedby="basic-addon1"><span
                                                    class="fa fa-arrow-right text-muted"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.post -->
                             <!-- </div> -->
                              <!-- /.card-body -->
                            <!-- </div> -->
                            <!-- /.card-end -->
                                <?php }
              
    }

    public function getTrendshashtag($trend)
    {
        $mysqli= $this->database;
        $param= '%'.$trend.'%';
        $query = "SELECT * FROM trends WHERE hashtag LIKE '{$param}' LIMIT 5";
        $result= $mysqli->query($query);

        $trendshash = array();
        while ($row= $result->fetch_assoc()) {
            $trendshash[] = array(
            'trend_id' => $row['trend_id'],
            'hashtag' => $row['hashtag'],
            'created_on' => $row['created_on'],
           );
        }
        return $trendshash; // Return the $contacts array
        $mysqli->close();
    }

     public function getmention($mention)
    {
        $mysqli= $this->database;
        $param= '%'.$mention.'%';
        $query = "SELECT user_id, username , career, profile_img FROM users WHERE username LIKE '{$param}' OR lastname LIKE '{$param}' LIMIT 5";
        $result= $mysqli->query($query);
        $trendMention = array();
        while ($row=$result->fetch_assoc()) {
            $trendMention[] = array(
            'user_id' => $row['user_id'],
            'username' => $row['username'],
            'career' => $row['career'],
            'profile_img' => $row['profile_img']
           );
        }
        return $trendMention; // Return the $contacts array
        $mysqli->close();
    }

     public function addTrends($hashtag)
    {
        $mysqli= $this->database;
        preg_match_all('/#+([a-zA-Z0-9_]+)/i',$hashtag, $matches);
        if ($matches) {
            # code...
            $resuslt= array_values($matches[1]);
        }
        foreach ($resuslt as $trend) {
            # code...
            $query = "INSERT INTO trends ( hashtag, created_on) VALUES($trend,CURRENT_TIMESTAMP)";
            $mysqli->query($query);
        }
        // $mysqli= $this->database;
        // $stmt = $mysqli->stmt_init();
        // preg_match_all('/#+([a-zA-Z0-9_]+)/i',$hashtag, $matches);
        // if ($matches) {
        //     # code...
        //     $resuslt= array_values($matches[1]);
        // }
        // $query = "INSERT INTO trends ( hashtag, created_on) VALUES(?,CURRENT_TIMESTAMP)";
        // foreach ($resuslt as $trend) {
        //     # code...
        //     if ($stmt->prepare($query)) {
        //           $stmt->bind_param('s',$trend);
        //           $stmt->execute();
        //     }
        // }
        // var_dump($stmt->prepare($query));

    }

      public function getTweetLink($tweet)
    {
        $tweet= preg_replace('/(http:\/\/)([\w+.])([\w.]+)/','<a  style="color:green;" href="$0" target="_blink">$0</a>',$tweet);
        $tweet= preg_replace('/(https:\/\/)([\w+.])([\w.]+)/','<a style="color:green;" href="$0" target="_blink">$0</a>',$tweet);
        $tweet= preg_replace('/#([\w]+)/','<a style="color:green;" href="'.BASE_URL_PUBLIC.'$1.hashtag" >$0</a>',$tweet);
        $tweet= preg_replace('/@([\w]+)/','<a style="color:green;" href="'.BASE_URL_PUBLIC.'$1">$0</a>',$tweet);
        return  $tweet;
    }

     public function addLike($user_id,$tweet_id,$get_id)
    {
        $mysqli= $this->database;
        $query= "UPDATE tweets SET likes_counts = likes_counts +1 WHERE tweet_id= $tweet_id ";
        $mysqli->query($query);
        $this->creates('likes',array('like_by' => $user_id ,'like_on' => $tweet_id));
        // if ($get_id != $user_id) {
        //     Notification::SendNotifications($get_id,$user_id,$tweet_id,'likes');
        // }
    }

      public function unLike( $user_id,$tweet_id, $get_id)
    {
        $mysqli= $this->database;
        $query= "UPDATE tweets SET likes_counts = likes_counts -1 WHERE tweet_id= $tweet_id ";
        $mysqli->query($query);

        $query= "DELETE FROM likes WHERE like_by = $user_id AND like_on = $tweet_id";
        $mysqli->query($query);

    }

      public function likes($user_id,$tweet_id)
    {
        $mysqli= $this->database;
        $query= "SELECT * FROM likes WHERE like_by = $user_id AND like_on = $tweet_id";
        $result= $mysqli->query($query);

        $fetchCountLikes= array();
        while ($row= $result->fetch_assoc()) {
             $fetchCountLikes[] = array(
            'like_id' => $row['like_id'],
            'like_by' => $row['like_by'],
            'like_on' => $row['like_on']
           );
        }
        foreach ($fetchCountLikes as $fetchLikes) {
            # code...
            return $fetchLikes; // Return the $contacts array
        }
    }

     public function getPopupTweet($user_id,$tweet_id,$tweet_by)
    {
        $mysqli= $this->database;
        $query= "SELECT * FROM tweets, users WHERE tweet_id = $tweet_id AND tweetBy = user_id";
        $result= $mysqli->query($query);
        while ($row= $result->fetch_array()) {
            # code...
            return $row;
        }
    }

      public function retweet($retweet_id,$user_id,$tweet_by,$comments)
    {
        $mysqli= $this->database;
        $stmt = $mysqli->stmt_init();
        $query= "UPDATE tweets SET retweet_counts = retweet_counts +1  WHERE tweet_id= ? ";
        // $mysqli->query($query); 
        $stmt->prepare($query);
        $stmt->bind_param('i',$retweet_id);
        $stmt->execute();

        $query= "INSERT INTO tweets (status, tweetBy, retweet_id, retweet_by, tweet_image, likes_counts, retweet_counts, posted_on, retweet_Msg) 
        SELECT status, tweetBy, ?, ?, tweet_image, likes_counts, retweet_counts, posted_on, ?  FROM tweets WHERE tweet_id= ? ";
        // $mysqli->query($query);
        $stmt->prepare($query);
        $stmt->bind_param('iisi', $retweet_id, $user_id, $comments, $retweet_id);
        $stmt->execute();  
        $query= "DELETE FROM tweets WHERE tweet_id= ?";
        $stmt->prepare($query);
        // $last_id= $stmt->insert_id;  
        $stmt->bind_param('i',$stmt->insert_id);
        // Notification::SendNotifications($tweet_by,$user_id, $retweet_id,'retweet');
        return $stmt->execute();
        // return $mysqli->query($query); 
    }

     public function checkRetweet($tweet_id,$user_id)
    {
        $mysqli= $this->database;
        $stmt = $mysqli->stmt_init();
        $query="SELECT * FROM tweets WHERE retweet_id= ?  AND retweet_by= ? OR tweet_id=? AND retweet_by=? ";
        $stmt->prepare($query);
        $stmt->bind_param('iiii', $tweet_id, $user_id, $tweet_id, $user_id);
        $stmt->bind_result($tweet_idd, $status, $tweetBy, $retweet_idd, $retweet_by, $tweet_image,
        $likes_counts, $retweet_counts, $posted_on, $retweet_msg);
        $stmt->execute();
        $CountRetweet= array();
        while ($stmt->fetch()) {
             $CountRetweet[] = array(
              /* TABLE OF tweety */
             "tweet_id" => $tweet_idd,
             "status" => $status,
             "tweetBy" => $tweetBy,
             "retweet_id" => $retweet_idd,
             "retweet_by" => $retweet_by,
             "tweet_image" => $tweet_image,
             "likes_counts" => $likes_counts,
             "retweet_counts" => $retweet_counts,
             "posted_on" => $posted_on,
             "retweet_Msg" => $retweet_msg,
           );
        }
        foreach ($CountRetweet as $countsRetweet) {
            # code...
            return $countsRetweet; // Return the $contacts array
        }


    }

    public function delete($table,$array)
    {
        $mysqli= $this->database;
        $query= "DELETE FROM $table";
        $where= " WHERE"; 
        foreach ($array as $name => $value) {
            # code...
             $query .= "{$where} {$name} = {$value}";
             $where= " AND"; 
        }

        $row= $mysqli->query($query);

        if($row){
                exit('<div class="alert alert-success alert-dismissible fade show text-center">
                    <button class="close" data-dismiss="alert" type="button">
                        <span>&times;</span>
                    </button>
                    <strong>SUCCESS</strong> </div>');
            }else{
                exit('<div class="alert alert-danger alert-dismissible fade show text-center">
                    <button class="close" data-dismiss="alert" type="button">
                        <span>&times;</span>
                    </button>
                    <strong>Fail to delete !!!</strong>
                </div>');
        }

    }

    public function countsPosts($user_id)
    {
        $mysqli= $this->database;
        $query= "SELECT COUNT('tweet_id') AS TotalPosts FROM tweets WHERE tweetBy = $user_id AND retweet_id = 0 OR retweet_by= $user_id";
        $sql =$mysqli->query($query);
        $row = $sql->fetch_array();
        $total= array_shift($row);
        $array= array(0,$total);
        $totals= array_sum($array);
        return $totals;
    }

     public function countsLike($user_id)
    {
        $mysqli= $this->database;
        $query= "SELECT COUNT('like_id') AS TotalLikes FROM likes WHERE like_by = $user_id";
        $sql =$mysqli->query($query);
        $row = $sql->fetch_array();
        $total= array_shift($row);
        $array= array(0,$total);
        $totals= array_sum($array);
        return $totals;
    }

     public function getUserTweet($user_id)
    {
        $mysqli= $this->database;
        $stmt = $mysqli->stmt_init();
        $query= "SELECT * FROM tweets LEFT JOIN users ON tweetBy = user_id WHERE tweetBy = $user_id AND retweet_id = 0 OR retweet_by= $user_id ";
        $sql = $mysqli->query($query);
        $all_tweet=array();
        while ($row = $sql->fetch_array()) {
            $data[] = $row;
            /* TABLE OF tweety */
        }

                             foreach ($data as $tweet) {
                                $likes= $this->likes($user_id,$tweet['tweet_id']);
                                $retweet= $this->checkRetweet($tweet['tweet_id'],$user_id);
                                $user= $this->userData($tweet['retweet_by']);
                                     # code... 
                                    //  echo var_dump($retweet['retweet_Msg']).'<br>';
                                ?>
                                <!-- <div class="card mb-3"> -->
                                    <!-- <div class="card-body"> -->
                                   
                                <div class="post">
                                    <?php 
                                     if($retweet['retweet_id'] == $tweet["tweet_id"] || $tweet["retweet_id"] > 0){ ?>
                                      <span class="t-show-banner">
                                          <div class="t-show-banner-inner">
                                              <span><i class="fa fa-retweet "></i></span><span><?php echo $user['username'].' Shared';?></span>
                                          </div>
                                      </span>
                                     <?php } else{ echo '';}?>

                               <?php if(!empty($retweet['retweet_Msg']) && $tweet["tweet_id"] == $retweet["retweet_id"] || $tweet["retweet_id"] > 0){ ?> 
                                    <div class="user-block">
                                        <img class="rounded-circle img-bordered-sm"
                                            src="<?php echo BASE_URL_LINK."image/users_profile_cover/".$user['profile_img'] ;?>"
                                            alt="user image">
                                        <span class="username">
                                            <a style="float:left;padding-right:3px;" href="<?php echo PROFILE ;?>"><?php echo $user['firstname']." ".$user['lastname'] ;?></a>
                                            <!-- //Jonathan Burke Jr. -->
                                            <span class="description">Shared public - <?php echo $users->timeAgo($retweet['posted_on']); ?></span>
                                        </span>
                                        <span class="description"><?php echo $this->getTweetLink($retweet['retweet_Msg']); ?></span>
                                    </div>

                                    <div class="card bg-light t-show-popup more" data-tweet="<?php echo $tweet["tweet_id"];?>">
                                      <div class="card-body ">
                                        <?php if (!empty($tweet['tweet_image'])) {
                                     			    $expode = explode("=",$tweet['tweet_image']); 
                                                    $count = count($expode); ?>
                                          <div class="row">
                                              <div class="col-6 ">

                                               <?php if ($count === 1) { ?>
                                                    <div class="row mb-1">
                                                           <?php $expode = explode("=",$tweet['tweet_image']); ?>
                                                       <div class="col-sm-12">
                                                           <img class="img-fluid"
                                                               src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$expode[0] ;?>"
                                                               alt="Photo">
                                                       </div>
                                                    </div>

                                               <?php }else if($count == 2 || $count > 2){ ?>
                                                     <div class="row mb-2">
                                                           <?php 
                                                             $expode = explode("=",$tweet['tweet_image']);
                                                             $splice= array_splice($expode,0,2);
                                                             for ($i=0; $i < count($splice); ++$i) { 
                                                             ?>
                                                       <div class="col-sm-6">
                                                           <img class="img-fluid mb-2"
                                                               src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                               alt="Photo">
                                                       </div>
                                                           <?php } ?>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-sm-12">
                                                           <a name="" id="" class="btn btn-primary btn-sm float-right" href="#" role="button">View More <i class="fa fa-picture-o"></i> >>></a>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                               <?php } ?>
                                                </div> <!-- col -->

                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-12">
                                                              <div class="user-block">
                                                                  <img class="rounded-circle img-bordered-sm"
                                                                      src="<?php echo BASE_URL_LINK."image/users_profile_cover/".$tweet['profile_img'] ;?>"
                                                                      alt="user image">
                                                                  <span class="username">
                                                                      <a style="float:left;padding-right:3px;" href="<?php echo PROFILE ;?>"><?php echo $tweet['firstname']." ".$tweet['lastname'] ;?></a>
                                                                      <!-- //Jonathan Burke Jr. -->
                                                                      <span class="description">Public </span>
                                                                  </span>
                                                                  <span class="description"> <?php echo $this->getTweetLink($tweet['status']); ?></span>
                                                              </div>
                                                        </div> <!-- col -->

                                                        <div class="col-12" style="clear:both">
                                     		    	          <!-- STATUS -->
                                                             <span><?php 
                                                             $tatus= $this->getTweetLink($tweet['status']);
                                                             if(!empty($tatus)){
                                                             $post = (strlen($tatus) > 140)? 
                                                                           strtolower(substr($tatus,0,strlen($tatus)-140).' ...
                                                                                <a name="" id="" class="btn btn-primary btn-sm float-right" 
                                                                                href="#" role="button">
                                                                                View More >>></a>
                                                                           '): $tatus;
                                                             echo $post;
                                                            }else{
                                                            
                                                              echo '<div class="text-center p-0 m-0 "><a style="text-decoration:none;color:#333333;" name="" id=""   
                                                                                href="#" role="button"><i class="fa fa-photo" style="font-size:50px;"></i></a></div>';
                                                             } ?>
                                                             </span>
                                                        </div><!-- col -->
                                                        
                                                    </div><!-- row -->
                                                </div><!-- col -->
                                           </div><!-- row -->
                                           
                                            <?php }else { ?>
                                                    <div class="row">
                                                       <div class="col-12">

                                                              <div class="user-block">
                                                                   <img class="rounded-circle img-bordered-sm"
                                                                       src="<?php echo BASE_URL_LINK."image/users_profile_cover/".$tweet['profile_img'] ;?>"
                                                                       alt="user image">
                                                                   <span class="username">
                                                                       <a style="float:left;padding-right:3px;" href="<?php echo PROFILE ;?>"><?php echo $tweet['firstname']." ".$tweet['lastname'] ;?></a>
                                                                       <!-- //Jonathan Burke Jr. -->
                                                                       <span class="description">Shared publicly - <?php echo $this->timeAgo($tweet['posted_on']); ?></span>
                                                                   </span>
                                                                   <span class="description"><?php echo $this->getTweetLink($tweet['status']); ?></span>
                                                               </div>

                                                        </div><!-- col -->
                                                    </div><!-- row -->

                                            <?php } ?>

                                      </div><!-- card-body -->
                                    </div><!-- card -->

                                <?php } else { ?> 

                                    <div class="user-block">
                                        <img class="rounded-circle img-bordered-sm"
                                            src="<?php echo BASE_URL_LINK."image/users_profile_cover/".$tweet['profile_img'] ;?>"
                                            alt="user image">
                                        <span class="username">
                                            <a
                                                href="<?php echo PROFILE ;?>"><?php echo $tweet['firstname']." ".$tweet['lastname'] ;?></a>
                                            <!-- //Jonathan Burke Jr. -->
                                        </span>
                                        <span class="description">Shared publicly - <?php echo $this->timeAgo($tweet['posted_on']); ?></span>
                                    </div>
                                    <!-- /.user-block -->
                                    <?php 
                                    if (!empty($tweet['tweet_image'])) {
                                        $expode = explode("=",$tweet['tweet_image']);
                                        $count = count($expode); ?>

                                     <?php if ($count === 1) { ?>

                                     <div class="row mb-1">
                                            <?php $expode = explode("=",$tweet['tweet_image']); ?>
                                        <div class="col-sm-12 more">
                                            <img class="img-fluid imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$expode[0] ;?>"
                                                alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                        </div>
                                     </div>


                                    <?php
                                     }else if($count === 2){?>
                                        <div class="row mb-2 more">
                                                <?php $expode = explode("=",$tweet['tweet_image']);
                                                  $splice= array_splice($expode,0,2);
                                                  for ($i=0; $i < count($splice); ++$i) { 
                                                  ?>
                                            <div class="col-sm-6">
                                                <img class="img-fluid mb-2 imagePopup"
                                                    src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                    alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                            </div>
                                                <?php }?>
                                        </div>

                                    <?php }else if($count === 3 || $count === 4 || $count === 5){?>
                                     <div class="row mb-2 more">
                                            <?php $expode = explode("=",$tweet['tweet_image']);
                                              $splice= array_splice($expode,0,1);
                                              ?>
                                        <div class="col-sm-6">
                                            <img class="img-fluid mb-2 imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[0] ;?>"
                                                alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                        </div>
                                        <!-- /.col -->

                                        <div class="col-sm-6">
                                            <div class="row mb-2 more">
                                                    <?php 
                                                    $expode = explode("=",$tweet['tweet_image']);
                                                    // var_dump($expode);
                                                    $splice= array_splice($expode,1,2);
                                                    // var_dump($splice);
                                                     for ($i=0; $i < count($splice); ++$i) { ?>
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-2 imagePopup"
                                                        src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                        alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                                </div>
                                                    <?php }?>

                                            </div>
                                            <!-- /.row -->
                                            <div class="row more">
                                                    <?php 
                                                    $expode = explode("=",$tweet['tweet_image']);
                                                    $splice= array_splice($expode,3,2);
                                                     for ($i=0; $i < count($splice); ++$i) { ?>
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-2 imagePopup"
                                                        src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                        alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                                </div>
                                                    <?php }?>

                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                  <?php   }else if($count === 6 || $count === 7 || $count === 8 ) { ?>

                                    <div class="row mb-2 more">
                                            <?php $expode = explode("=",$tweet['tweet_image']);
                                              $splice= array_splice($expode,0,1);
                                              ?>
                                        <div class="col-sm-6 mb-2">
                                            <img class="img-fluid imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[0] ;?>"
                                                alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                        </div>
                                        <!-- /.col -->

                                        <div class="col-sm-6">
                                            <div class="row">
                                                    <?php 
                                                    $expode = explode("=",$tweet['tweet_image']);
                                                    // var_dump($expode);
                                                    $splice= array_splice($expode,1,2);
                                                    // var_dump($splice);
                                                     for ($i=0; $i < count($splice); ++$i) { ?>
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-2 imagePopup"
                                                        src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                        alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                                </div>
                                                    <?php }?>

                                            </div>
                                            <!-- /.row -->
                                            <div class="row">
                                                    <?php 
                                                    $expode = explode("=",$tweet['tweet_image']);
                                                    $splice= array_splice($expode,3,2);
                                                     for ($i=0; $i < count($splice); ++$i) { ?>
                                                <div class="col-sm-6  mb-2">
                                                    <img class="img-fluid imagePopup"
                                                        src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                        alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                                </div>
                                                    <?php }?>

                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <div class="row more ">
                                        <?php 
                                        $expode = explode("=",$tweet['tweet_image']);
                                        $count = count($expode);
                                        if($count == 6){?>
                                           <div class="col-sm-12">
                                               <a name="" id="" class="btn btn-primary btn-sm float-right" href="#" role="button">View More photo >>></a>
                                           </div>
                                        <?php 
                                        }else{
                                           $expode = explode("=",$tweet['tweet_image']);
                                           $count = count($expode);
                                           $splice= array_splice($expode,5,3);
                                           for ($i=0; $i < count($splice); ++$i) { ?>
                                       <div class="col-sm-4">
                                            <img class="img-fluid mb-1 imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                        </div>

                                           <?php }
                                        }?>
                                    </div>
                                    <!-- /.row -->

                                    <?php }else if($count === 9 || $count === 10 || $count >= 11) {?>
                                         <div class="row mb-1 more">
                                            <?php $expode = explode("=",$tweet['tweet_image']);
                                              $splice= array_splice($expode,0);
                                              ?>
                                        <div class="col-sm-6">
                                            <img class="img-fluid mb-2 imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[0] ;?>"
                                                alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                        </div>
                                        <!-- /.col -->

                                        <div class="col-sm-6">
                                            <div class="row">
                                                    <?php 
                                                    $expode = explode("=",$tweet['tweet_image']);
                                                    // var_dump($expode);
                                                    $splice= array_splice($expode,1,2);
                                                    // var_dump($splice);
                                                     for ($i=0; $i < count($splice); ++$i) { ?>
                                                <div class="col-sm-6 mb-2">
                                                    <img class="img-fluid imagePopup"
                                                        src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                        alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                                </div>
                                                    <?php }?>

                                            </div>
                                            <!-- /.row -->
                                            <div class="row">
                                                    <?php 
                                                    $expode = explode("=",$tweet['tweet_image']);
                                                    $splice= array_splice($expode,3,2);
                                                     for ($i=0; $i < count($splice); ++$i) { ?>
                                                <div class="col-sm-6 mb-2">
                                                    <img class="img-fluid imagePopup"
                                                        src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                        alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                                </div>
                                                    <?php }?>

                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <div class="row mb-2">
                                        <?php 
                                        $expode = explode("=",$tweet['tweet_image']);
                                        $splice= array_splice($expode,5,3);
                                         for ($i=0; $i < count($splice); ++$i) { ?>
                                       <div class="col-sm-4 mb-2">
                                            <img class="img-fluid imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                alt="Photo">
                                        </div>
                                            <?php }?>
                                    </div>
                                    <!-- /.row -->

                                    <div class="row more">
                                        <?php 
                                        $expode = explode("=",$tweet['tweet_image']);
                                        $splice= array_splice($expode,7,3);
                                         for ($i=0; $i < count($splice); ++$i) { ?>
                                       <div class="col-sm-4 mb-2">
                                            <img class="img-fluid imagePopup"
                                                src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$splice[$i] ;?>"
                                                alt="Photo"  data-tweet="<?php echo $tweet["tweet_id"] ;?>">
                                        </div>
                                            <?php }?>
                                    </div>
                                    <!-- /.row -->
                                    <div class="row">
                                       <div class="col-sm-12">
                                           <a name="" id="" class="btn btn-primary btn-sm float-right" href="#" role="button">View More photo >>></a>
                                        </div>
                                    </div>
                                    <!-- /.row -->


                                       <?php }
                                     
                                    } ?>
                                   

                                    <p id="link_">
                                        <?php echo $this->getTweetLink($tweet['status']) ;?>
                                    </p>
                                    
                              <?php }?>

                              <ul class="mt-2 list-inline" style="list-style-type: none; margin-bottom:10px;">  
                                        <?php if($tweet['tweet_id'] == $retweet['retweet_id'] || $user_id == $retweet['retweet_by']){ ?>
                                         <li class=" list-inline-item"><button class="share-btn retweeted text-sm mr-2" data-tweet="<?php echo $tweet['tweet_id']; ?>"  data-user="<?php echo $tweet['tweetBy']; ?>">
                                         <i class="fa fa-share green mr-1" style="color: green"> <span class="retweetcounter"><?php echo $retweet["retweet_counts"];?></span></i>
                                            Share</button></li>
                                        <?php }else{ ?>

                                               <li  class=" list-inline-item"> <button class="share-btn retweet text-sm mr-2" data-tweet="<?php echo $tweet['tweet_id']; ?>"  data-user="<?php echo $tweet['tweetBy']; ?>">
                                                <?php if($retweet["retweet_counts"] > 0){ echo '<i class="fa fa-share mr-1" style="color: green"> <span class="retweetcounter">'.$retweet["retweet_counts"].'</span></i>' ; }else{ echo '<i class="fa fa-share mr-1"> <span class="retweetcounter">'.$retweet["retweet_counts"].'</span></i>';} ?>
                                                   Share</button></li>

                                         <?php } ?>
                                            <?php if($likes['like_on'] == $tweet['tweet_id']){ ?>
                                                <li  class=" list-inline-item"><button class="unlike-btn text-sm" data-tweet="<?php echo $tweet['tweet_id']; ?>"  data-user="<?php echo $tweet['tweet_by']; ?>">
                                                <i class="fa fa-thumbs-up mr-1" style="color: red"> <span class="likescounter"><?php echo $tweet['likes_counts'] ;?></span></i>
                                                    Like</button></li>

                                            <?php }else{ ?>
                                                  <li  class=" list-inline-item"> <button class="like-btn text-sm" data-tweet="<?php echo $tweet['tweet_id']; ?>"  data-user="<?php echo $tweet['tweet_by']; ?>">
                                                   <i class="fa fa-thumbs-o-up mr-1"> <span class="likescounter"><?php if ($tweet['likes_counts'] > 0){ echo $tweet['likes_counts'];}else{ echo '';} ?></span></i>
                                                       Like</button></li>
                                            <?php } ?>
                                         <span style="float:right">
                                    
                                          <li  class=" list-inline-item"><button class="comments-btn text-sm" data-target="#collapseExampl" data-toggle="collapse">
                                              <i class="fa fa-comments-o mr-1"></i> Comments (5)
                                          </button></li>
                                        

                                         <?php if ($tweet["tweetBy"] == $user_id){ ?>
                                            <li  class=" list-inline-item">
                                                <ul class="deleteButt" style="list-style-type: none; margin:0px;" >
                                                    <li>
                                                       <a href="#" class="more"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                                        <ul style="list-style-type: none; margin:0px;" >
											                <li style="list-style-type: none; margin:0px;"> 
                        					                    <label class="deleteTweet" data-tweet="<?php echo  $tweet["tweet_id"];?>"  data-user="<?php echo $tweet["tweetBy"];?>" >Delete </label>
                                                           </li>
                                                       </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                         <?php }else{ echo '';}?>
                                         </span>
                                </ul>

                                    <div class="card collapse hide" id="collapseExampl">
                                      <div class="card-body">
                                        <!-- Conversations are loaded here -->
                                        <div class="direct-chat-messages">
                                          <!-- Message. Default to the left -->
                                            <div class="direct-chat-msg">
                                                <div class="direct-chat-info clearfix">
                                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                                </div>
                                                <!-- /.direct-chat-info -->
                                                <img class="direct-chat-img" src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg" alt="message user image">
                                                <!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                  Is this template really for free? That's unbelievable!
                                                </div>
                                              <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->
                        
                                          <!-- Message to the right -->
                                          <div class="direct-chat-msg right">
                                                <div class="direct-chat-info clearfix">
                                                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                                                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                                </div>
                                                <!-- /.direct-chat-info -->
                                                 <img class="direct-chat-img" src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user3-128x128.jpg" alt="message user image">
                                                 <!-- /.direct-chat-img -->
                                                 <div class="direct-chat-text">
                                                   You better believe it!
                                                 </div> <!-- /.direct-chat-text -->
                                           </div> <!-- /.direct-chat-msg -->
                                        </div> <!-- /.direct-chat-message -->
                                      </div> <!-- /.card-body-->
                                    </div> <!-- /.card /collapse -->

                                    <div class="input-group">
                                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                        <div class="input-group-append">
                                            <span class="input-group-text btn" onclick="#" aria-label="Username" aria-describedby="basic-addon1"><span
                                                    class="fa fa-arrow-right text-muted"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.post -->
                             <!-- </div> -->
                              <!-- /.card-body -->
                            <!-- </div> -->
                            <!-- /.card-end -->
                                <?php }

    }

}
$home= new Home();
?>