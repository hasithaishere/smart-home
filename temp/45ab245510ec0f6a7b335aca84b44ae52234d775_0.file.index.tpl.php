<?php
/* Smarty version 3.1.29, created on 2016-05-23 21:13:28
  from "/home/hasitha/projects/ajs_php/learners/app/views/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5743252058cfb4_97896240',
  'file_dependency' => 
  array (
    '45ab245510ec0f6a7b335aca84b44ae52234d775' => 
    array (
      0 => '/home/hasitha/projects/ajs_php/learners/app/views/index.tpl',
      1 => 1464018206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5743252058cfb4_97896240 ($_smarty_tpl) {
?>
<!--<h2>dsdsfds</h2>
<?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
<h2><?php echo $_smarty_tpl->tpl_vars['user']->value["username"];?>
</h2>
<h2><?php echo $_smarty_tpl->tpl_vars['user']->value["password"];?>
</h2>
<?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
}
?>-->
<!-- JUMBOTRON -->
<div class="jumbotron jumbotron--with-captions">

  <div data-interval="5000" data-ride="carousel" id="headerCarousel" class="carousel slide">

    <div class="carousel-inner">

      

      <div class="item">
        <img alt="CRANE TO TRAIN, WE DO EVERYTHING" sizes="100vw" srcset="src/images/main_slider/slider2.jpg">
        
      </div><!-- /.item -->

      <div class="item active">
        <img alt="GROUND OR AIR, THERE IS NO STOPPING FOR US" sizes="100vw" srcset="src/images/main_slider/slider1.jpg">
        
      </div><!-- /.item -->

                                    <div class="item">
        <img alt="GROUND OR AIR, THERE IS NO STOPPING FOR US" sizes="100vw" srcset="src/images/main_slider/slider3.jpg">
        
      </div><!-- /.item -->

    </div><!-- /.carousel-inner -->

    <div class="container">

      <a data-slide="prev" role="button" href="#headerCarousel" class="left jumbotron__control">
        <i class="fa  fa-caret-left"></i>
      </a>
      <a data-slide="next" role="button" href="#headerCarousel" class="right jumbotron__control">
        <i class="fa  fa-caret-right"></i>
      </a>
    </div><!-- /.container -->

  </div><!-- /.carousel -->

</div><!-- /.jumbotron -->

<!-- OUR SERVICES -->
<div class="container" role="main">

  <div class="row" id="our-service-holder">

    <div class="col-sm-12">

      <h3 class="widget-title big lined">
        <span>OUR SERVICES</span>
      </h3>

    </div><!-- /.col -->

  </div><!-- /.row -->

  <div class="row">

    <div class="col-sm-4">

      <div class="widget_pw_icon_box margin-bottom-30">
        <a target="_self" href="#our-service-holder" class="icon-box">
          <i class="fa fa-wrench"></i>
          <h4 class="icon-box__title">EASILY CONTROLLERBLE</h4>
          <span class="icon-box__subtitle">Now you can easily control your house-hold items easily</span>
        </a>
      </div><!-- /.widget_pw_icon_box -->

    </div><!-- /.col -->

    <div class="col-sm-4">

      <div class="widget_pw_icon_box margin-bottom-30">
        <a target="_self" href="#our-service-holder" class="icon-box">
          <i class="fa fa-cogs"></i>
          <h4 class="icon-box__title">COUNT YOUR USAGE</h4>
          <span class="icon-box__subtitle">You can easily count power usage of home.</span>
        </a>
      </div><!-- /.widget_pw_icon_box -->

    </div><!-- /.col -->

    <div class="col-sm-4">

      <div class="widget_pw_icon_box margin-bottom-30">
        <a target="_self" href="#our-service-holder" class="icon-box">
          <i class="fa fa-bolt"></i>
          <h4 class="icon-box__title">HIGHLY SCALLABLE</h4>
          <span class="icon-box__subtitle">You can easily scale the number of devices and locations. </span>
        </a>
      </div><!-- /.widget_pw_icon_box -->

    </div><!-- /.col -->

  </div><!-- /.row -->

</div><!-- /.conainer -->

<!-- VALUES -->
<div class="values margin-bottom-60">

  <div class="container">

    <div class="col-sm-8 col-sm-offset-2">

      <h3>OUR CORE VALUES</h3>
      <p class="text-center">
        <span>WRITTEN BY SMART HOME FOUNDER</span>
      </p>
      <hr class="hr-quote">
      <h4  class="text-center">Mission</h4>
      <p class="text-center">
        To  turn your home into a smart home. You can then enhance your smart home by adding hundreds of compatible products.
      </p>
      <!--<p class="text-center">
        <img alt="signature" src="http://res.cloudinary.com/ymoto/image/upload/v1455309554/signature_ogud4y.png">
      </p>-->

    </div><!-- /.col -->

  </div><!-- /.container -->

</div><!-- /.values -->

<!-- ABOUT / QUICK QUITE / GALLERY / FAQ -->
<div class="container">

  <div class="row margin-bottom-60" id="about-us">

    <div class="col-sm-6">

      <h3 class="widget-title big lined">
        <span>ABOUT US</span>
      </h3>
      <p>
        We  deliver power and performance on one platform that coordinates the technology in your house into complete, brilliant experiences—interactions that fit your lifestyle and are easy for your family to enjoy. With one touch, on/off the lights, measure the consumption. Or, check in on your home no matter where you are. It’s a smarter living experience that you’ll wonder how you ever lived without. We call it, the New Normal.
      </p>
      <p>
        <a href="about.php" class="read-more">READ MORE</a>
      </p>

    </div><!-- /.col -->

    <div class="col-sm-6" id="quickQuoteForm_wrapper">

      <div class="featured-widget">

        <h3 class="widget-title">
          REQUEST A QUICK QUOTE
        </h3>

        <p>
        But i must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete count.
        </p>

        <form data-toggle="validator" method="post" action="form.php" id="quickQuoteForm" class="aSubmit">
          <div style="display:none"><input type="text" name="maximus" value=""></div>
          <input type="hidden" name="subject" value="CargoPress: Quick Quote Request">
          <div class="contact-form-small">
            <div class="row">
              <div class="col-xs-12  col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="First and Last Name *" aria-invalid="false" aria-required="true" size="40" value="" name="name" required>
                </div>
                <div class="form-group">
                  <input type="email" placeholder="E-mail address" aria-invalid="false" aria-required="true" size="40" value="" name="email" required>
                </div>
                <select aria-invalid="false" name="service">
                  <option value="Cargo">Device Information</option>
                  <option value="Ground Transport">Service Help</option>
                  <option value="Logistic Service">Contact Call Center Agent</option>
                  <option value="Storage">Request Technicl Support</option>
                </select>
              </div>
              <div class="col-xs-12  col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Subject *" aria-invalid="false" aria-required="true" size="40" value="" name="subject" required>
                </div>
                <div class="form-group">
                  <textarea placeholder="Message *" aria-invalid="false" rows="10" cols="40" name="message" required></textarea>
                </div>
              </div>
              <div class="col-xs-12  col-md-12">
                <input type="submit" class="btn btn-primary pull-right" value="SEND MESSAGE">
                <img class="ajax-loader" id="loader" src="src/images/ajax-loader.gif" alt="Sending ..." style="display:none;">
              </div>
            </div><!-- /.row -->
            <div class="response success">Your message was sent; we'll be in touch shortly!</div>
            <div class="response error">Unfortunately, we could not sent your message right now. Please try again.</div>
          </div><!-- /.contact-form-small -->
        </form>

      </div><!-- /.featured-widget -->

    </div><!-- /.col -->

  </div><!-- /.row -->


</div><!-- /.container -->





<!-- COUNTERS -->
<div class="counters">

  <div class="container">

     <div  class="widget_pw_number-counter panel-first-child panel-last-child">
       <div data-speed="1000" class="widget-number-counters">
         <div class="number-counter">
           <i class="number-counter__icon fa fa-building-o"></i>
           <div data-to="1" class="number-counter__number js-number">00</div>
           <div class="number-counter__title">Islandwide Service Centers</div>
         </div>
         <div class="number-counter">
           <i class="number-counter__icon fa fa-users"></i>
           <div data-to="1" class="number-counter__number js-number">00</div>
           <div class="number-counter__title">No of Users</div>
         </div>
         <div class="number-counter">
           <i class="number-counter__icon fa fa-globe"></i>
             <div data-to="30" class="number-counter__number js-number">00</div>
           <div class="number-counter__title">Current Total Device Count</div>
         </div>
         <div class="number-counter">
           <i class="number-counter__icon fa fa-users"></i>
             <div data-to="1" class="number-counter__number js-number">00</div>
             <div class="number-counter__title">Years of Experiences</div>
         </div>
       </div>
     </div>

  </div><!-- /.container -->

</div><!-- /.counters -->
<?php }
}
