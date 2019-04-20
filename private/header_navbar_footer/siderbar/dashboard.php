 <?php
            //   TABLE OF ADDPOST
         $sql_post = $conn->query("SELECT COUNT(*) FROM addpost");
         $row_addpost = $sql_post->fetch_array();
         $total_post= array_shift($row_addpost);
          //   TABLE OF USERS
         $sql_users = $conn->query("SELECT COUNT(*) FROM add_admin");
         $row_users = $sql_users->fetch_array();
         $total_users= array_shift($row_users);
            //  TOTAL OF COMMENT
         $sql = $conn->query("SELECT COUNT(*) FROM comment");
         $row = $sql->fetch_array();
         $totalcomment= array_shift($row);
            // TOTAL OF APPROVAL COMMENTS
         $sql_approval = $conn->query("SELECT COUNT(*) FROM comment WHERE approved='on'");
         $row_approval = $sql_approval->fetch_array();
         $total_approval= array_shift($row_approval);
        //   TOTAL OF UN-APPROVAL COMMENTS
         $sql_unapproval = $conn->query("SELECT COUNT(*) FROM comment WHERE approved='off'");
         $row_unapproval = $sql_unapproval->fetch_array();
         $total_unapproval= array_shift($row_unapproval);
?>
 <h4 class="display-5 mb-2 text-center">DASH-BOARD</h4>
  <div class="card mb-3">
   <div class="main-active p-3">
       Website Overview
   </div>
   <div class="card-body text-center">
       <div class="row">
           <div class="col-md-3 mb-2">
               <div class="card bg-light">
                   <div class="card-body">
                       <h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $total_users ;?></h4>
                       <p class="card-text">Users</p>
                   </div>
               </div>
           </div>
           <div class="col-md-3 mb-2">
               <div class="card bg-light">
                   <div class="card-body">
                       <h4 class="card-title"><i class="fa fa-book" aria-hidden="true"></i> <?php echo  $totalcomment ;?></h4>
                       <p class="card-text">N0 OF Comments</p>
                   </div>
               </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card bg-light">
                    <div class="card-body">
                        <h4 class="card-title"><i class="fa fa-book" aria-hidden="true"></i> <?php echo $total_approval ;?></h4>
                        <p class="card-text">Approvals Comments</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card bg-light">
                    <div class="card-body">
                        <h4 class="card-title"><i class="fa fa-book" aria-hidden="true"></i> <?php echo $total_unapproval ;?></h4>
                        <p class="card-text">Un-Approvals Comments</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card bg-light">
                    <div class="card-body">
                        <h4 class="card-title"><i class="fa fa-pen" aria-hidden="true"></i> <?php echo $total_post ;?></h4>
                        <p class="card-text">Posts</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card bg-light">
                    <div class="card-body">
                        <h4 class="card-title"><i class="material-icons md-48"> insert_chart </i> 3435</h4>
                        <p class="card-text">Visitors</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- END OF CARD -->


 <div class="card mb-3">
     <div class="card-body">
         <table class="table table-responsive-sm table-hover ">
             <thead class="main-active">
                 <tr>
                     <th>N0</th>
                     <th class="text-center">
                         <i class="icon-people"></i>
                     </th>
                     <th>User</th>
                     <th class="text-center">Country</th>
                     <th>Usage</th>
                     <th class="text-center">Payment Method</th>
                     <th>Activity</th>
                 </tr>
             </thead>
             <tbody>
             <?php 
			  $increment= 0;
              $result= $conn->query("SELECT * FROM add_admin");
			if ($result->num_rows > 0) {
              while($row= $result->fetch_array()){ ?>
                 <tr>
                     <td><?php echo  $increment++ ; ?></td>
                     <td class="text-center">
                         <div class="avatar">
                             <img class="img-avatar" src="<?php echo BASE_URL_LINK ;?>image/file_log/filed.png" width="20px" alt="admin@bootstrapmaster.com">
                             <span class="avatar-status badge-success"></span>
                         </div>
                     </td>
                     <td>
                         <div><?php echo $row["admin_id"] ;?> <?php echo $row["lastname"];?></div>
                         <div class="small text-muted">
                             <span>New</span> | Registered: Jan 1, 2015</div>
                     </td>
                     <td class="text-center">
                         <i class="flag-icon flag-icon-rw h4 mb-0" id="us" title="us"></i>
                     </td>
                     <td>
                         <div class="clearfix">
                             <div class="float-left">
                                 <strong>50%</strong>
                             </div>
                             <div class="float-right">
                                 <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                             </div>
                         </div>
                         <div class="progress progress-xs">
                             <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </td>
                     <td class="text-center">
                         <i class="fab fa-cc-mastercard" style="font-size:24px"></i>
                     </td>
                     <td>
                         <div class="small text-muted">Last login</div>
                         <strong>10 sec ago</strong>
                     </td>
                 </tr>
              <?php } }?>
             </tbody>
         </table>
     </div>
 </div>