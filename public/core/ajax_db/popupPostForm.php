<?php 
session_start();
include('../init.php');
// $users->preventUsersAccess($_SERVER['REQUEST_METHOD'],realpath(__FILE__),realpath($_SERVER['SCRIPT_FILENAME']));

?>

 <!-- POPUP TWEET-FORM WRAP -->
<div class="popup-tweet-wrap">
	<div class="wrap">
		<div class="popwrap-inner">
            <span id="response-PostMessage"></span>
            <div class="card">
                <div class="card-header">
                    <span class="closeDelete"><button class="closeTweetPopup"><i class="fa fa-times" aria-hidden="true"></i></button></span>
				    <h4 class="text-muted text-center">Compose new Post</h4>
                </div>
              <div class="card-body message-color">
                <form method="post" id="popupForm" enctype="multipart/form-data">
                    <input type="hidden" name="id_posts" id="id_posts"
                        value="<?php echo $_SESSION['key'];?>">
                    <div class="user-block">
                        <img class="rounded-circle img-bordered-sm"
                            src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg"
                            alt="user image">
                        <span class="username">
                            <textarea class="status" name="status" id="status"
                                placeholder="Type Something here!" rows="4" cols="50"></textarea>
                            <div class="hash-box">
                                <ul>
                                </ul>
                            </div>
                        </span>
                    </div>

                        <div class="message-footer text-muted">
                            <div class="t-fo-left">
                                <ul>
                                    <input type="file" name="files[]" id="file" multiple>
                                    <li><label for="file"><i class="fa fa-camera"
                                                aria-hidden="true"></i></label>
                                        <span class="tweet-error">
                                            <span style="color: red;" id="empty-posts2"></span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="t-fo-right">
                                <span id="count">200</span>
                                <input type="submit" class="btn main-active"  id="addpost" name="addpost" value="Post">
                            </div>
                        </div>
                    </form>
                </div> <!-- card-body -->
            </div><!-- card -end -->

			
		</div>
    </div> <!-- wrap -->
</div>
 <!-- POPUP TWEET-FORM END -->
