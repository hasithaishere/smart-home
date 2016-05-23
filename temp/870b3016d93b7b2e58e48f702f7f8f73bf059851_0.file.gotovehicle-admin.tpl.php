<?php
/* Smarty version 3.1.29, created on 2016-03-06 13:23:20
  from "/home/hasitha/projects/ajs_php/learners/app/views/gotovehicle-admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dbe1f0933189_36047168',
  'file_dependency' => 
  array (
    '870b3016d93b7b2e58e48f702f7f8f73bf059851' => 
    array (
      0 => '/home/hasitha/projects/ajs_php/learners/app/views/gotovehicle-admin.tpl',
      1 => 1457246972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dbe1f0933189_36047168 ($_smarty_tpl) {
?>

<!-- MAIN TITLE -->
<div class="main-title">
  <div class="container">
    <h1 class="main-title__primary">Vehicle Info...</h1>
    <h3 class="main-title__secondary">Find and update vehicle's service logs.</h3>
  </div>
</div><!-- /.main-title -->

<!-- BREADCRUMBS -->
<div class="breadcrumbs">
  <div class="container">
    <span>
      <a class="home" href="index.php" title="Go to CargoPress." rel="v:url">Yashodha Motors</a>
    </span>
    <span>
      <span>Find Customer's Vehicle</span>
    </span>
  </div>
</div><!-- /.breadcrumbs -->

<div class="container">

  <div class="row">

    <div class="col-sm-8 col-sm-offset-2 margin-bottom-60">

      <p>
        Enter customer's vehicle number to go vehicle information page. As an example emagine customer's vehicle number AAA-1234. So you can enter vehicle number as AAA-1234, finally you can click on "Go To Vehicle".
      </p>

      <form method="post" action="helper/validate_vehicle.php" class="trackForm clearfix">
        <input type="text" class="text_holder" name="vehicleno" placeholder="Enter customer's vehicle number.... eg: AAA-1234" id="vehicleno">
        <button type="submit" class="btn btn-info">Go To vehicle</button>
        <?php if ($_smarty_tpl->tpl_vars['hasError']->value == 1) {?>
          <div class="error-alert error-alert-danger">
            <strong>No Vehicle Found!</strong> No vehicle found for given information.
          </div>
        <?php }?>
      </form>

    </div><!-- /.col -->

  </div><!-- /.row -->

</div><!-- /.container -->
<?php }
}
