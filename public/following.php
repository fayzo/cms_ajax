<?php include "header_navbar_footer/header.php"?>

<?php include "header_navbar_footer/navbar.php" ?>
<?php 

$row=$home->userData($_SESSION['key']);
?>
<div class="container-fuild">
    <div class="row">
        <div class="col-12">
            <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header text-white"
                     style="background: url('<?php echo BASE_URL_PUBLIC."assets/image/users_profile_cover/".$row['cover_img'] ;?>')no-repeat center center;background-size:cover;">
                    <h3 class="widget-user-username">Elizabeth Pierce</h3>
                    <h5 class="widget-user-desc">Web Designer</h5>
                </div>
                <div class="widget-user-image">
                    <img class="rounded-circle" src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user3-128x128.jpg"
                        alt="User Avatar">
                </div>
                <div class="widget-user-image-under">
                </div>
                <div class="card-footer">
                    <div class="description">
                        <h5 class="description-header">3,200</h5>
                        <span class="description-text"><a href="<?php echo FOLLOWERS ;?>">FOLLOWERS</a></span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description ">
                        <h5 class="description-header">13,000</h5>
                        <span class="description-text"><a href="<?php echo FOLLOWING ;?>"> FOLLOWING</a></span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description">
                        <h5 class="description-header">35</h5>
                        <span class="description-text">LIKES</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description">
                        <h5 class="description-header">35</h5>
                        <span class="description-text">VIEWS</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.footer -->
            </div>
            <!-- /. card widget-user -->
        </div>
        <!-- column -->
    </div>
    <!-- row -->
</div>
<!-- container-fuild -->
<div class="container mt-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i> Following</i></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo HOME ;?>">Home</a></li>
                    <li class="breadcrumb-item active"><i> User Following</i></li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-md-3 mb-3">
                <div class="row">
                    <div class="col-md-12">
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
                                            <img src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg">
                                        </div>
                                    </div><!--  in b box end-->
                                    <div class="info-body-name">
                                        <div class="in-b-name">
                                            <div><a href="<?php echo PROFILE ;?>">Nina Mcintire</a></div>
                                            <span><small><a href="<?php echo PROFILE ;?>">Software
                                                        Engineer</a></small></span>
                                        </div><!-- in b name end-->
                                    </div><!-- info body name end-->
                                </div><!-- info in body end-->
                                <div class="info-in-footer">
                                    <div class="number-wrapper">
                                        <div class="num-box">
                                            <div class="num-head">
                                                TWEETS
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
                    </div><!-- col  -->

                    <div class="col-md-12">
                        <!-- About Me Box -->
                        <div class="card card-primary mb-3">
                            <div class="card-header main-active p-1">
                                <h5 class="card-title text-center"><i> About Me</i></h5>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fa fa-book mr-1"></i> Education</strong>

                                <p class="text-muted">
                                    B.S. in Computer Science from the University of Tennessee at Knoxville
                                </p>

                                <hr>

                                <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

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
                                    fermentum enim neque.</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div><!-- col  -->

                </div><!-- row  -->
            </div>
            <!-- /.col -->


            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-follow user-follow">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="user-header-follow text-white" style="background: url('<?php echo BASE_URL_LINK_ALL ;?>image/img/photo1.png') center center;background-size: cover; overflow: hidden; width: 100%;">
                            </div>
                            <div class="user-image-follow">
                                <img class="rounded-circle elevation-2"
                                    src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <h5 class="user-username-follow"><a href="<?php echo PROFILE ;?>"> Alexander Pierce</a></h5>
                                <h5 class="user-username-follow"><small> Founder & CEO</small></h5>
                                <a href="#" type="button" class="btn main-active btn-md">Following</a>
                            </div>
                            <!-- /.footer -->
                        </div>
                        <!-- /. card widget-user -->
                    </div>
                    <!-- col -->

                    <div class="col-md-4 mb-3">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-follow user-follow">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="user-header-follow text-white" style="background: url('<?php echo BASE_URL_LINK_ALL ;?>image/img/photo1.png') center center;background-size: cover; overflow: hidden; width: 100%;">
                            </div>
                            <div class="user-image-follow">
                                <img class="rounded-circle elevation-2"
                                    src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <h5 class="user-username-follow"><a href="<?php echo PROFILE ;?>"> Alexander Pierce</a></h5>
                                <h5 class="user-username-follow"><small> Founder & CEO</small></h5>
                                <a href="#" type="button" class="btn main-active btn-md">Following</a>
                            </div>
                            <!-- /.footer -->
                        </div>
                        <!-- /. card widget-user -->
                    </div>
                    <!-- col -->

                    <div class="col-md-4 mb-3">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-follow user-follow">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="user-header-follow text-white" style="background: url('<?php echo BASE_URL_LINK_ALL ;?>image/img/photo1.png') center center;background-size: cover; overflow: hidden; width: 100%;">
                            </div>
                            <div class="user-image-follow">
                                <img class="rounded-circle elevation-2"
                                    src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <h5 class="user-username-follow"><a href="<?php echo PROFILE ;?>"> Alexander Pierce</a></h5>
                                <h5 class="user-username-follow"><small> Founder & CEO</small></h5>
                                <a href="#" type="button" class="btn main-active btn-md">Following</a>
                            </div>
                            <!-- /.footer -->
                        </div>
                        <!-- /. card widget-user -->
                    </div>
                    <!-- col -->

                    <div class="col-md-4 mb-3">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-follow user-follow">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="user-header-follow text-white" style="background: url('<?php echo BASE_URL_LINK_ALL ;?>image/img/photo1.png') center center;background-size: cover; overflow: hidden; width: 100%;">
                            </div>
                            <div class="user-image-follow">
                                <img class="rounded-circle elevation-2"
                                    src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <h5 class="user-username-follow"><a href="<?php echo PROFILE ;?>"> Alexander Pierce</a></h5>
                                <h5 class="user-username-follow"><small> Founder & CEO</small></h5>
                                <a href="#" type="button" class="btn main-active btn-md">Following</a>
                            </div>
                            <!-- /.footer -->
                        </div>
                        <!-- /. card widget-user -->
                    </div>
                    <!-- col -->

                    <div class="col-md-4 mb-3">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-follow user-follow">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="user-header-follow text-white" style="background: url('<?php echo BASE_URL_LINK_ALL ;?>image/img/photo1.png') center center;background-size: cover; overflow: hidden; width: 100%;">
                            </div>
                            <div class="user-image-follow">
                                <img class="rounded-circle elevation-2"
                                    src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <h5 class="user-username-follow"><a href="<?php echo PROFILE ;?>"> Alexander Pierce</a></h5>
                                <h5 class="user-username-follow"><small> Founder & CEO</small></h5>
                                <a href="#" type="button" class="btn main-active btn-md">Following</a>
                            </div>
                            <!-- /.footer -->
                        </div>
                        <!-- /. card widget-user -->
                    </div>
                    <!-- col -->

                    <div class="col-md-4 mb-3">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-follow user-follow">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="user-header-follow text-white" style="background: url('<?php echo BASE_URL_LINK_ALL ;?>image/img/photo1.png') center center;background-size: cover; overflow: hidden; width: 100%;">
                            </div>
                            <div class="user-image-follow">
                                <img class="rounded-circle elevation-2"
                                    src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <h5 class="user-username-follow"><a href="<?php echo PROFILE ;?>"> Alexander Pierce</a></h5>
                                <h5 class="user-username-follow"><small> Founder & CEO</small></h5>
                                <a href="#" type="button" class="btn main-active btn-md">Following</a>
                            </div>
                            <!-- /.footer -->
                        </div>
                        <!-- /. card widget-user -->
                    </div>
                    <!-- col -->

                </div>
                <!-- row -->
            </div>
            <!-- /.col -->

            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <!-- whoTofollow: user whoTofollow style 1 -->
                        <div class="card mb-3">
                            <div class="card-header main-active text-center">
                                <i> WHO TO FOLLOW </i>
                            </div>
                            <div class="card-body whoTofollow">
                                <ul class="whoTofollow-list">
                                    <li>
                                        <div class="whoTofollow-list-img"><img
                                                src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg">
                                        </div>
                                        <ul class="whoTofollow-list-info">
                                            <li><a href="<?php echo PROFILE ;?>">Count Dracula</a></li>
                                            <li><small style="font-size: 12px;">Founder & CEO</small></li>
                                        </ul>
                                        <div class="whoTofollow-btn">
                                            <a href="#" type="button" class="btn main-active btn-sm">Follow</a>
                                        </div>
                                    </li>
                                    <!-- End Contact Item -->
                                    <li>
                                        <div class="whoTofollow-list-img"><img
                                                src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg">
                                        </div>
                                        <ul class="whoTofollow-list-info">
                                            <li><a href="<?php echo PROFILE ;?>">Count Dracula</a></li>
                                            <li><small style="font-size: 12px;">Founder & CEO</small></li>
                                        </ul>
                                        <div class="whoTofollow-btn">
                                            <a href="#" type="button" class="btn main-active btn-sm">Follow</a>
                                        </div>
                                    </li>
                                    <!-- End Contact Item -->
                                    <li>
                                        <div class="whoTofollow-list-img"><img
                                                src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg">
                                        </div>
                                        <ul class="whoTofollow-list-info">
                                            <li><a href="<?php echo PROFILE ;?>">Count Dracula</a></li>
                                            <li><small style="font-size: 12px;">Founder & CEO</small></li>
                                        </ul>
                                        <div class="whoTofollow-btn">
                                            <a href="#" type="button" class="btn main-active btn-sm">Follow</a>
                                        </div>
                                    </li>
                                    <!-- End Contact Item -->
                                    <li>
                                        <div class="whoTofollow-list-img"><img
                                                src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg">
                                        </div>
                                        <ul class="whoTofollow-list-info">
                                            <li><a href="<?php echo PROFILE ;?>">Count Dracula</a></li>
                                            <li><small style="font-size: 12px;">Founder & CEO</small></li>
                                        </ul>
                                        <div class="whoTofollow-btn">
                                            <a href="#" type="button" class="btn main-active btn-sm">Follow</a>
                                        </div>
                                    </li>
                                    <!-- End Contact Item -->
                                </ul>

                            </div>
                            <!-- /. card-body -->
                        </div>
                        <!-- /. card widget-user -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-12">
                        <!-- hastTag Me Box -->
                        <div class="card card-primary mb-3">
                            <div class="card-header main-active p-1">
                                <h5 class="card-title text-center"><i> HashTags</i></h5>
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
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>

<?php include "header_navbar_footer/footer.php"?>