 <?php include "header_navbar_footer/header.php"?>

 <?php include "header_navbar_footer/navbar.php"?>

<?php $row=$home->userData($_SESSION['key']);  ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="container mt-3 mb-5">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1><i class="fa fa-setting"></i>Settings</h1>
             </div>
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="<?php echo HOME ;?>">Home</a></li>
                     <li class="breadcrumb-item active"><a href="<?php echo PROFILE ;?>">User profile </a></li>
                 </ol>
             </div>
         </div>
     </section>

     <section class="content">
         <div class="row">

             <div class="col-md-3 mb-3">
                 <!-- Profile Image -->
                 <div class="info-box mb-3">
                     <div class="info-inner">
                         <div class="info-in-head">
                             <!-- PROFILE-COVER-IMAGE -->
                             <img src="<?php echo BASE_URL_LINK_ALL ;?>image/img/photo1.png"> </div>
                         <!-- info in head end -->
                         <div class="info-in-body">
                             <div class="in-b-box">
                                 <div class="in-b-img">
                                     <!-- PROFILE-IMAGE -->
                                     <img src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg"> </div>
                             </div><!--  in b box end-->
                             <div class="info-body-name">
                                 <div class="in-b-name">
                                     <div><a href="<?php echo PROFILE ;?>">Nina Mcintire</a></div>
                                     <span><small><a href="<?php echo PROFILE ;?>">Software Engineer</a></small></span>
                                 </div><!-- in b name end-->
                             </div><!-- info body name end-->
                         </div><!-- info in body end-->
                         <div class="info-in-footer">
                             <div class="number-wrapper">
                                 <div class="num-box">
                                     <div class="num-head">
                                         POSTS
                                     </div>
                                     <div class="num-body">
                                         19 </div>
                                 </div>
                                 <div class="num-box">
                                     <div class="num-head">
                                         FOLLOWING
                                     </div>
                                     <div class="num-body">
                                         <span class="count-following">3</span>
                                     </div>
                                 </div>
                                 <div class="num-box">
                                     <div class="num-head">
                                         FOLLOWERS
                                     </div>
                                     <div class="num-body">
                                         <span class="count-followers">3</span>
                                     </div>
                                 </div>
                             </div><!-- mumber wrapper-->
                         </div><!-- info in footer -->
                     </div><!-- info inner end -->
                 </div><!-- info box -->
             </div>
             <!-- /.col -->

             <div class="col-md-3 mb-3">
                 <div class="card">
                     <div class="card-body p-0">
                         <div class="list-group " id="list-tab" role="tablist">
                             <a class="list-group-item list-group-item-action active" id="list-Account-list"
                                 data-toggle="tab" href="#list-Account" role="tab" aria-controls="list-Account"><i
                                     class="fa fa-lock"></i> Account</a>
                             <a class="list-group-item list-group-item-action" id="list-Password-list" data-toggle="tab"
                                 href="#list-Password" role="tab" aria-controls="list-Password"><i
                                     class="fa fa-key"></i> Password</a>

                         </div>
                     </div>
                     <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
             </div>
             <!-- /.col -->

             <div class="col-md-3 mb-3">

                 <div class="tab-content" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="list-Account" role="tabpanel"
                         aria-labelledby="list-home-list">
                         <?php include "settings/account.php"?>
                     </div> <!-- END-OF A LINK OF inbox ID=#  -->
                     <div class="tab-pane fade " id="list-Password" role="tabpanel"
                         aria-labelledby="list-Password-list">
                         <?php include "settings/password.php"?>
                     </div> <!-- END-OF A LINK OF sent ID=#  -->

                 </div>
             </div>
             <!-- /.col -->

             <div class="col-md-3">
                 <!-- hastTag Me Box -->
                 <div class="card card-primary mb-3">
                     <div class="card-header main-active p-1">
                         <h5 class="card-title text-center"><i> Jobs</i></h5>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                         <strong><i class="fa fa-book mr-1"></i> #Education</strong>

                         <p class="text-muted">
                             B.S. in Computer Science from the University of Tennessee at Knoxville
                         </p>

                         <hr>

                         <strong><i class="fa fa-map-marker mr-1"></i> #Location</strong>

                         <p class="text-muted">Malibu, California</p>

                         <hr>

                         <strong><i class="fa fa-pencil mr-1"></i> Skills</strong>

                         <p class="text-muted">
                             <span class="badge badge-danger">UI Design</span>
                             <span class="badge badge-success">Coding</span>
                             <span class="badge badge-info">Javascript</span>
                             <span class="badge badge-warning">PHP</span>
                             <span class="badge badge-primary">Node.js</span>
                         </p>

                         <hr>

                         <strong><i class="fa fa-file-text-o mr-1"></i> Notes</strong>

                         <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                             fermentum
                             enim neque.</p>
                     </div>
                     <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
             </div>
             <!-- /.col -->

         </div>
         <!-- /.row -->
     </section>
     <!-- /.content -->
 </div>
 <!-- /.container -->

 <?php include "header_navbar_footer/footer.php"?>