<?php
/* Smarty version 3.1.29, created on 2016-03-05 23:08:22
  from "/home/hasitha/projects/ajs_php/learners/app/views/uploadimages.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56db198e17e2a7_01272036',
  'file_dependency' => 
  array (
    '1e7400dd36d40c245dd31e3e5eec06e6219e3bd6' => 
    array (
      0 => '/home/hasitha/projects/ajs_php/learners/app/views/uploadimages.tpl',
      1 => 1457199226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56db198e17e2a7_01272036 ($_smarty_tpl) {
?>
<div class="container" role="main">
  <div class="row">
    <div class="col-md-5">
      <h3 class="widget-title">UPLOAD
        <?php if ($_smarty_tpl->tpl_vars['imgType']->value == 'showcase') {?>
          SHOW CASE IMAGES
        <?php } elseif ($_smarty_tpl->tpl_vars['imgType']->value == 'doc') {?>
          DOCUMENT IMAGES
        <?php }?>
      </h3>
      <p>
    	    Please drag and drop or select files, which are wanted to upload.
      </p>
      <?php if ($_smarty_tpl->tpl_vars['imgType']->value == 'showcase') {?>
        <input type="file" name="files[]" id="filer_input_showcase" multiple="multiple">
      <?php } elseif ($_smarty_tpl->tpl_vars['imgType']->value == 'doc') {?>
        <input type="file" name="files[]" id="filer_input_documents" multiple="multiple">
      <?php }?>

      <a class="btn btn-primary" href="vehicleinfo.php">Go Back</a>

    </div>
  </div>
  <div class="row margin-bottom-30"></div>
</div>
<?php }
}
