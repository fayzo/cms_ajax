<?php 
include('../init.php');

if (isset($_POST['search']) && !empty($_POST['search'])) {
    # code...
    $search= $users->test_input($_POST['search']);
    $result= $home->search($search);

     if (is_array($result) || is_object($result)){

         echo '<div class="nav-right-down-wrap">
                <ul> ';
                //  echo var_dump($result);
    
    foreach ($result as $user) {
        # code...
        ?>
                 <li>
  	            	<div class="nav-right-down-inner">
	            		<div class="nav-right-down-left">
	            			<a href="<?php echo BASE_URL_PUBLIC ;?>profile.php?username=<?php echo $user["username"];?>"> 
                            <?php if (empty($user['profile_img']) == 1) {
		                    	# code...
		                          echo '<img src="'.BASE_URL_LINK.''.NO_PROFILE_IMAGE_URL.'" />';
		                    }elseif (!empty($user['profile_img']) == $user['profile_img']) {
		                    	# code...
		                          echo '<img src="'.BASE_URL_LINK."image/users_profile_cover/".$user['profile_img'].'"/>';
		                    }
		                    ?>
                            </a>
	            		</div>
	            		<div class="nav-right-down-right">
	            			<div class="nav-right-down-right-headline">
                                <a href="<?php echo BASE_URL_PUBLIC ;?>profile.php?username=<?php echo $user["username"] ;?>"><?php echo $user["username"] ;?></a>
                                <span ><i class="fa fa-star" style="color:#e21010c7"></i> <?php echo " ".$user["career"]; ?></span>
	            			</div>
	            			<div class="nav-right-down-right-body">
                               <div><i class="fa fa-play" style="color:#e210a3c7"></i> <?php echo " ".$user["hobbys"]; ?></div>
	            			 
	            		    </div>
	            		</div>
	            	</div> 
	             </li> 
     <?php } ?>
           </ul>
         </div> 
<?php  }
}
?>