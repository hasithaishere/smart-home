<?php
/* Smarty version 3.1.29, created on 2016-05-23 20:20:19
  from "/home/hasitha/projects/ajs_php/learners/app/views/contact.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574318abb51852_66029292',
  'file_dependency' => 
  array (
    '399126df6cac660826df9d430a45e5ede79278ed' => 
    array (
      0 => '/home/hasitha/projects/ajs_php/learners/app/views/contact.tpl',
      1 => 1464015014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574318abb51852_66029292 ($_smarty_tpl) {
?>
<!-- BREADCRUMBS -->
<div class="breadcrumbs margin-bottom-0">
  <div class="container">
    <span>
      <a class="home" href="index.php" title="Go to Smart Home." rel="v:url">Smart Home</a>
    </span>
    <span>
      <span>Contact Us</span>
    </span>
  </div>
</div><!-- /.breadcrumbs -->

<!-- MAP -->

<!-- /.map -->

<div class="container">

  <div class="row margin-bottom-30">

    <div class="col-sm-3 hentry">

      <div class="widget_black-studio-tinymce">
        <div class="featured-widget">
          <h3 class="widget-title">
            <span class="widget-title__inline">OLD FASHIONED CONTACT</span>
          </h3>
          <p>
            <strong>Smart Home</strong><br>
            Ratnapura.
          </p>
          <p>
            +94 45 222 9174 <br>
            +94 71 602 2476<br>
            <a href="mailto:contact@smarthome.lk">contact@smarthome.lk</a>
          </p>
        </div>
      </div>

      <div class="widget_pw_opening_time">

        <div class="featured-widget">
          <h3>
            <span class="icon icons-ornament-left"></span>
            OPENING TIME
            <span class="icon icons-ornament-right"></span>
          </h3>
          <dl class="week-day ">
            <dt>Monday</dt>
            <dd>8:00 - 16:00</dd>
          </dl>
          <dl class="week-day  light-bg">
            <dt>Tuesday</dt>
            <dd>8:00 - 16:00</dd>
          </dl>
          <dl class="week-day ">
            <dt>Wednesday</dt>
            <dd>8:00 - 16:00</dd>
          </dl>
          <dl class="week-day  light-bg">
            <dt>Thursday</dt>
            <dd>8:00 - 16:00</dd>
          </dl>
          <dl class="week-day ">
            <dt>Friday</dt>
            <dd>8:00 - 16:00</dd>
          </dl>
          <dl class="week-day  light-bg">
            <dt>Saturday</dt>
            <dd>8:00 - 16:00</dd>
          </dl>
          <dl class="week-day  light-bg">
            <dt>Sunday</dt>
            <dd>8:00 - 16:00</dd>
          </dl>
        </div><!-- /.featured-widget -->

      </div><!-- /.widget_pw_opening_time -->

    </div><!-- /.col -->

    <div class="col-sm-9">

      <h3 class="widget-title margin-top-0">
        SEND US AN EMAIL, OR THREE
      </h3>

      <p>
        You can contact us using email or visit our smart home development or tech center in above address.
      </p>

      <form data-toggle="validator" method="post" action="form.php" class="aSubmit">
        <div style="display:none"><input type="text" name="maximus" value=""></div>
        <input type="hidden" name="theSubject" value="CargoPress: Contact Request">
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <input type="text" placeholder="First Name*" aria-invalid="false" aria-required="true" size="40" value="" name="your-name" required>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <input type="text" placeholder="Last Name*" aria-invalid="false" aria-required="true" size="40" value="" name="last-name" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <input type="email" placeholder="E-mail address*" aria-invalid="false" aria-required="true" size="40" value="" name="your-email" required>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <input type="tel" placeholder="Phone Number" aria-invalid="false" aria-required="true" size="40" value="" name="your-phone">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-8">
            <div class="form-group">
              <input type="text" placeholder="Subject*" aria-invalid="false" size="40" value="" name="your-subject" required>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="form-group">
              <textarea placeholder="Message*" aria-invalid="false" rows="10" cols="40" name="your-message" required></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="SEND MESSAGE">
            <img class="ajax-loader" id="loader" src="images/ajax-loader.gif" alt="Sending ..." style="display: none;">
          </div>
        </div>
        <div class="response success">Your message was sent; we'll be in touch shortly!</div>
        <div class="response error">Unfortunately, we could not sent your message right now. Please try again.</div>
      </form>

    </div><!-- /.col -->

  </div><!-- /.row -->

</div><!-- /.container -->
<?php }
}
