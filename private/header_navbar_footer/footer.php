<footer class="blog-footer main-active">
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
    <!-- <script>window.jQuery || document.write('<script src="dist/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <script src="<?php echo BASE_URL_LINK ;?>dist/js/jquery.min.js"></script>
    <script src="<?php echo BASE_URL_LINK ;?>dist/js/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo BASE_URL_LINK ;?>dist/js/popper.min.js"></script>
    <!-- <script src="<?php echo BASE_URL_LINK ;?>dist/js/js/dataTables.bootstrap.min.js"></script> -->
    <script src="<?php echo BASE_URL_LINK ;?>dist/js/js/bootstrap4.min.js"></script>
    <script src="<?php echo BASE_URL_LINK ;?>dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo BASE_URL_LINK ;?>dist/js/holder.min.js"></script>

    <!-- THIS IS AJAX WORKING WITH DATABASE METHODS OF JQUERY! -->
    <script src="<?php echo BASE_URL_LINK ;?>ajax_js/add_post_ajax.js"></script>

    <!-- THIS IS AJAX WORKING WITH DATABASE METHODS OF JQUERY! -->
    <script src="<?php echo BASE_URL_LINK ;?>ajax_js/manage_admins_ajax.js"></script>
    <script src="<?php echo BASE_URL_LINK ;?>ajax_js/uncomment.js"></script>
    <script src="<?php echo BASE_URL_LINK ;?>ajax_js/comment_ajax.js"></script>

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