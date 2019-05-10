<?php include "header_navbar_footer/header.php"?>

<?php include "header_navbar_footer/navbar.php"?>


<div class="container mt-3 mb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i>Notification</i></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo HOME ;?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo HOME ;?>"> User Profile</a></i></li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Main content -->
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

                <!-- Profile Image -->
                <!-- <div class="card card-primary card-outline borders-tops mb-3">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid rounded-circle"
                                src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user4-128x128.jpg"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Nina Mcintire</h3>

                        <p class="text-muted text-center">Software Engineer</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li>
                        </ul>

                        <a href="#" class="btn main-active btn-block"><b>Follow</b></a>
                        btn-primary
                    </div>
                    /.card-body
                </div>
                /.card -->

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

                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum
                            enim neque.</p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header borders-tops text-center p-2">
                        <h3><i> Notification</i></h3>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <!-- The timeline -->
                        <ul class="timeline timeline-inverse">
                            <!-- timeline time label -->
                            <li class="time-label">
                                <span class="bg-danger text-light">
                                    10 Feb. 2014
                                </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-envelope bg-primary text-light"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an
                                        email</h3>

                                    <div class="timeline-body">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                        quora plaxo ideeli hulu weebly balihoo...
                                    </div>
                                    <div class="timeline-footer">
                                        <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-user bg-info text-light"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                    <h3 class="timeline-header no-border"><a href="#">Sarah Young</a>
                                        accepted your friend request
                                    </h3>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-comments bg-warning text-light"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your
                                        post</h3>

                                    <div class="timeline-body">
                                        Take me to your leader!
                                        Switzerland is small and neutral!
                                        We are more like Germany, ambitious and misunderstood!
                                    </div>
                                    <div class="timeline-footer">
                                        <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline time label -->
                            <li class="time-label">
                                <span class="bg-success text-light">
                                    3 Jan. 2014
                                </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-camera text-light" style="background-color:#6f42c1"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o text-light"></i> 2 days
                                        ago</span>

                                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos
                                    </h3>

                                    <div class="timeline-body">
                                        <img src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user4-128x128.jpg" alt="..."
                                            class="margin">
                                        <img src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user4-128x128.jpg" alt="..."
                                            class="margin">
                                        <img src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user4-128x128.jpg" alt="..."
                                            class="margin">
                                        <img src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user4-128x128.jpg" alt="..."
                                            class="margin">
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <li>
                                <i class="fa fa-clock-o bg-info text-light"></i>
                            </li>
                        </ul>
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
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
                        </div>
                        <!-- /. card widget-user -->
                    </div>
                    <!-- /. col -->

                    <div class="col-md-12">
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
            </div>
            <!-- /.col-md-3 -->

        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>

<?php include "header_navbar_footer/footer.php"?>