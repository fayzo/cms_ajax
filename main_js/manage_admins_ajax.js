   
   $(document).ready(function() {
            $("#admin").on('click', function () {
               $("#manage_admin_form").modal('show');
            });

            $("#manage_admin_form").on('hidden.bs.modal', function () {
               $("#showContent_admin").fadeOut();
               $("#editContent_admin").fadeIn();
               $("#admin_editRowID").val(0);
               $("#firstname").val("");
               $("#lastname").val("");
               $("#username").val("");
               $("#password").val("");
               $("#email").val("");
               $("#address").val("");
               $("#address2").val("");
               $("#country").val("");
               $("#state").val("");
               $("#closeBtn").fadeIn();
               $("#button_admin").attr('value','Save').attr('onclick', "ajax_requests('add_admin')").fadeIn();
            });

            fetch_admin(0, 50);
        });

        function deleteRow(rowID) {
            if (confirm('Are you sure?')) {
                $.ajax({
                    url: 'manage_admin_db.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        key: 'deleteRow',
                        rowID: rowID
                    }, success: function (response) {
                        $("#firstname"+rowID).parent().remove();
                        alert(response);
                    }
                });
            }
        }

        function viewORedits(rowID, type) {
            $.ajax({
                url: 'manage_admin_db.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    key: 'viewORedit',
                    rowID: rowID
                }, success: function (response) {
                    if (type == "view") {
                        $("#showContent_admin").fadeIn();
                        $("#editContent_admin").fadeOut();
                        $("#firstnameView").html(response.firstname);
                        $("#lastnameView").html(response.lastname);
                        $("#usernameView").html(response.username);
                        $("#passwordView").html(response.password);
                        $("#emailViewz").html(response.email);
                        $("#addressViewz").html(response.address);
                        $("#address2View").html(response.address2);
                        $("#countryViewz").html(response.country);
                        $("#stateViewz").html(response.state);
                        $("#button_admin").fadeOut();
                        $("#closeBtn").fadeIn();
                    } else {
                        $("#editContent_admin").fadeIn();
                        $("#showContent_admin").fadeOut();
                        $("#admin_editRowID").val(rowID);
                        $("#firstname").val(response.firstname);
                        $("#lastname").val(response.lastname);
                        $("#username").val(response.username);
                        $("#password").val(response.password);
                        $("#emailz").val(response.email);
                        $("#addressz").val(response.address);
                        $("#address2").val(response.address2);
                        $("#countryz").val(response.country);
                        $("#statez").val(response.state);
                        $("#button_admin").attr('value', 'update').attr('onclick', "ajax_requests('update_Row')");
                        $("#closeBtn").fadeIn();
                    }
                    $(".modal-title").html(response.firstname);
                    $("#manage_admin_form").modal('show');
                }
            });
        }

        function fetch_admin(start, limit) {
            $.ajax({
                url: 'manage_admin_db.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    key: 'fetch_admin',
                    start: start,
                    limit: limit
                }, success: function (response) {
                    if (response != "Max") {
                        $('#tbody_admin').append(response);
                        start += limit;
                       fetch_admin(start, limit);
                    } else
                        $(".table_admin").DataTable();
                }
            });
        }

        function ajax_requests(key) {
            var editRowID = $("#admin_editRowID");
            var firstname = $("#firstname");
            var lastname = $("#lastname");
            var username = $("#username");
            var password = $("#password");
            var email = $("#emailz");
            var address = $("#addressz");
            var address2 = $("#address2");
            var country = $("#countryz");
            var state = $("#statez");

                $.ajax({
                   url: 'manage_admin_db.php',
                   type: 'post',
                   dataType: 'text',
                   data: {
                       key: key,
                       firstname: firstname.val(),
                       lastname: lastname.val(),
                       username: username.val(),
                       password: password.val(),
                       email: email.val(),
                       address: address.val(),
                       address2: address2.val(),
                       country: country.val(),
                       state: state.val(),
                       rowID: editRowID.val()
                   }, success: function (response) {
                       if (response != "success"){
                           alert(response);
                      } else {
                           $("#firstname"+editRowID.val()).html(firstname.val());
                           $("#lastname"+editRowID.val()).html(lastname.val());
                           $("#username"+editRowID.val()).html(username.val());
                           $("#password"+editRowID.val()).html(password.val());
                           $("#email"+editRowID.val()).html(email.val());
                           $("#address"+editRowID.val()).html(address.val());
                           $("#address2"+editRowID.val()).html(address2.val());
                           $("#country"+editRowID.val()).html(country.val());
                           $("#state"+editRowID.val()).html(state.val());
                            firstname.val('');
                            lastname.val('');
                            username.val('');
                            password.val('');
                            email.val('');
                            address.val('');
                            address2.val('');
                            country.val('');
                            state.val('');
                           $("#manage_admin_form").modal('hide');
                           $("#button_admin").attr('value', 'Save').attr('onclick',"ajax_requests('add_admin')");
                       }
                   }
                });
        }
        