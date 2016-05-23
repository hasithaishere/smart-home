<?php
/* Smarty version 3.1.29, created on 2016-05-23 21:27:33
  from "/home/hasitha/projects/ajs_php/learners/app/views/support/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5743286dbc8669_96716005',
  'file_dependency' => 
  array (
    '346584b42a93de9c38f292bbaa790a1aac092494' => 
    array (
      0 => '/home/hasitha/projects/ajs_php/learners/app/views/support/footer.tpl',
      1 => 1464019050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5743286dbc8669_96716005 ($_smarty_tpl) {
?>

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
            <?php if ($_smarty_tpl->tpl_vars['is_admin']->value == 1) {?>
              <a target="_self" href="logout.php" class="btn btn-info">SIGN OUT</a>
            <?php } else { ?>
              <a target="_self" href="login.php" class="btn btn-info">LOGIN LOGIN</a>
            <?php }?>
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

<?php echo '<script'; ?>
 src="src/js/jquery-2.1.4.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/js/bootstrap/carousel.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/js/bootstrap/transition.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/js/bootstrap/button.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/js/bootstrap/collapse.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/js/bootstrap/validator.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/js/underscore.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/js/SimpleMap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/js/NumberCounter.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/js/zoomify.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="src/js/custom.js"><?php echo '</script'; ?>
>

<!--Filer Libraries-->
<?php echo '<script'; ?>
 type="text/javascript" src="src/js/filer/jquery.filer.min.js?v=1.0.5"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="src/js/filer/custom.js?v=1.0.5"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
