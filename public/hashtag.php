<?php include "header_navbar_footer/header.php"?>

<?php include "header_navbar_footer/navbar.php"?>

<!-- container-fuild -->
<div class="container mb-5 mt-3">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i>HashTag</i></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo HOME ;?>">Home</a></li>
                    <li class="breadcrumb-item active"><i><a href="<?php echo PROFILE ;?>"> User Profile</a></i></li>
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
                <div class="row">
                   
                    <div class="col-md-12 mb-4">
                        <!-- Box Comment -->
                        <div class="card card-profile card1">
                            <div class="card-body">
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="rounded-circle img-bordered-sm"
                                            src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg"
                                            alt="user image">
                                        <span class="username">
                                            <a href="<?php echo PROFILE ;?>">Jonathan Burke Jr.</a>
                                        </span>
                                        <span class="description">Shared publicly - 7:30 PM today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>

                                    <p>
                                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i>
                                            Share</a>
                                        <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i>
                                            Like</a>
                                        <span class="float-right">
                                            <a href="#" class="link-black text-sm">
                                                <i class="fa fa-comments-o mr-1"></i> Comments (5)
                                            </a>
                                        </span>
                                    </p>

                                    <div class="input-group">
                                        <input class="form-control form-control-sm" type="text"
                                            placeholder="Type a comment">
                                        <div class="input-group-append">
                                            <span class="input-group-text btn" onclick="#" aria-label="Username"
                                                aria-describedby="basic-addon1"><i
                                                    class="fa fa-arrow-right text-muted"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.post -->

                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="rounded-circle img-bordered-sm"
                                            src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user6-128x128.jpg"
                                            alt="User Image">
                                        <span class="username">
                                            <a href="<?php echo PROFILE ;?>">Adam Jones</a>
                                        </span>
                                        <span class="description">Posted 5 photos - 5 days ago</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <img class="img-fluid"
                                                src="<?php echo BASE_URL_LINK_ALL ;?>image/img/photo1.png" alt="Photo">
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-3"
                                                        src="<?php echo BASE_URL_LINK_ALL ;?>image/img/photo2.png"
                                                        alt="Photo">
                                                    <img class="img-fluid"
                                                        src="<?php echo BASE_URL_LINK_ALL ;?>image/img/photo3.jpg"
                                                        alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-3"
                                                        src="<?php echo BASE_URL_LINK_ALL ;?>image/img/photo4.jpg"
                                                        alt="Photo">
                                                    <img class="img-fluid"
                                                        src="<?php echo BASE_URL_LINK_ALL ;?>image/img/photo1.png"
                                                        alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <p>
                                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i>
                                            Share</a>
                                        <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i>
                                            Like</a>
                                        <span class="float-right">
                                            <a href="#" class="link-black text-sm">
                                                <i class="fa fa-comments-o mr-1"></i> Comments (5)
                                            </a>
                                        </span>
                                    </p>

                                    <div class="input-group">
                                        <input class="form-control form-control-sm" type="text"
                                            placeholder="Type a comment">
                                        <div class="input-group-append">
                                            <span class="input-group-text btn" onclick="#" aria-label="Username"
                                                aria-describedby="basic-addon1"><i
                                                    class="fa fa-arrow-right text-muted"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.post -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-md-6 -->

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

<?php include "header_navbar_footer/footer.php"?>