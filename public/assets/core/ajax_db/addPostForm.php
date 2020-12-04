<?php 
session_start();
include('../init.php');
// $users->preventUsersAccess($_SERVER['REQUEST_METHOD'],realpath(__FILE__),realpath($_SERVER['SCRIPT_FILENAME']));
if (isset($_POST['key']) == 'textarea'){

	$user_id= $users->test_input($_POST['id']);
	$status= $users->test_input($_POST['status']);

	if (!empty($status)) {

		if (strlen($status) > 200) {
			exit('<div class="alert alert-danger alert-dismissible fade show text-center">
                    <button class="close" data-dismiss="alert" type="button">
                        <span>&times;</span>
                    </button>
                    <strong>The text is too long !!!</strong> </div>');
		}

	    preg_match_all("/#+([a-zA-Z0-9_]+)/i",$status,$hashtag);
		if (!empty($hashtag)) {
			$home->addTrends($status);
		}
		
		// $home->addmention($status,$user_id,$tweet_id);

		$users->creates('Tweets',array(
            'status' => $status, 
            'tweetBy' => $user_id, 
            'posted_on' => date('Y-m-d H-i-s'),
		));
	

  }

}else{
	# code...
	$user_id= $users->test_input($_POST['id_posts']);
	$status= $users->test_input($_POST['status']);
	$files= $_FILES['files'];

	if (!empty($status) || !empty(array_filter($files['name'])) ) {
		if (!empty($files['name'][0])) {
			# code...
			$tweetimages = $home->uploadPostsImage($files);
		}

		if (strlen($status) > 200) {
			exit('<div class="alert alert-danger alert-dismissible fade show text-center">
                    <button class="close" data-dismiss="alert" type="button">
                        <span>&times;</span>
                    </button>
                    <strong>The text is too long !!!</strong> </div>');
		}
		preg_match_all("/#+([a-zA-Z0-9_]+)/i",$status, $hashtag);
		if (!empty($hashtag)) {
			# code...
			$home->addTrends($status);
		}
		// $home->addmention($status,$user_id,$tweet_id);

		$users->creates('Tweets',array(
            'status' => $status, 
            'tweetBy' => $user_id, 
            'tweet_image' => $tweetimages, 
            'posted_on' => date('Y-m-d H-i-s')
        ));

	}

}

?>