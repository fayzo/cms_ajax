<?php 
session_start();
include('../init.php');
// $users->preventUsersAccess($_SERVER['REQUEST_METHOD'],realpath(__FILE__),realpath($_SERVER['SCRIPT_FILENAME']));

if (isset($_POST['showpimage']) && !empty($_POST['showpimage'])) {
    $user_id= $_SESSION['key'];
    $tweet_id=$_POST['showpimage'];
    $getid="";
    $tweet= $home->getPopupTweet($user_id,$tweet_id,$getid);
    $tweet_likes= $home->likes($user_id,$tweet_id);
    $Retweet= $home->checkRetweet($tweet_id, $user_id);
    $user= $home->userData($tweet_id); ?>

    <div class="img-popup">
      <div class="wrap6">
        <span class="colose">
        	<button class="close-imagePopup"><i class="fa fa-times" aria-hidden="true"></i></button>
        </span>
        <div class="img-popup-wrap">
        	<div class="img-popup-body">
        		<img src="<?php echo BASE_URL_PUBLIC."uploads/posts/".$tweet['tweet_image'];?>"/>
            </div>
        	<div class="img-popup-footer">
               <div class="card">
                   <div class="card-body">

        		        <div class="user-block">
                            <img class="rounded-circle img-bordered-sm"
                                src="<?php echo BASE_URL_LINK."image/users_profile_cover/".$tweet['profile_img'] ;?>"
                                alt="user image">
                            <span class="username">
                                <a style="float:left;padding-right:3px;" href="<?php echo PROFILE ;?>"><?php echo $tweet['firstname']." ".$tweet['lastname'] ;?></a>
                                <!-- //Jonathan Burke Jr. -->
                                <span class="description">Shared publicly - 7:30 PM today</span>
                            </span>
                            <span class="description"><?php echo $home->getTweetLink($tweet['status']); ?></span>
                        </div> <!-- user-block -->

                    </div><!-- card-body -->
                    <div class="card-footer text-muted text-center"><!-- card-footer -->
                    <ul class="list-inline">
                        <?php 
           if ($users->loggedin() === true) {
        echo '
            <li class="list-inline-item mx-4 ">
							<div class="d-inline-block ">
								<h3>Shared </h3> 
									 '.(($tweet['tweet_id'] == $Retweet["retweet_id"])? 
									 '<button class="share-btn retweeted" data-tweet="'.$tweet["tweet_id"].'"  data-user="'.$tweet["tweetBy"].'" >
									    <i class="fa fa-share green " aria-hidden="true"></i><span class="retweetcounter" > '.$Retweet["retweet_counts"].'</span></button>'
									    :'<button class="retweet" data-tweet="'.$tweet["tweet_id"].'"  data-user="'.$tweet["tweetBy"].'" >
									    <i class="fa fa-share" aria-hidden="true"></i><span class="retweetcounter" >'.(($Retweet["retweet_counts"] > 0)? " ".$Retweet["retweet_counts"] :'' ).'</span>
									 </button>').'
							</div>
						</li>
						
            <li class="list-inline-item mx-4">
								<div class="d-inline-block ">
									 <h3>LIKES</h3> 
										'.(($tweet_likes["like_on"] == $tweet["tweet_id"])? 
										'<button class="unlike-btn" data-tweet="'.$tweet["tweet_id"].'"  data-user="'.$tweet["tweetBy"].'">
										   <i class="fa fa-thumbs-up" aria-hidden="true"></i><span class="likescounter" > '.$tweet["likes_counts"].'</span></button> ' 
										   : '<button class="like-btn" data-tweet="'.$tweet["tweet_id"].'"  data-user="'.$tweet["tweetBy"].'">
									     <i class="fa fa-thumbs-o-up " aria-hidden="true"></i><span class="likescounter" >'.(($tweet["likes_counts"] > 0)? " ".$tweet["likes_counts"]:'' ).'</span>
										</button> ').'
							</div>
						</li>

            <li class="list-inline-item mx-4">
								<div class="d-inline-block ">
							   	<h3>	Viewers </h3> 2,030
						  	</div>
						</li>
            <li class="list-inline-item mx-4">
							<div class="d-inline-block ">
							   	<h3>Posted on</h3>'.$home->timeAgo($tweet['posted_on']).' 
						  	</div>
							 </li>
				 '.(($tweet["tweetBy"] === $user_id)?'
						<li class="list-inline-item mx-4">
							<div class="d-inline-block ">
									 <h3>Delete</h3> 
												<label class="deleteTweet" data-tweet="'.$tweet["tweet_id"].'"  data-user="'.$tweet["tweetBy"].'" ><i style="color:red" class="fa fa-trash" aria-hidden="true"></i></label>
						  	</div>
						</li> ' :'').'
									 ';
						 }else {?>
                        <li class="list-inline-item mx-4 ">
                            <div class="d-inline-block ">
                                <h3>Shared </h3>
                                <?php echo $tweet["retweet_counts"] ;?>
                            </div>
                        </li>

                        <li class="list-inline-item mx-4 ">
                            <div class="d-inline-block ">
                                <h3>LIKES</h3>
                                <?php echo $tweet["likes_counts"] ;?>
                            </div>
                        </li>

                        <li class="list-inline-item mx-4">
                            <div class="d-inline-block ">
                                <h3>Posted on</h3> <?php echo $home->timeAgo($tweet['posted_on']);?>
                            </div>
                        </li>

                        <?php } ?>
                    </ul>

                    </div><!-- card-footer END -->
                </div><!-- card -->
            </div> <!-- popup-footer -->

         </div> <!-- img-popup-wrap -->

       </div> <!-- wrap6 -->
    </div><!-- img-popup ends-->

<?php }
?>

