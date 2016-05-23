
<!-- FOOTER -->
<footer class="footer">

  <div class="footer-top">

    <div class="container">

      <div class="row">

        <div class="col-xs-12 col-md-4">

          <p>
            <img alt="logo-footer" src="src/images/logo-footer.png" class="logo">
          </p>
          <p>
            You can easily contactt with us using our social media links. It easily update your nowledge and trends of the Smart home concepts and devices.
          </p>
          <p>
            <a target="_blank" href="#" class="icon-container icon-container--square">
              <span class="fa fa-facebook"></span>
            </a>
            <a target="_blank" href="#" class="icon-container icon-container--square">
              <span class="fa fa-twitter"></span>
            </a>
            <a target="_blank" href="#" class="icon-container icon-container--square">
              <span class="fa fa-wordpress"></span>
            </a>
            <a target="_blank" href="#" class="icon-container icon-container--square">
              <span class="fa fa-youtube-play"></span>
            </a>
          </p>

        </div><!-- /.row -->

        <div class="col-xs-12 col-md-2">

          <div class="widget_nav_menu">
            <h6 class="footer-top__headings">NAVIGATION</h6>
            <ul>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">Services</a>
              </li>
              <li>
                <a href="#">About Us</a>
              </li>
            </ul>
          </div><!-- /.widget_nav_menu -->

        </div><!-- /.row -->

        <div class="col-xs-12 col-md-2">

          <div class="widget_nav_menu">

            <h6 class="footer-top__headings">OUR SERVICES</h6>
            <ul>
              <li>
                <a href="#">Watt Counter</a>
              </li>
              <li>
                <a href="#">Samrt Home</a>
              </li>
              <li>
                <a href="#">Inteligent Device Management</a>
              </li>
            </ul>

          </div><!-- /.widget_nav_menu -->

        </div><!-- /.row -->

        <div class="col-xs-12 col-md-4">

          <h6 class="footer-top__headings">LOGIN AREA</h6>
          <p>
            You can login to system to controll all pre-configured devices remotely.
          </p>
          <p>
            {if $is_admin eq 1}
              <a target="_self" href="logout.php" class="btn btn-info">SIGN OUT</a>
            {else}
              <a target="_self" href="login.php" class="btn btn-info">LOGIN LOGIN</a>
            {/if}
          </p>

        </div><!-- /.row -->

      </div><!-- /.row -->

    </div><!-- /.footer -->

  </div><!-- /.footer-top -->

  <div class="footer-bottom">

    <div class="container">

      <div class="footer-bottom__left">
        Developed and Hosted by <a href="#">Asitha Sandun Gamage</a>.
      </div>

      <div class="footer-bottom__right">
        Copyright &copy; 2016 Smart Home. All rights reserved.
      </div>

    </div><!-- /.container -->

  </div><!-- /.footer-bottom -->

</footer>

</div><!-- /.boxed-container -->

<script src="src/js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="src/js/bootstrap/carousel.js"></script>
<script src="src/js/bootstrap/transition.js"></script>
<script src="src/js/bootstrap/button.js"></script>
<script src="src/js/bootstrap/collapse.js"></script>
<script src="src/js/bootstrap/validator.js"></script>
<script src="src/js/underscore.js"></script>
<script src="src/js/SimpleMap.js"></script>
<script src="src/js/NumberCounter.js"></script>
<script src="src/js/jquery.magnific-popup.min.js"></script>
<script src="src/js/jquery.dataTables.min.js"></script>
<script src="src/js/zoomify.min.js"></script>
<script src="src/js/custom.js"></script>

<!--Filer Libraries-->
<script type="text/javascript" src="src/js/filer/jquery.filer.min.js?v=1.0.5"></script>
<script type="text/javascript" src="src/js/filer/custom.js?v=1.0.5"></script>

</body>
</html>
