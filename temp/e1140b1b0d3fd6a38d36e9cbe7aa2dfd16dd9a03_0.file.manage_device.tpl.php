<?php
/* Smarty version 3.1.29, created on 2016-05-23 00:53:33
  from "/home/hasitha/projects/ajs_php/learners/app/views/manage_device.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57420735d4ae92_12820518',
  'file_dependency' => 
  array (
    'e1140b1b0d3fd6a38d36e9cbe7aa2dfd16dd9a03' => 
    array (
      0 => '/home/hasitha/projects/ajs_php/learners/app/views/manage_device.tpl',
      1 => 1463944977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57420735d4ae92_12820518 ($_smarty_tpl) {
?>

<!-- MAIN TITLE -->
<div class="main-title">
  <div class="container">
    <h1 class="main-title__primary">Add / Edit New Main Device...</h1>
    <h3 class="main-title__secondary">Adminstrator can add / assign a device.</h3>
  </div>
</div><!-- /.main-title -->

<!-- BREADCRUMBS -->
<div class="breadcrumbs">
  <div class="container">
    <span>
      <a class="home" href="index.php" title="Go to CargoPress." rel="v:url">Smart Home</a>
    </span>
    <span>
      <span>Add / Edit Device</span>
    </span>
  </div>
</div><!-- /.breadcrumbs -->

<div class="container">

  <div class="row">

    <div class="col-sm-8 col-sm-offset-2 margin-bottom-60">

      <p>
        Please enter correct information of this device.
      </p>

      <form method="post" action="helper/manage_device.php" class="trackForm clearfix">

      <input type="text" class="text_holder" name="device_id" data-toggle="tooltip" title="Enter device uniq id" placeholder="Enter device uniq id" id="device_id" value="<?php echo $_smarty_tpl->tpl_vars['deviceData']->value['device_id'];?>
">

        <input type="text" class="text_holder" name="device_name" data-toggle="tooltip" title="Enter device name" placeholder="Enter device name" id="device_name" value="<?php echo $_smarty_tpl->tpl_vars['deviceData']->value['device_name'];?>
">

        <input type="text" class="text_holder" name="location" data-toggle="tooltip" title="Enter device location" placeholder="Enter device location" id="location" value="<?php echo $_smarty_tpl->tpl_vars['deviceData']->value['location'];?>
">
        <input type="text" class="text_holder" name="no_of_subdevices" data-toggle="tooltip" title="Enter no of sub devices / points" placeholder="Enter no of sub devices / points" id="no_of_subdevices" value="<?php echo $_smarty_tpl->tpl_vars['deviceData']->value['no_of_subdevices'];?>
">
        <input type="text" class="text_holder" name="no_of_readers" data-toggle="tooltip" title="Enter no of energy readers" placeholder="Enter no of energy readers" id="no_of_readers" value="<?php echo $_smarty_tpl->tpl_vars['deviceData']->value['no_of_readers'];?>
">

        <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['org_user_id']->value;?>
">

        <button type="submit" class="btn btn-info">Save</button>
      </form>


    </div><!-- /.col -->

  </div><!-- /.row -->

</div><!-- /.container -->
<?php }
}
