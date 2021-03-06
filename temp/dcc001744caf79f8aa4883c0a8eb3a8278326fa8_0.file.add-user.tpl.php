<?php
/* Smarty version 3.1.29, created on 2016-05-22 18:33:40
  from "/home/hasitha/projects/ajs_php/learners/app/views/add-user.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5741ae2c602d30_55301561',
  'file_dependency' => 
  array (
    'dcc001744caf79f8aa4883c0a8eb3a8278326fa8' => 
    array (
      0 => '/home/hasitha/projects/ajs_php/learners/app/views/add-user.tpl',
      1 => 1463922216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5741ae2c602d30_55301561 ($_smarty_tpl) {
?>

<!-- MAIN TITLE -->
<div class="main-title">
  <div class="container">
    <h1 class="main-title__primary">Add / Edit New User...</h1>
    <h3 class="main-title__secondary">Adminstrator can add new user or edit existing user.</h3>
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
        Please enter correct information of this user.
      </p>

      <form method="post" action="helper/add_user.php" class="trackForm clearfix">

      <input type="text" class="text_holder" name="userrealname" placeholder="Enter user's real name" id="userrealname">

        <input type="text" class="text_holder" name="username" placeholder="Enter user email address as username" id="username">

        <input type="password" class="text_holder" name="password" placeholder="Enter user password" id="password">
        <input type="password" class="text_holder" name="password-confirm" placeholder="Enter user password again" id="password-confirm">

        <select name="user-type" id="user-type">
          <option value="1">Admin User</option>
          <option value="2">System User</option>
        </select>

        <input type="text" class="text_holder" name="nic" placeholder="Enter user NIC no" id="nic">
        <input type="text" class="text_holder" name="address" placeholder="Enter user address" id="address">
        <input type="text" class="text_holder" name="tel1" placeholder="Enter user primary telephone number" id="tel1">
        <input type="text" class="text_holder" name="tel2" placeholder="Enter user secondary telephone number" id="tel2">

        <button type="submit" class="btn btn-info">Save</button>
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
