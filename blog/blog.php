<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CONTENT MANAGEMENT SYSTEMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link   href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/css/dataTables.min.css">
    <script src="../dist/vendor/jquery.min.js"></script>

    <!-- <script src="main.js"></script> -->
</head>
<body class="bg-light" style="padding-top:5rem;">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">
    
<div role="tabpanel">
  <div class="row">
    <div class="col-4 col-lg-2 bg-light py-3 px-0">
      <div class="list-group " id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="tab" href="#list-agriculture" role="tab" aria-controls="list-home">agriculture</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-sports" role="tab" aria-controls="list-profile">sports</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-business" role="tab" aria-controls="list-profile">business</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-entaitenment" role="tab" aria-controls="list-profile">entaitenment</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-news" role="tab" aria-controls="list-profile">news</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-science" role="tab" aria-controls="list-profile">science</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="tab" href="#list-ibihuha" role="tab" aria-controls="list-messages">ibihuha</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-religious" role="tab" aria-controls="list-settings">religious</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-food" role="tab" aria-controls="list-settings">food</a>
      </div>
    </div>

    <div class="col-8 col-lg-10 bg-light">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-agriculture" role="tabpanel" aria-labelledby="list-home-list">
           <?php include "agriculture.php"?>
        </div> <!-- END-OF A LINK OF DASH_BOARD ID=#  -->

        <div class="tab-pane fade" id="list-sports" role="tabpanel" aria-labelledby="list-profile-list">
            <?php include "sports.php"?>
        </div> <!-- END-OF A LINK OF add_post ID=#  -->

        <div class="tab-pane fade" id="list-business" role="tabpanel" aria-labelledby="list-messages-list">
            <?php include "business.php"?>
         </div> <!-- END-OF A LINK OF MANAGE ADMINS ID=#  -->

        <div class="tab-pane fade" id="list-entaitenment" role="tabpanel" aria-labelledby="list-settings-list">
            <?php include "entaitenment.php"?>
         </div> <!-- END-OF A LINK OF Comment ID=#  -->

        <div class="tab-pane fade" id="list-news" role="tabpanel" aria-labelledby="list-settings-list">
           <?php include "news.php"?>
        </div> <!-- END-OF A LINK OF Comment ID=#  -->

        <div class="tab-pane fade" id="list-science" role="tabpanel" aria-labelledby="list-settings-list">
           <?php include "science.php"?>
        </div> <!-- END-OF A LINK OF profile ID=#  -->

        <div class="tab-pane fade" id="list-ibihuha" role="tabpanel" aria-labelledby="list-settings-list">
           <?php include "ibihuha.php"?>
        </div> <!-- END-OF A LINK OF Messages ID=#  -->

        <div class="tab-pane fade" id="list-religious" role="tabpanel" aria-labelledby="list-settings-list">
           <?php include "religious.php"?>
        </div> <!-- END-OF A LINK OF setting ID=#  -->

        <div class="tab-pane fade" id="list-food" role="tabpanel" aria-labelledby="list-settings-list">
            <?php include "food.php"?>
        </div> <!-- END-OF A LINK OF logout ID=#  -->

      </div>
    </div>
  </div>
</div>
</div>



     <footer class="blog-footer bg-dark text-light">
       <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="../dist/vendor/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../dist/vendor/jquery-slim.min.js"><\/script>')</script>
     <script src="../dist/js/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../dist/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../dist/js/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../dist/vendor/holder.min.js"></script>
  
    <script type="text/javascript">
        $(document).ready(function() {
            $("#addNew").on('click', function () {
               $("#tableManager").modal('show');
            });

            $("#tableManager").on('hidden.bs.modal', function () {
               $("#showContent").fadeOut();
               $("#editContent").fadeIn();
               $("#editRowID").val(0);
               $("#longDesc").val("");
               $("#shortDesc").val("");
               $("#countryName").val("");
               $("#closeBtn").fadeOut();
               $("#manageBtn").attr('value', 'Add New').attr('onclick', "manageData('addNew')").fadeIn();
            });

            getExistingData(0, 50);
        });

        function deleteRow(rowID) {
            if (confirm('Are you sure??')) {
                $.ajax({
                    url: 'ajax.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        key: 'deleteRow',
                        rowID: rowID
                    }, success: function (response) {
                        $("#country_"+rowID).parent().remove();
                        alert(response);
                    }
                });
            }
        }

        function viewORedit(rowID, type) {
            $.ajax({
                url: 'ajax.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    key: 'getRowData',
                    rowID: rowID
                }, success: function (response) {
                    if (type == "view") {
                        $("#showContent").fadeIn();
                        $("#editContent").fadeOut();
                        $("#longDescView").html(response.longDesc);
                        $("#shortDescView").html(response.shortDesc);
                        $("#manageBtn").fadeOut();
                        $("#closeBtn").fadeIn();
                    } else {
                        $("#editContent").fadeIn();
                        $("#editRowID").val(rowID);
                        $("#showContent").fadeOut();
                        $("#longDesc").val(response.longDesc);
                        $("#shortDesc").val(response.shortDesc);
                        $("#countryName").val(response.countryName);
                        $("#closeBtn").fadeOut();
                        $("#manageBtn").attr('value', 'Save Changes').attr('onclick', "manageData('updateRow')");
                    }

                    $(".modal-title").html(response.countryName);
                    $("#tableManager").modal('show');
                }
            });
        }

        function getExistingData(start, limit) {
            $.ajax({
                url: 'ajax.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    key: 'getExistingData',
                    start: start,
                    limit: limit
                }, success: function (response) {
                    if (response != "reachedMax") {
                        $('tbody').append(response);
                        start += limit;
                        getExistingData(start, limit);
                    } else
                        $(".table").DataTable();
                }
            });
        }

        function manageData(key) {
            var name = $("#countryName");
            var shortDesc = $("#shortDesc");
            var longDesc = $("#longDesc");
            var editRowID = $("#editRowID");

                $.ajax({
                   url: 'ajax.php',
                   method: 'POST',
                   dataType: 'text',
                   data: {
                       key: key,
                       name: name.val(),
                       shortDesc: shortDesc.val(),
                       longDesc: longDesc.val(),
                       rowID: editRowID.val()
                   }, success: function (response) {
                       if (response != "success")
                           alert(response);
                       else {
                           $("#country_"+editRowID.val()).html(name.val());
                           name.val('');
                           shortDesc.val('');
                           longDesc.val('');
                           $("#tableManager").modal('hide');
                           $("#manageBtn").attr('value', 'Add').attr('onclick', "manageData('addNew')");
                       }
                   }
                });
        }

    // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();


    </script>

</body>
</html>