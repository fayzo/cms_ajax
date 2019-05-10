<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i> User Profile</i></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><i> User Profile</i></li>
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
                                            <div><a href="http://localhost:84/tweet/fayzoo">Nina Mcintire</a></div>
                                            <span><small><a href="http://localhost:84/tweet/fayzoo">Software
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

                </div><!-- row  -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header borders-tops p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity"
                                    data-toggle="tab">Activity</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">About Me</a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="rounded-circle img-bordered-sm"
                                            src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg"
                                            alt="user image">
                                        <span class="username">
                                            <a href="#">Jonathan Burke Jr.</a>
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
                                            <a href="#">Adam Jones</a>
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
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="timeline">
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

                                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email
                                            </h3>

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

                                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted
                                                your friend request
                                            </h3>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-comments bg-warning text-light"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post
                                            </h3>

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
                                                <img src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user4-128x128.jpg"
                                                    alt="..." class="margin">
                                                <img src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user4-128x128.jpg"
                                                    alt="..." class="margin">
                                                <img src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user4-128x128.jpg"
                                                    alt="..." class="margin">
                                                <img src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user4-128x128.jpg"
                                                    alt="..." class="margin">
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <li>
                                        <i class="fa fa-clock-o bg-info text-light"></i>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName2" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience"
                                                placeholder="Experience"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSkills"
                                                placeholder="Skills">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> I agree to the <a href="#">terms and
                                                        conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
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
                            <!-- /. card-body -->
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

                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Etiam
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