<div class="container-fluid">

  <footer class="bg-white text-center text-dark">

    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/kw_logo.png" alt="">
    <div class="container p-4 pb-0">
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h2 class="footer-text">Contact</h2>
          <address>
            7993 St Laurent Blvd <br>
            Montreal, Quebec H2R 1X2 <br>
            (514) 885-4582 <br>
            (514) 316-0120 <br>
            info@kwconnexion.com <br>
          </address>
        </div>


        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">

          <h2 class="social-text">Follow Me</h2>
          <a class="btn btn-outline-dark btn-floating m-1" href="https://www.youtube.com/watch?v=pL_vTMBzKkI&t=46s" role="button"><i class="fab fa-youtube"></i></a>


          <a class="btn btn-outline-dark btn-floating m-1" href="https://www.facebook.com/AskGreguy/" role="button"><i class="fab fa-facebook-f"></i></a>


          <a class="btn btn-outline-dark btn-floating m-1" href="https://www.instagram.com/greguy.jules_realtor/?hl=en" role="button"><i class="fab fa-instagram"></i></a>


          <a class="btn btn-outline-dark btn-floating m-1" href="https://www.linkedin.com/in/greguy-jules-b9985730/?originalSubdomain=ca" role="button"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <div class="copyright">
        ©<?php the_time('Y') ?> Copyright
        <a class="text-dark" href="http://edwinnord.com/"> Edwin Nord</a>
      </div>
    </div>
  </footer>
  <?php wp_footer() ?>
</div>





<script type="text/javascript" src="js/mdb.min.js"></script>

<script type="text/javascript"></script>
<script>
  var map = L.map('map')
  map.setView([45.538780, -73.630540], 13);

  var marker = L.marker([45.538780, -73.630540]).addTo(map);

  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);
</script>

</body>

</html>