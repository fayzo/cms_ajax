<?php 
session_start();
include('../init.php');
// $users->preventUsersAccess($_SERVER['REQUEST_METHOD'],realpath(__FILE__),realpath($_SERVER['SCRIPT_FILENAME']));

if (isset($_POST['retweet']) && !empty($_POST['retweet'])) {
    $user_id= $_SESSION['key'];
	  $retweet_id= $_POST['retweet'];
	  $tweet_by= $_POST['tweet_By'];
	  $comment= $_POST['comments'];
	  $comments= $users->test_input($comment);
	  $home->retweet($retweet_id, $user_id,$tweet_by,$comments);
}

if (isset($_POST['showpopretweet']) && !empty($_POST['showpopretweet'])) {
    $user_id= $_SESSION['key'];
    $tweet_id= $_POST['showpopretweet'];
    $tweet_by= $_POST['tweet_By'];
	$retweet= $home->getPopupTweet($user_id, $tweet_id, $tweet_by); 
	?>
<?php

	  echo ' <div class="retweet-popup">
                <div class="wrap5">
                	<div class="retweet-popup-body-wrap">
                		<div class="retweet-popup-heading">
                			<h3>Retweet this to followers?</h3>
                			<span><button class="close-retweet-popup"><i class="fa fa-times" aria-hidden="true"></i></button></span>
                		</div>
                		<div class="retweet-popup-input">
                			<div class="retweet-popup-input-inner">
                				<input type="text" class="retweetMsg" placeholder="Add a comment.."/>
                			</div>
                		</div>
                		<div class="retweet-popup-inner-body">
                			<div class="retweet-popup-inner-body-inner">
                				<div class="retweet-popup-comment-wrap">
									 <div class="retweet-popup-comment-head">';
						
									 if(isset($user_id) == $retweet['user_id']  && empty($retweet['profile_img']) == 1){
			 echo ' 							 <img src="'.BASE_URL_PUBLIC.NO_PROFILE_IMAGE_URL.'" />';
									 }else{
			echo ' 		   	 <img src="'. BASE_URL_LINK.'image/users_profile_cover/'.$retweet["profile_img"].'"/>';

									 }

      echo '         	 </div>
                					 <div class="retweet-popup-comment-right-wrap">
                						 <div class="retweet-popup-comment-headline">
                						 	<a>'.$retweet['username'].'</a><span>‏- '.$retweet['posted_on'].'</span>
                						 </div></br>
                						 <div class="retweet-popup-comment-body">
											 <div class="t-h-c-dis" style="margin-bottom:10px;">
											   '.$home->getTweetLink($retweet['status']).'
											 </div>';
                      if(empty($retweet["tweet_image"]) == 1){
		 echo '';										
											}else{

 $expode = explode("=",$retweet['tweet_image']);
 $count = count($expode); 

switch ($count) {
        case $count === 1 :
            # code...
            echo ' <div class="row mb-1">
                        <div class="col-sm-12">
                            <img class="img-fluid"
                                src="'.BASE_URL_PUBLIC.'uploads/posts/'.$expode[0].'" alt="Photo">
                        </div>
                     </div>';
            break;

        case $count === 2 :
            # code...
					 echo ' <div class="row mb-2">';
					         $expode = explode("=",$retweet['tweet_image']);
                  $splice= array_splice($expode,0,2);
                  for ($i=0; $i < count($splice); ++$i) { 
            echo '      <div class="col-sm-6">
                            <img class="img-fluid mb-2"
                                src="'.BASE_URL_PUBLIC.'uploads/posts/'.$splice[$i].'"
                                alt="Photo">
                        </div>';
                            }
            echo ' </div>';

         break;
        case $count === 3 || $count === 4 || $count === 5:

					 echo' <div class="row mb-2">';
					           $expode = explode("=",$retweet['tweet_image']);
                     $splice= array_splice($expode,0,1);
           echo'     <div class="col-sm-6">
                        <img class="img-fluid mb-2"
                            src="'.BASE_URL_PUBLIC.'uploads/posts/'.$splice[0].'"
                            alt="Photo">
                      </div>
                      <!-- /.col -->';

            echo'      <div class="col-sm-6">
												<div class="row mb-2">';
   												$expode = explode("=",$retweet['tweet_image']);
                           $splice= array_splice($expode,1,2);
                           for ($i=0; $i < count($splice); ++$i) {
           echo '           <div class="col-sm-6">
                             <img class="img-fluid mb-2" src="'.BASE_URL_PUBLIC.'uploads/posts/'.$splice[$i].'"
                                                        alt="Photo">
                              </div>';
                               }

             echo '          </div>
                              <!-- /.row -->
															<div class="row">';
   										      		$expode = explode("=",$retweet['tweet_image']);
                                $splice= array_splice($expode,3,2);
                                for ($i=0; $i < count($splice); ++$i) {
            echo '         <div class="col-sm-6">
                                    <img class="img-fluid mb-2"
                                        src="'.BASE_URL_PUBLIC.'uploads/posts/'.$splice[$i].'"
                                                        alt="Photo">
                            </div>';
                                           }

            echo '                  </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->';
            break;

         case $count === 6 || $count === 7 || $count === 8 :

						echo '       <div class="row mb-2">';
   										      $expode = explode("=",$retweet['tweet_image']);
                            $splice= array_splice($expode,0,1);
            echo '            <div class="col-sm-6 mb-2">
                                <img class="img-fluid"
                                    src="'.BASE_URL_PUBLIC.'uploads/posts/'.$splice[0].'"
                                    alt="Photo">
                              </div><!-- /.col -->';
                                        

            echo '            <div class="col-sm-6">
																<div class="row">';
   										              $expode = explode("=",$retweet['tweet_image']);
                                    $splice= array_splice($expode,1,2);
                                    for ($i=0; $i < count($splice); ++$i) { 
            echo '                 <div class="col-sm-6">
                                      <img class="img-fluid mb-2"
                                          src="'.BASE_URL_PUBLIC.'uploads/posts/'.$splice[$i].'"
                                                        alt="Photo">
                                                </div>';
                                    }

             echo '                 </div>
                                    <!-- /.row -->
																		<div class="row">';
   										              $expode = explode("=",$retweet['tweet_image']);
                                     $splice= array_splice($expode,3,2);
                                      for ($i=0; $i < count($splice); ++$i) { 
             echo '                    <div class="col-sm-6  mb-2">
                                         <img class="img-fluid"
                                             src="'.BASE_URL_PUBLIC.'uploads/posts/'.$splice[$i].'"
                                                        alt="Photo">
                                                </div>';
                                                   }

            echo '                     </div>
                                      <!-- /.row -->
                                  </div>
                                  <!-- /.col -->
                              </div>
                              <!-- /.row -->

                             <div class="row">';
                              if($count == 6){
            echo '            <div class="col-sm-12">
                                <a name="" id="" class="btn btn-primary btn-sm float-right" href="#" role="button">View More photo >>></a>
                                </div>';
                                }else{
   										           $expode = explode("=",$retweet['tweet_image']);
                                 $splice= array_splice($expode,5,3);
                                 for ($i=0; $i < count($splice); ++$i) { 
            echo '              <div class="col-sm-4">
                                   <img class="img-fluid mb-1"
                                                src="'.BASE_URL_PUBLIC.'uploads/posts/'.$splice[$i].'"
                                                alt="Photo">
                                 </div>';

                                    }
                                }
            echo '             </div>
                           <!-- /.row -->';
						break;
						
						default:

						echo '       <div class="row mb-2">';
   										      $expode = explode("=",$retweet['tweet_image']);
                            $splice= array_splice($expode,0,1);
            echo '            <div class="col-sm-6 mb-2">
                                <img class="img-fluid"
                                    src="'.BASE_URL_PUBLIC.'uploads/posts/'.$splice[0].'"
                                    alt="Photo">
                              </div><!-- /.col -->';
                                        

            echo '            <div class="col-sm-6">
																<div class="row">';
   										              $expode = explode("=",$retweet['tweet_image']);
                                    $splice= array_splice($expode,1,2);
                                    for ($i=0; $i < count($splice); ++$i) { 
            echo '                 <div class="col-sm-6">
                                      <img class="img-fluid mb-2"
                                          src="'.BASE_URL_PUBLIC.'uploads/posts/'.$splice[$i].'"
                                                        alt="Photo">
                                                </div>';
                                    }

             echo '                 </div>
                                    <!-- /.row -->
																		<div class="row">';
   										              $expode = explode("=",$retweet['tweet_image']);
                                     $splice= array_splice($expode,3,2);
                                      for ($i=0; $i < count($splice); ++$i) { 
             echo '                    <div class="col-sm-6  mb-2">
                                         <img class="img-fluid"
                                             src="'.BASE_URL_PUBLIC.'uploads/posts/'.$splice[$i].'"
                                                        alt="Photo">
                                                </div>';
                                                   }

            echo '                     </div>
                                      <!-- /.row -->
                                  </div>
                                  <!-- /.col -->
                              </div>
                              <!-- /.row -->

                             <div class="row">';
   										           $expode = explode("=",$retweet['tweet_image']);
                                 $splice= array_splice($expode,5,3);
                                 for ($i=0; $i < count($splice); ++$i) { 
            echo '              <div class="col-sm-4">
                                   <img class="img-fluid mb-1"
                                                src="'.BASE_URL_PUBLIC.'uploads/posts/'.$splice[$i].'"
                                                alt="Photo">
                                 </div>';

                                    }
            echo '             </div>
                           <!-- /.row -->';
						

			      echo'                 <div class="row">';
                                        $expode = explode("=",$retweet['tweet_image']);
                                        $splice= array_splice($expode,7,3);
                                         for ($i=0; $i < count($splice); ++$i) {
            echo'                  <div class="col-sm-4 mb-2">
                                            <img class="img-fluid"
                                                src="'.BASE_URL_PUBLIC.'uploads/posts/'.$splice[$i].'"
                                                alt="Photo">
                                        </div>';
                                             }
            echo'                  </div>
                                    <!-- /.row -->
                                    <div class="row">
                                       <div class="col-sm-12">
                                           <a name="" id="" class="btn btn-primary btn-sm float-right" href="#" role="button">View More photo >>></a>
                                        </div>
                                    </div>
                                    <!-- /.row -->';

             break;
        
                            }
											}

       echo '         			 </div>
                					 </div>
                				</div>
                			</div>
                		</div>
                		<div class="retweet-popup-footer"> 
                			<div class="retweet-popup-footer-right">
                				<button class="retweet-it" type="submit"><i class="fa fa-retweet" aria-hidden="true"></i>Retweet</button>
                			</div>
                		</div>
                	</div>
                </div>
                </div> ';

	 }
?>