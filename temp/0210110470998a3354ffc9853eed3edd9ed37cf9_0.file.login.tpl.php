<?php
/* Smarty version 3.1.29, created on 2016-05-23 20:39:16
  from "/home/hasitha/projects/ajs_php/learners/app/views/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57431d1c8f0363_56050926',
  'file_dependency' => 
  array (
    '0210110470998a3354ffc9853eed3edd9ed37cf9' => 
    array (
      0 => '/home/hasitha/projects/ajs_php/learners/app/views/login.tpl',
      1 => 1464016153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57431d1c8f0363_56050926 ($_smarty_tpl) {
?>

<!-- MAIN TITLE -->
<div class="main-title">
  <div class="container">
    <h1 class="main-title__primary">Login...</h1>
    <h3 class="main-title__secondary">Login area for administrators and Device Users.</h3>
  </div>
</div><!-- /.main-title -->

<!-- BREADCRUMBS -->
<div class="breadcrumbs">
  <div class="container">
    <span>
      <a class="home" href="index.php" title="Go to CargoPress." rel="v:url">Smart Home</a>
    </span>
    <span>
      <span>Login Area</span>
    </span>
  </div>
</div><!-- /.breadcrumbs -->

<div class="container">

  <div class="row">

    <div class="col-sm-8 col-sm-offset-2 margin-bottom-60">

      <p>
        Enter your username (Which you used for register in system) and password for login to admin area / device control web console.
      </p>

      <form method="post" action="helper/validate_user.php" class="trackForm clearfix">
        <input type="text" class="text_holder" name="username" placeholder="Enter your email address as username" id="username">
        <input type="password" class="text_holder" name="password" placeholder="Enter admin password" id="password">
        <button type="submit" class="btn btn-info">Login</button>
        <?php if ($_smarty_tpl->tpl_vars['hasError']->value == 1) {?>
          <div class="error-alert error-alert-danger">
            <strong>Login Failed!</strong> Invalid username or pasword, please check again and re-enter.
          </div>
        <?php }?>
      </form>


    </div><!-- /.col -->

  </div><!-- /.row -->

</div><!-- /.container -->
<?php }
}
