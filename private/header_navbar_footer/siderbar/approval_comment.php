<?php 
$max = 400*1024;
$message ="";
?>
        <div class="well" style="margin:auto; padding:auto; width:100%;">
          <form class="needs-validation" novalidate id="formcomment"  method="post" enctype="multipart/form-data">

             <div id="comment_form" class="modal fade">

              <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Country Name</h2>
                    </div>
                    <div class="modal-body">
                        <div id="edit_comment">

                          <div class="form-group">
                             <input type="hidden" id="commt_editRowID" name="commt_editRowID" value="0">
                             <label for="firstName">Title</label>
                             <input type="text" name="title_comment" class="form-control" id="title_comment" placeholder="Title" required>
                               <div class="invalid-feedback">
                                 Valid first name is required.
                               </div>

                             <label for="lastName">Athors</label>
                             <input type="text" name="athors_comment" class="form-control" id="athors_comment" placeholder="Athors"  required>
                               <div class="invalid-feedback">
                                 Valid last name is required.
                               </div>

                           <label for="username">Text</label>
                           <textarea class="form-control" name="textarea_comment" id="textarea_comment" rows="3"></textarea>
                             <div class="invalid-feedback" style="width: 100%;">
                               Your Text is required.
                             </div>

                             <label for="email">Email <span class="text-muted">(Optional)</span></label>
                             <div class="input-group">
                                 <div class="input-group-prepend">
                                   <span class="input-group-text">@ </span>
                                 </div>
                                <input type="email" class="form-control" name="email_comment" id="email_comment" placeholder="you@example.com" required>
                                  <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                  </div>
                             </div>
                               <?php
                               date_default_timezone_set("Africa/Kigali");
                               $currentTimes = time();
                               $dateTimes = strftime("%A,%b-%d-%Y %Hh:%Mmin:%Ssec %p",$currentTimes);
                              //  echo $dateTimes;
                              // type="datetime-local"
                               ?>
                             <label for="Date-Time">Date-Time</label>
                             <input type="type" class="form-control" name="date_comment" id="date_comment" value="<?php echo $dateTimes; ?>" readonly>
                               <div class="invalid-feedback">
                                 Please enter your Date-Time.
                               </div>

                             <label for="address2">Address</label>
                             <input type="text" class="form-control" name="address_comment" id="address_comment" placeholder="Apartment or suite">

                              <label for="country">Country</label>
                              <select class="custom-select d-block w-100" name="country_comment" id="country_comment" required>
                                <option value="">Choose...</option>
                                <option>Rwanda</option>
                                <option>Burundi</option>
                                <option>Tanzania</option>
                                <option>Uganda</option>
                              </select>
                              <div class="invalid-feedback">
                                Please select a valid country.
                              </div>

                               <label for="state">State</label>
                               <select class="custom-select d-block w-100" name="state_comment" id="state_comment" required>
                                 <option value="">Choose...</option>
                                 <option>Kigali</option>
                                 <option>Bujumbura</option>
                                 <option>Dar-Salam</option>
                               </select>
                               <div class="invalid-feedback">
                                 Please provide a valid state.
                              </div>  
                          </div>
                       </div>  <!-- THIS IS EDIT_CONTENT -->     
                       
                          <div id="comm_image">     
                             <div id="preview"><img src="<?php echo BASE_URL_LINK_ALL ;?>image/file_log/filed.png" width="100px"/></div><br>
                             <label for="file">File input :</label><?php echo " ".$message ; ?><br>
                             <input type="hidden" name="MAX_FILE_SIZE" value ="<?php echo $max;?>">
                    	       <input id="uploadImage" type="file" accept="image/*" name="image" />
                             <small id="fileHelp" class="form-text text-muted">Max 3mb size</small>
                          </div>

                         <div id="show_comment" style="display:none;">
                            <p><span style="font-weight:bold;font-size:17px;">Image : </span>
                            <img width = "60px" src="<?php echo BASE_URL_LINK_ALL ;?>image/uploads_commets/"><span id="imageView_comment"></span></p>
                            <hr>
                            <p><span style="font-weight:bold;font-size:17px;">TITLE : </span>
                            <span id="titleView_comment"></span> </p>
                            <hr>
                            <p><span style="font-weight:bold;font-size:17px;">AUTHORS : </span>
                            <span id="athorsView_comment"></span> </p>
                            <hr>
                            <p><span style="font-weight:bold;font-size:17px;">TEXTEAREA : </span>
                            <span id="textareaView_comment"></span> </p>
                            <hr>
                            <p><span style="font-weight:bold;font-size:17px;">Email :</span>
                            <span id="emailView_comment" ></span></p>
                            <!-- style="overflow-y: scroll; height: 300px;" -->
                            <hr>
                            <p><span style="font-weight:bold;font-size:17px;">Date :</span>
                            <span id="dateView_comment" ></span></p>
                            <hr>
                            <p><span style="font-weight:bold;font-size:17px;">Address :</span>
                            <span id="addressView_comment"></span></p>
                            <!-- style="overflow-y: scroll; height: 300px;" -->
                            <hr>
                            <p><span style="font-weight:bold;font-size:17px;">Country :</span>
                            <span id="countryView_comment"></span></p>
                            <!-- style="overflow-y: scroll; height: 300px;" -->
                            <hr>
                            <p><span style="font-weight:bold;font-size:17px;">State :</span>
                            <span id="stateView_comment"></span></p>
                            <!-- style="overflow-y: scroll; height: 300px;" -->
                            <hr>
                        </div>
                    </div> <!-- THiS IS A MODAL BODY -->

                    <div class="modal-footer">
                        <input type="button" class="btn btn-primary" data-dismiss="modal" value="Close" id="closeBtn" >
                        <input type="button" id="btn_comment" onclick="manageDatas('addcomment')" value="Save" class="btn btn-success">
                        <input type="submit" id="comment_Save" value="Save Profile" class="btn btn-success">
                    </div><!-- THiS IS A MODAL FOOTER -->
                  </div><!-- THiS IS A MODAL CONTENT -->
                </div><!-- THiS IS A MODAL DIALOG -->
            </div><!-- THiS IS A MODAL FADE -->
            <div id="err"></div> <!-- error in form -->
          </form>
        </div><!-- THiS IS A MODAL maargin -->

               <!-- ***************** FORM OF CRUD ******************************* -->
        <div class="row mt-2 mb-4">
            <div class="col-sm-md-lg-12 md-offset-2">
            <div class="text-center">
                <span class="h4">An Approval Comment : <span class="bg-success rounded text-white">ON</span></span>
            </div>
                <!-- <input style="float: right" type="button" class="btn btn-success" id="addcomment" value="add Post"> -->
                <table class="table table-striped table-bordered table-hover table_comment" >
                    <thead class="main-active">
                        <tr>
                            <td>N0</td>
                            <td>ID</td>
                            <td>title</td>
                            <td>Image</td>
                            <td>athors</td>
                            <td>textarea</td>
                            <!-- <td>email</td> -->
                            <td>date</td>
                            <!-- <td>address</td>
                            <td>Country</td>
                            <td>state</td> -->
                            <td>Options</td>
                        </tr>
                    </thead>
                    <tbody id="tbody_comment">

                    </tbody>
                </table>
             </div>
       </div> <!-- END-OF FORM OF CRUD  --><hr><hr>
    