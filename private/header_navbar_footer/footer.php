   <footer class="blog-footer main-active">
      <p class="mb-1">&copy; 2017-2018 Company Name</p>
      <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
              href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
          <a href="#">Back to top</a>
      </p>
  </footer>

  <div class="row">
      <div class="col-md-3">
          <!-- DIRECT CHAT PRIMARY -->
          <div class="box box-primary direct-chat direct-chat-primary">
              <div class="box-header with-border main-active">
                  <h3 class="box-title">Direct Chat</h3>

                  <div class="box-tools pull-right">
                      <span data-toggle="tooltip" title="3 New Messages" class="badge bg-info">3</span>
                      <button type="button" class="btn btn-box-tool"  data-toggle="collapse" 
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
                              <img class="direct-chat-img" src="<?php echo BASE_URL_LINK ;?>image/img/user1-128x128.jpg"
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
                              <img class="direct-chat-img" src="<?php echo BASE_URL_LINK ;?>image/img/user3-128x128.jpg"
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
                              <li >
                                  <a href="#">
                                      <img class="contacts-list-img"
                                          src="<?php echo BASE_URL_LINK ;?>image/img/user1-128x128.jpg"
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
                          <img src="<?php echo BASE_URL_LINK ;?>image/color/blue.png" width="30px"> </a>
                      <a href="#" onclick="colors('black',<?php echo $_SESSION['key'];?>)"> <img
                              src="<?php echo BASE_URL_LINK ;?>image/color/black.png" width="30px"></a>
                      <a href="#" onclick="colors('yellow',<?php echo $_SESSION['key'];?>)"> <img
                              src="<?php echo BASE_URL_LINK ;?>image/color/yellow.png" width="30px"></a>
                      <a href="#" onclick="colors('green',<?php echo $_SESSION['key'];?>)"> <img
                              src="<?php echo BASE_URL_LINK ;?>image/color/green.png" width="30px"></a>
                      <a href="#" onclick="colors('purple',<?php echo $_SESSION['key'];?>)"> <img
                              src="<?php echo BASE_URL_LINK ;?>image/color/purple.png" width="30px"></a>
                      <a href="#" onclick="colors('rose',<?php echo $_SESSION['key'];?>)"> <img
                              src="<?php echo BASE_URL_LINK ;?>image/color/rose.png" width="30px"></a>
                      <a href="#" onclick="colors('chocolate',<?php echo $_SESSION['key'];?>)"> <img
                              src="<?php echo BASE_URL_LINK ;?>image/color/chocolate.png" width="30px"></a>
                      <!-- <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div> -->
                  </div>
                  <ul style="list-style-type:none; padding:0px;">
                      <li><a href="#">About</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Clients</a></li>
                      <li><a href="#">Contact</a></li>
                  </ul>

              </div>
          </div>
  </aside>
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <!-- <script>window.jQuery || document.write('<script src="dist/vendor/jquery-slim.min.js"><\/script>')</script> -->
  <script src="<?php echo BASE_URL_LINK ;?>dist/js/jquery.min.js"></script>
  <script src="<?php echo BASE_URL_LINK ;?>dist/js/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo BASE_URL_LINK ;?>dist/js/popper.min.js"></script>
  <!-- <script src="<?php echo BASE_URL_LINK ;?>dist/js/js/dataTables.bootstrap.min.js"></script> -->
  <script src="<?php echo BASE_URL_LINK ;?>dist/js/js/bootstrap4.min.js"></script>
  <script src="<?php echo BASE_URL_LINK ;?>dist/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="<?php echo BASE_URL_LINK ;?>dist/js/holder.min.js"></script>
  <script src="<?php echo BASE_URL_LINK ;?>dist/js/DirectChat.js"></script>
  <script src="<?php echo BASE_URL_LINK ;?>dist/js/BoxWidget.js"></script>

  <!-- THIS IS AJAX WORKING WITH DATABASE METHODS OF JQUERY! -->
  <script src="<?php echo BASE_URL_LINK ;?>ajax_js/add_post_ajax.js"></script>

  <!-- THIS IS AJAX WORKING WITH DATABASE METHODS OF JQUERY! -->
  <script src="<?php echo BASE_URL_LINK ;?>ajax_js/manage_admins_ajax.js"></script>
  <script src="<?php echo BASE_URL_LINK ;?>ajax_js/uncomment.js"></script>
  <script src="<?php echo BASE_URL_LINK ;?>ajax_js/comment_ajax.js"></script>
  <script src="<?php echo BASE_URL_LINK ;?>ajax_js/siderbarResponsive.js"></script>

  <!-- THIS IS JAVASCRIPTS OF VALIDATION FORMS IN BOOTSTRAP! -->
  <script src="<?php echo BASE_URL_LINK ;?>ajax_js/validat_bostrap_form.js"></script>
  <!-- THIS IS JAVASCRIPTS OF VALIDATION FORMS IN BOOTSTRAP! -->

  <script src="<?php echo BASE_URL_LINK ;?>lang/language_rw.js"></script>
  <script src="<?php echo BASE_URL_LINK ;?>lang/language_en.js"></script>
  <script src="<?php echo BASE_URL_LINK ;?>lang/language_fr.js"></script>

  <script>
var lang = document.body.className;
console.log(lang);
if (lang == 'rw') {
    // var json = JSON.stringify(data);
    // var js = JSON.parse(json);
    console.log(en.morning);
    document.getElementById('json').innerHTML = rw.muraho;
} else if (lang == 'fr') {
    console.log(en.morning);
    document.getElementById('json').innerHTML = fr.bonjour;
} else {
    document.getElementById('json').innerHTML = en.morning;
}
  </script>
  </body>

  </html>