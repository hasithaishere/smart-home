<?php
/* Smarty version 3.1.29, created on 2016-03-06 17:57:35
  from "/home/hasitha/projects/ajs_php/learners/app/views/vehicleinfo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc2237a1ee77_14950356',
  'file_dependency' => 
  array (
    'b3525d15179f065e6a534cfd2d15fdfd92eac457' => 
    array (
      0 => '/home/hasitha/projects/ajs_php/learners/app/views/vehicleinfo.tpl',
      1 => 1457267251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dc2237a1ee77_14950356 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/hasitha/projects/ajs_php/learners/app/lib/smarty-3.1.29/libs/plugins/modifier.replace.php';
?>
<div class="container" role="main">

<div class="row">
  <h3 class="widget-title">VEHICLE IMAGE GALLERY</h3>
</div>

<div class="row">
  <?php if (count($_smarty_tpl->tpl_vars['allImages']->value) > 0) {?>
    <div class="img-block showcase-img-block">
      <?php
$_from = $_smarty_tpl->tpl_vars['allImages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_0_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$__foreach_image_0_saved_key = isset($_smarty_tpl->tpl_vars['index']) ? $_smarty_tpl->tpl_vars['index'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_0_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
        <figure class="zoomify-img-holder" id="showcase-img-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">

            <img class="vehicle-img-holder zoomify-img" alt="placeholder" src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">
          <?php if ($_smarty_tpl->tpl_vars['userType']->value == 1) {?>
            <a href="#" class="delete-img" img-path="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" img-index="showcase-img-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" img-type="showcase-img"><i class="fa fa-trash"></i></a>
          <?php }?>
        </figure>
      <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
if ($__foreach_image_0_saved_key) {
$_smarty_tpl->tpl_vars['index'] = $__foreach_image_0_saved_key;
}
?>
    </div>
  <?php } elseif (count($_smarty_tpl->tpl_vars['allImages']->value) == 0) {?>
    <p>
       No vehicle's images uploaded.
    </p>
  <?php }?>

</div>
<?php if ($_smarty_tpl->tpl_vars['userType']->value == 1) {?>
  <div class="upload-btn-holder">
    <a class="btn btn-primary" href="uploadimages.php?type=showcase">Upload Images</a>
  </div>
<?php }?>

<div class="row">
  <h3 class="widget-title">DOCUMENTS</h3>
</div>
<div class="row margin-bottom-30">
  <?php if (count($_smarty_tpl->tpl_vars['allDocuments']->value) > 0) {?>
    <div class="img-block doc-img-block">
      <?php
$_from = $_smarty_tpl->tpl_vars['allDocuments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_1_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$__foreach_image_1_saved_key = isset($_smarty_tpl->tpl_vars['index']) ? $_smarty_tpl->tpl_vars['index'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_1_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
      <figure class="zoomify-img-holder"  id="doc-img-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">

          <img class="vehicle-img-holder zoomify-img" alt="placeholder" src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">
        <?php if ($_smarty_tpl->tpl_vars['userType']->value == 1) {?>
        <a href="#" class="delete-img" img-path="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" img-index="doc-img-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" img-type="doc-img"><i class="fa fa-trash"></i></a>
        <?php }?>
      </figure>
      <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_1_saved_local_item;
}
if ($__foreach_image_1_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_1_saved_item;
}
if ($__foreach_image_1_saved_key) {
$_smarty_tpl->tpl_vars['index'] = $__foreach_image_1_saved_key;
}
?>
    </div>
  <?php } elseif (count($_smarty_tpl->tpl_vars['allDocuments']->value) == 0) {?>
    <p>
       No documents uploaded.
    </p>
  <?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['userType']->value == 1) {?>
  <div class="upload-btn-holder">
    <a class="btn btn-primary" href="uploadimages.php?type=doc">Upload Images</a>
  </div>
<?php }?>

<div class="row">
  <h3 class="widget-title">SERVICE RECORDS</h3>
  <p>
	    You can search/filter all available service records in your vehicle using following table.
  </p>

  <div class=" row vehicle-data-holder">
    <div class="col-md-3">
      <p><strong> Owner : </strong> <?php echo $_smarty_tpl->tpl_vars['owner']->value;?>
</p>
    </div>
    <div class="col-md-3">
      <p><strong> Vehicle No : </strong> <?php echo $_smarty_tpl->tpl_vars['vehicleNo']->value;?>
</p>
    </div>
    <div class="col-md-3">
      <p><strong> Model No : </strong> <?php echo $_smarty_tpl->tpl_vars['modelNo']->value;?>
</p>
    </div>
    <div class="col-md-3">
      <p><strong> Chassie No : </strong> <?php echo $_smarty_tpl->tpl_vars['chassieNo']->value;?>
</p>
    </div>
  </div>

</div>
<div class="row margin-bottom-30">
  <table id="example" class="display datatable" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Bill No</th>
                <th>Bill Date</th>
                <th>KM Count</th>
                <th>Service Info.</th>
                <th>Description</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Bill No</th>
                <th>Bill Date</th>
                <th>KM Count</th>
                <th>Service Info.</th>
                <th>Description</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['vehicleData']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_vehicle_2_saved_item = isset($_smarty_tpl->tpl_vars['vehicle']) ? $_smarty_tpl->tpl_vars['vehicle'] : false;
$_smarty_tpl->tpl_vars['vehicle'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['vehicle']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vehicle']->value) {
$_smarty_tpl->tpl_vars['vehicle']->_loop = true;
$__foreach_vehicle_2_saved_local_item = $_smarty_tpl->tpl_vars['vehicle'];
?>
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['billno'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['billedtime'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['kmcount'];?>
</th>
                    <th>- <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['vehicle']->value['items'],',','<br> - ');?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['description'];?>
</th>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['vehicle'] = $__foreach_vehicle_2_saved_local_item;
}
if ($__foreach_vehicle_2_saved_item) {
$_smarty_tpl->tpl_vars['vehicle'] = $__foreach_vehicle_2_saved_item;
}
?>
        </tbody>
    </table>
  </div>
</div>
<?php }
}
