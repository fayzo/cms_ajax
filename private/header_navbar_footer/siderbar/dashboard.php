             <!-- TABLE OF ADDPOST -->

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
                         <h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i>
                             <?php echo $user_admin->countUSERS() ;?></h4>
                         <p class="card-text">Users</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-3 mb-2">
                 <div class="card bg-light">
                     <div class="card-body">
                         <h4 class="card-title"><i class="fa fa-book" aria-hidden="true"></i>
                             <?php echo  $user_admin->countCOMMENTS() ;?></h4>
                         <p class="card-text">N0 OF Comments</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-3 mb-2">
                 <div class="card bg-light">
                     <div class="card-body">
                         <h4 class="card-title"><i class="fa fa-book" aria-hidden="true"></i>
                             <?php echo $user_admin->countApprovalCOMMENTS() ;?></h4>
                         <p class="card-text">Approvals Comments</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-3 mb-2">
                 <div class="card bg-light">
                     <div class="card-body">
                         <h4 class="card-title"><i class="fa fa-book" aria-hidden="true"></i>
                             <?php echo $user_admin->countUnapprovalCOMMENTS() ;?></h4>
                         <p class="card-text">Un-Approvals Comments</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-3 mb-2">
                 <div class="card bg-light">
                     <div class="card-body">
                         <h4 class="card-title"><i class="fa fa-pen" aria-hidden="true"></i> <?php echo $user_admin->countPOSTS() ;?>
                         </h4>
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

 <!-- Calendar -->

 <!-- CARD -->
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
			         $increment= 1;
                     $result= $db->query("SELECT * FROM add_admin");
			       if ($result->num_rows > 0) {
                     while($row= $result->fetch_array()){ ?>
                 <tr>
                     <td><?php echo  $increment++ ; ?></td>
                     <td class="text-center">
                         <div class="avatar">
                             <?php 
                                 if(!empty($row["profile_image"])){?>
                             <img class="img-avatar"
                                 src="assets/image/uploads/<?php echo $row["profile_image"] ;?>"
                                 width="80px" alt="<?php echo $row["email"] ;?>">
                             <?php }else{?>
                             <img class="img-avatar" src="../assets/image/image_default/defaultprofileimage.png"
                                 width="80px" alt="<?php echo $row["email"] ;?>">
                             <?php } ?>
                             <span class="avatar-status badge-success"></span>
                         </div>
                     </td>
                     <td>
                         <div><?php echo $row["lastname"];?></div>
                         <div class="small text-muted">
                             <span><?php echo $user_admin->lengths($user_admin->timeAgo($row["date"]));?> |Registered :<?php echo $user_admin->timeAgo($row["date"]);?>
                             </span>
                         </div>
                         <!-- -Jan 1, 2015 -->
                     </td>
                     <td class="text-center">
                         <!-- <i class="flag-icon flag-icon-rw h4 mb-0" id="us" title="us"></i> -->
                         <i class="flag-icon flag-icon-<?php echo strtolower($row["country"]) ;?> h4 mb-0"
                             id="<?php echo strtolower($row["country"]) ;?>" title="us"></i>
                     </td>
                     <td>
                         <div class="clearfix">
                             <div class="text-center">
                                 <strong><?php echo $row["counts_login"] ;?>%</strong>
                             </div>
                             <div>
                                 <small
                                     class="text-muted"><?php echo date('M j, Y',strtotime($row["date"]))." - ".date('M j, Y',strtotime($row["last_login"]));?></small>
                                 <!-- Jun 11, 2015 - Jul 10, 2015 -->
                             </div>
                         </div>
                         <div class="progress progress-xs">
                             <?php echo $user_admin->Users_usage_dashboard($row["counts_login"]) ;?>
                         </div>
                     </td>
                     <td class="text-center">
                         <i class="fa fa-cc-mastercard" style="font-size:24px"></i>
                     </td>
                     <td>
                         <div class="small text-muted">Last login</div>
                         <small><?php echo $user_admin->timeAgo($row["last_login"]);?></small>
                     </td>
                 </tr>
                 <?php } }?>

             </tbody>
         </table>
     </div>
 </div>