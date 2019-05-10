   <footer class="blog-footer main-active">
       <p class="mb-1">&copy; 2017-2018 Company Name</p>
       <ul class="list-inline">
           <li class="list-inline-item"><a href="#">Privacy</a></li>
           <li class="list-inline-item"><a href="#">Terms</a></li>
           <li class="list-inline-item"><a href="#">Support</a></li>
       </ul>
       <a href="#">Back to top</a>
   </footer>

   <div class="row">
       <div class="col-md-3">
           <!-- DIRECT CHAT PRIMARY -->
           <div class="box box-primary direct-chat direct-chat-primary">
               <!-- direct-chat direct-chat-primary -->
               <div class="box-header with-border main-active">
                   <h3 class="box-title"><i> Direct Chat</i></h3>

                   <div class="box-tools pull-right">
                       <span data-toggle="tooltip" title="3 New Messages" class="badge bg-info">3</span>
                       <button type="button" class="btn btn-box-tool" data-toggle="collapse"
                           data-target="#collapseExample"><i class="fa fa-minus"></i>
                           <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                               data-widget="chat-pane-toggle">
                               <i class="fa fa-comments"></i></button>
                           <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                   class="fa fa-times"></i></button>
                           <!-- onclick="remove()" -->
                   </div>
               </div>
               <!-- /.box-header -->
               <div class="collapse" id="collapseExample">
                   <div class="box-body">
                       <!-- Conversations are loaded here -->
                       <div class="direct-chat-messages">
                           <!-- Message. Default to the left -->
                           <div class="direct-chat-msg">
                               <div class="direct-chat-info clearfix">
                                   <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                   <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                               </div>
                               <!-- /.direct-chat-info -->
                               <img class="direct-chat-img"
                                   src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg"
                                   alt="Message User Image"><!-- /.direct-chat-img -->
                               <div class="direct-chat-text">
                                   Is this template really for free? That's unbelievable!
                               </div>
                               <!-- /.direct-chat-text -->
                           </div>
                           <!-- /.direct-chat-msg -->

                           <!-- Message to the right -->
                           <div class="direct-chat-msg right">
                               <div class="direct-chat-info clearfix">
                                   <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                   <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                               </div>
                               <!-- /.direct-chat-info -->
                               <img class="direct-chat-img"
                                   src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user3-128x128.jpg"
                                   alt="Message User Image"><!-- /.direct-chat-img -->
                               <div class="direct-chat-text">
                                   You better believe it!
                               </div>
                               <!-- /.direct-chat-text -->
                           </div>
                           <!-- /.direct-chat-msg -->
                       </div>
                       <!--/.direct-chat-messages-->

                       <!-- Contacts are loaded here -->
                       <div class="direct-chat-contacts">
                           <ul class="contacts-list">
                               <li>
                                   <a href="#">
                                       <img class="contacts-list-img"
                                           src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg"
                                           alt="User Image">

                                       <div class="contacts-list-info">
                                           <span class="contacts-list-name">
                                               Count Dracula
                                               <small class="contacts-list-date pull-right">2/28/2015</small>
                                           </span>
                                           <span class="contacts-list-msg">How have you been? I was...</span>
                                       </div>
                                       <!-- /.contacts-list-info -->
                                   </a>
                               </li>
                               <!-- End Contact Item -->
                           </ul>
                           <!-- /.contatcts-list -->
                       </div>
                       <!-- /.direct-chat-pane -->
                   </div>
                   <!-- /.box-body -->
                   <div class="box-footer">
                       <form action="#" method="post">
                           <div class="input-group">
                               <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                               <span class="input-group-btn">
                                   <button type="submit" class="btn btn-primary btn-flat">Send</button>
                               </span>
                           </div>
                       </form>
                   </div>
                   <!-- /.box-footer-->
               </div>
               <!--/.END of collapse direct-chat -->
           </div>
           <!--/.direct-chat -->
       </div>
       <!-- /.col -->
   </div>
   <!-- /.row -->

   <!-- DIRECT CHAT PRIMARY -->
   <div class="row">
       <div class="col-md-3">
           <div class="card direct-chats direct-chat direct-chat-primary">
               <div class="card-header main-active p-1">
                   <h5 class="card-title pb-0"><i> Direct Chat</i></h5>

                   <div class="card-tools">
                       <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                       <button type="button" class="btn btn-tool btn-sm" data-toggle="collapse"
                           data-target="#collapseExample4">
                           <i class="fa fa-minus"></i>
                       </button>
                       <button type="button" class="btn btn-tool btn-sm" data-toggle="tooltip" title="Contacts"
                           data-widget="chat-pane-toggle">
                           <i class="fa fa-comments"></i>
                       </button>
                       <button type="button" class="btn btn-tool btn-sm" onclick="removes()"><i class="fa fa-times"></i>
                           <!--  data-widget="remove" -->
                       </button>
                   </div>
               </div>
               <!-- /.card-header -->
               <div class="collapse" id="collapseExample4">
                   <div class="card-body">
                       <!-- Conversations are loaded here -->
                       <div class="direct-chat-messages">
                           <!-- Message. Default to the left -->
                           <div class="direct-chat-msg">
                               <div class="direct-chat-info clearfix">
                                   <span class="direct-chat-name float-left">Alexander Pierce</span>
                                   <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                               </div>
                               <!-- /.direct-chat-info -->
                               <img class="direct-chat-img"
                                   src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg"
                                   alt="message user image">
                               <!-- /.direct-chat-img -->
                               <div class="direct-chat-text">
                                   Is this template really for free? That's unbelievable!
                               </div>
                               <!-- /.direct-chat-text -->
                           </div>
                           <!-- /.direct-chat-msg -->

                           <!-- Message to the right -->
                           <div class="direct-chat-msg right">
                               <div class="direct-chat-info clearfix">
                                   <span class="direct-chat-name float-right">Sarah Bullock</span>
                                   <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                               </div>
                               <!-- /.direct-chat-info -->
                               <img class="direct-chat-img"
                                   src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user3-128x128.jpg"
                                   alt="message user image">
                               <!-- /.direct-chat-img -->
                               <div class="direct-chat-text">
                                   You better believe it!
                               </div>
                               <!-- /.direct-chat-text -->
                           </div>
                           <!-- /.direct-chat-msg -->

                           <!-- Message. Default to the left -->
                           <div class="direct-chat-msg">
                               <div class="direct-chat-info clearfix">
                                   <span class="direct-chat-name float-left">Alexander Pierce</span>
                                   <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                               </div>
                               <!-- /.direct-chat-info -->
                               <img class="direct-chat-img"
                                   src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg"
                                   alt="message user image">
                               <!-- /.direct-chat-img -->
                               <div class="direct-chat-text">
                                   Working with AdminLTE on a great new app! Wanna join?
                               </div>
                               <!-- /.direct-chat-text -->
                           </div>
                           <!-- /.direct-chat-msg -->

                           <!-- Message to the right -->
                           <div class="direct-chat-msg right">
                               <div class="direct-chat-info clearfix">
                                   <span class="direct-chat-name float-right">Sarah Bullock</span>
                                   <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                               </div>
                               <!-- /.direct-chat-info -->
                               <img class="direct-chat-img"
                                   src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user3-128x128.jpg"
                                   alt="message user image">
                               <!-- /.direct-chat-img -->
                               <div class="direct-chat-text">
                                   I would love to.
                               </div>
                               <!-- /.direct-chat-text -->
                           </div>
                           <!-- /.direct-chat-msg -->

                       </div>
                       <!--/.direct-chat-messages-->

                       <!-- Contacts are loaded here -->
                       <div class="direct-chat-contacts">
                           <ul class="contacts-list">
                               <li>
                                   <a href="#">
                                       <img class="contacts-list-img"
                                           src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg">

                                       <div class="contacts-list-info">
                                           <span class="contacts-list-name">
                                               Count Dracula
                                               <small class="contacts-list-date float-right">2/28/2015</small>
                                           </span>
                                           <span class="contacts-list-msg">How have you been? I was...</span>
                                       </div>
                                       <!-- /.contacts-list-info -->
                                   </a>
                               </li>
                               <!-- End Contact Item -->
                               <li>
                                   <a href="#">
                                       <img class="contacts-list-img"
                                           src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user7-128x128.jpg">

                                       <div class="contacts-list-info">
                                           <span class="contacts-list-name">
                                               Sarah Doe
                                               <small class="contacts-list-date float-right">2/23/2015</small>
                                           </span>
                                           <span class="contacts-list-msg">I will be waiting for...</span>
                                       </div>
                                       <!-- /.contacts-list-info -->
                                   </a>
                               </li>
                               <!-- End Contact Item -->
                               <li>
                                   <a href="#">
                                       <img class="contacts-list-img"
                                           src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user3-128x128.jpg">

                                       <div class="contacts-list-info">
                                           <span class="contacts-list-name">
                                               Nadia Jolie
                                               <small class="contacts-list-date float-right">2/20/2015</small>
                                           </span>
                                           <span class="contacts-list-msg">I'll call you back at...</span>
                                       </div>
                                       <!-- /.contacts-list-info -->
                                   </a>
                               </li>
                               <!-- End Contact Item -->
                               <li>
                                   <a href="#">
                                       <img class="contacts-list-img"
                                           src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user5-128x128.jpg">

                                       <div class="contacts-list-info">
                                           <span class="contacts-list-name">
                                               Nora S. Vans
                                               <small class="contacts-list-date float-right">2/10/2015</small>
                                           </span>
                                           <span class="contacts-list-msg">Where is your new...</span>
                                       </div>
                                       <!-- /.contacts-list-info -->
                                   </a>
                               </li>
                               <!-- End Contact Item -->
                               <li>
                                   <a href="#">
                                       <img class="contacts-list-img"
                                           src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user6-128x128.jpg">

                                       <div class="contacts-list-info">
                                           <span class="contacts-list-name">
                                               John K.
                                               <small class="contacts-list-date float-right">1/27/2015</small>
                                           </span>
                                           <span class="contacts-list-msg">Can I take a look at...</span>
                                       </div>
                                       <!-- /.contacts-list-info -->
                                   </a>
                               </li>
                               <!-- End Contact Item -->
                               <li>
                                   <a href="#">
                                       <img class="contacts-list-img"
                                           src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user8-128x128.jpg">

                                       <div class="contacts-list-info">
                                           <span class="contacts-list-name">
                                               Kenneth M.
                                               <small class="contacts-list-date float-right">1/4/2015</small>
                                           </span>
                                           <span class="contacts-list-msg">Never mind I found...</span>
                                       </div>
                                       <!-- /.contacts-list-info -->
                                   </a>
                               </li>
                               <!-- End Contact Item -->
                           </ul>
                           <!-- /.contacts-list -->
                       </div>
                       <!-- /.direct-chat-pane -->
                   </div>
                   <!-- /.card-body -->
                   <div class="card-footer">
                       <form action="#" method="post">
                           <div class="input-group">
                               <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                               <span class="input-group-append">
                                   <button type="button" class="btn btn-primary">Send</button>
                               </span>
                           </div>
                       </form>
                   </div>
                   <!-- /.card-footer-->
               </div>
               <!-- collapse -->
           </div>
           <!--/.direct-chat -->
       </div>
       <!-- /.col -->
   </div>
   <!-- /.row -->
   <!-- END DIRECT CHAT PRIMARY -->

   <aside>
       <div id="mySidenav" class="sidenav">
           <div class="container">
               <h3>Settings</h3>
               <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
               <div class="dropdown">
                   <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                       Choose color
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                       <a class="d-inline-block" href="#" onclick="colors('blue',<?php echo $_SESSION['key'];?>)">
                           <img src="<?php echo BASE_URL_LINK_ALL ;?>image/color/blue.png" width="30px"> </a>
                       <a href="#" onclick="colors('black',<?php echo $_SESSION['key'];?>)"> <img
                               src="<?php echo BASE_URL_LINK_ALL ;?>image/color/black.png" width="30px"></a>
                       <a href="#" onclick="colors('yellow',<?php echo $_SESSION['key'];?>)"> <img
                               src="<?php echo BASE_URL_LINK_ALL ;?>image/color/yellow.png" width="30px"></a>
                       <a href="#" onclick="colors('green',<?php echo $_SESSION['key'];?>)"> <img
                               src="<?php echo BASE_URL_LINK_ALL ;?>image/color/green.png" width="30px"></a>
                       <a href="#" onclick="colors('purple',<?php echo $_SESSION['key'];?>)"> <img
                               src="<?php echo BASE_URL_LINK_ALL ;?>image/color/purple.png" width="30px"></a>
                       <a href="#" onclick="colors('rose',<?php echo $_SESSION['key'];?>)"> <img
                               src="<?php echo BASE_URL_LINK_ALL ;?>image/color/rose.png" width="30px"></a>
                       <a href="#" onclick="colors('chocolate',<?php echo $_SESSION['key'];?>)"> <img
                               src="<?php echo BASE_URL_LINK_ALL ;?>image/color/chocolate.png" width="30px"></a>
                       <!-- <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div> -->
                   </div>

                   <div class="dropdown">
                   <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                       Choose background-img
                   </a>
                  <div class="dropdown-menu  background-img" aria-labelledby="navbarDropdown">
                       <a class="d-inline-block" href="#" onclick="background('build',<?php echo $_SESSION['key'];?>)">
                           <img src="<?php echo BASE_URL_LINK_ALL ;?>image/background_image/build.jpg" > </a>
                       <a href="#" onclick="background('build1',<?php echo $_SESSION['key'];?>)"> <img
                               src="<?php echo BASE_URL_LINK_ALL ;?>image/background_image/build1.jpg" ></a>
                       <a href="#" onclick="background('build2',<?php echo $_SESSION['key'];?>)"> <img
                               src="<?php echo BASE_URL_LINK_ALL ;?>image/background_image/build.jpg"></a>
                       <a href="#" onclick="background('chair',<?php echo $_SESSION['key'];?>)"> <img
                               src="<?php echo BASE_URL_LINK_ALL ;?>image/background_image/chair.jpg" ></a>
                       <!-- <a href="#" onclick="background('purple',<?php echo $_SESSION['key'];?>)"> <img
                               src="<?php echo BASE_URL_LINK_ALL ;?>image/background-image/purple.png" ></a>
                       <a href="#" onclick="background('rose',<?php echo $_SESSION['key'];?>)"> <img
                               src="<?php echo BASE_URL_LINK_ALL ;?>image/background-image/rose.png" ></a>
                       <a href="#" onclick="background('chocolate',<?php echo $_SESSION['key'];?>)"> <img
                               src="<?php echo BASE_URL_LINK_ALL ;?>image/background-image/chocolate.png" ></a> -->
                   </div>

                       <div class="dropdown">
                           <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                               Choose languange
                           </a>

                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <a href="#" onclick="language('fr',<?php echo $_SESSION['key'];?>);"><img
                                       src="<?php echo BASE_URL_LINK_ALL ;?>image/flag/iconfinder_Flag_of_France_96147.png"
                                       width="30px"></a>
                               <a href="#" onclick="language('en',<?php echo $_SESSION['key'];?>);"><img
                                       src="<?php echo BASE_URL_LINK_ALL ;?>image/flag/iconfinder_Flag_of_United_Kingdom_96354.png"
                                       width="30px"></a>
                               <a href="#" onclick="language('rw',<?php echo $_SESSION['key'];?>);"><img
                                       src="<?php echo BASE_URL_LINK_ALL ;?>image/flag/iconfinder_Flag_of_Rwanda_96263.png"
                                       width="30px"></a>
                           </div>

                           <ul style="list-style-type:none; padding:0px;">
                               <li><a href="#">About</a></li>
                               <li><a href="#">Services</a></li>
                               <li><a href="#">Clients</a></li>
                               <li><a href="#">Contact</a></li>
                               <li><a href="<?php echo LOGOUT ;?>">Sign out</a></li>
                           </ul>

                       </div>
                   </div>
   </aside>
   <!-- Bootstrap core JavaScript
    ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
   <!-- <script>window.jQuery || document.write('<script src="dist/vendor/jquery-slim.min.js"><\/script>')</script> -->
   <script src="<?php echo BASE_URL_LINK_ALL ;?>dist/js/jquery.min.js"></script>
   <script src="<?php echo BASE_URL_LINK_ALL ;?>dist/js/js/jquery.dataTables.min.js"></script>
   <script src="<?php echo BASE_URL_LINK_ALL ;?>dist/js/popper.min.js"></script>
   <!-- <script src="<?php echo BASE_URL_LINK_ALL ;?>dist/js/js/dataTables.bootstrap.min.js"></script> -->
   <script src="<?php echo BASE_URL_LINK_ALL ;?>dist/js/js/bootstrap4.min.js"></script>
   <script src="<?php echo BASE_URL_LINK_ALL ;?>dist/js/bootstrap.min.js"></script>
   <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
   <script src="<?php echo BASE_URL_LINK_ALL ;?>dist/js/holder.min.js"></script>
   <!-- <script src="<?php echo BASE_URL_LINK_ALL ;?>dist/js/DirectChat.js"></script> -->
   <!-- <script src="<?php echo BASE_URL_LINK_ALL ;?>dist/js/BoxWidget.js"></script> -->
   <script src="<?php echo BASE_URL_LINK_ALL ;?>dist/js/removeChat.js"></script>
   <script src="<?php echo BASE_URL_LINK_ALL ;?>dist/js/siderbarResponsive.js"></script>

   <!-- THIS IS JAVASCRIPTS OF VALIDATION FORMS IN BOOTSTRAP! -->
   <script src="<?php echo BASE_URL_LINK_ALL ;?>dist/js/validat_bostrap_form.js"></script>
   <!-- THIS IS JAVASCRIPTS OF VALIDATION FORMS IN BOOTSTRAP! -->

   <!-- THIS IS AJAX WORKING WITH DATABASE METHODS OF JQUERY! -->
   <script src="<?php echo BASE_URL_LINK ;?>js/add_post_ajax.js"></script>
   <script src="<?php echo BASE_URL_LINK ;?>js/manage_admins_ajax.js"></script>
   <script src="<?php echo BASE_URL_LINK ;?>js/uncomment.js"></script>
   <script src="<?php echo BASE_URL_LINK ;?>js/comment_ajax.js"></script>


   <!-- daterangepicker -->
   <!-- <script src="<?php echo BASE_URL_LINK_ALL ;?>plugin/moment/min/moment.min.js"></script> -->
   <!-- <script src="<?php echo BASE_URL_LINK_ALL ;?>plugin/bootstrap-daterangepicker/daterangepicker.js"></script> -->
   <!-- datepicker -->
   <!-- <script src="<?php echo BASE_URL_LINK_ALL ;?>plugin/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> -->
   <!-- Bootstrap WYSIHTML5 -->
   <!-- <script src="<?php echo BASE_URL_LINK_ALL ;?>plugin/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->

   <script src="<?php echo BASE_URL_LINK_ALL ;?>lang/language_rw.js"></script>
   <script src="<?php echo BASE_URL_LINK_ALL ;?>lang/language_en.js"></script>
   <script src="<?php echo BASE_URL_LINK_ALL ;?>lang/language_fr.js"></script>
   <!-- iCheck -->
   <script src="<?php echo BASE_URL_LINK_ALL ;?>plugin/iCheck/icheck.min.js"></script>
   <!-- Page Script -->
   <script src="<?php echo BASE_URL_LINK_ALL ;?>plugin/fastclick/lib/fastclick.js"></script>
   <script>
//  FastClick is a simple, easy-to-use library for eliminating
//  the 300ms delay between a physical tap and the firing of a `click` 
//  event on mobile browsers. The aim is to make your application feel less laggy and
//  more responsive while avoiding any interference with your current logic.

$(function() {
    FastClick.attach(document.body);
});

$(function() {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
        checkboxClass: 'icheckbox_flat-blue',
        radioClass: 'iradio_flat-blue'
    })

    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function() {
        var clicks = $(this).data('clicks')
        if (clicks) {
            //Uncheck all checkboxes
            $('.mailbox-messages input[type=\'checkbox\']').iCheck('uncheck')
            $('.fa', this).removeClass('fa-check-square-o').addClass('fa-square-o')
        } else {
            //Check all checkboxes
            $('.mailbox-messages input[type=\'checkbox\']').iCheck('check')
            $('.fa', this).removeClass('fa-square-o').addClass('fa-check-square-o')
        }
        $(this).data('clicks', !clicks)
    })

    //Handle starring for glyphicon and font awesome
    $('.mailbox-star').click(function(e) {
        e.preventDefault()
        //detect type
        var $this = $(this).find('a > i')
        var glyph = $this.hasClass('glyphicon')
        var fa = $this.hasClass('fa')

        //Switch states
        if (glyph) {
            $this.toggleClass('glyphicon-star')
            $this.toggleClass('glyphicon-star-empty')
        }

        if (fa) {
            $this.toggleClass('fa-star')
            $this.toggleClass('fa-star-o')
        }
    })
})
   </script>

   <script>
var lang = document.body.className;
console.log(lang);
if (lang == 'rw') {
    // var json = JSON.stringify(data);
    // var js = JSON.parse(json);
    console.log(en.welcome);
    document.getElementById('welcome-json').innerHTML = rw.welcome;
} else if (lang == 'fr') {
    console.log(fr.welcome);
    document.getElementById('welcome-json').innerHTML = fr.welcome;
} else {
    document.getElementById('welcome-json').innerHTML = en.welcome;
}
   </script>
   </body>

   </html>