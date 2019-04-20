<div role="tabpanel">
  <div class="row">
    <div class="col-4 col-lg-2 bg-light py-3 px-2">
      <div class="list-group " id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="tab" href="#list-Dashboard" role="tab" aria-controls="list-home">Dashboard</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-Add_Post" role="tab" aria-controls="list-profile">Posts</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-Manage_Admins" role="tab" aria-controls="list-profile">Users Admins</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-Comment" role="tab" aria-controls="list-profile">Comment</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-Live_Blog" role="tab" aria-controls="list-profile">Pages</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="tab" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-Logout" role="tab" aria-controls="list-settings">Logout</a>
      </div>
    </div>

    <div class="col-8 col-lg-10 bg-light">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-Dashboard" role="tabpanel" aria-labelledby="list-home-list">
           <?php include "siderbar/dashboard.php"?>
        </div> <!-- END-OF A LINK OF DASH_BOARD ID=#  -->

        <div class="tab-pane fade" id="list-Add_Post" role="tabpanel" aria-labelledby="list-profile-list">
            <?php include "siderbar/add_post.php"?>
        </div> <!-- END-OF A LINK OF add_post ID=#  -->

        <div class="tab-pane fade" id="list-Manage_Admins" role="tabpanel" aria-labelledby="list-messages-list">
            <?php include "siderbar/manage_admin.php"?>
         </div> <!-- END-OF A LINK OF MANAGE ADMINS ID=#  -->

        <div class="tab-pane fade" id="list-Comment" role="tabpanel" aria-labelledby="list-settings-list">
            <div class="row-2">
                <div class="col-12" style="overflow-x: auto; white-space: nowrap; width: 100%;height: 400px">
                     <?php include "siderbar/un_approval_comment.php"?>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="overflow-x: auto; white-space: nowrap; width: 100%;height: 400px">
                      <?php include "siderbar/approval_comment.php"?>
                </div>
            </div>
         </div> <!-- END-OF A LINK OF Comment ID=#  -->

        <div class="tab-pane fade" id="list-Live_Blog" role="tabpanel" aria-labelledby="list-settings-list">
           <?php include "siderbar/pages.php"?>
        </div> <!-- END-OF A LINK OF Comment ID=#  -->

        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-settings-list">
           <?php include "siderbar/profile.php"?>
        </div> <!-- END-OF A LINK OF profile ID=#  -->

        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-settings-list">
           <?php include "siderbar/messages.php"?>
        </div> <!-- END-OF A LINK OF Messages ID=#  -->

        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
           <?php include "siderbar/setting.php"?>
        </div> <!-- END-OF A LINK OF setting ID=#  -->

        <div class="tab-pane fade" id="list-Logout" role="tabpanel" aria-labelledby="list-settings-list">
            <?php include "siderbar/logout.php"?>
        </div> <!-- END-OF A LINK OF logout ID=#  -->
      </div>
      
    </div>
  </div>
</div>