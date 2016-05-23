<?php
/* Smarty version 3.1.29, created on 2016-05-23 21:17:32
  from "/home/hasitha/projects/ajs_php/learners/app/views/user-info.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57432614bcd561_15184239',
  'file_dependency' => 
  array (
    'b2985a9488bf1ed4859fe3ecce43ce0214d86b12' => 
    array (
      0 => '/home/hasitha/projects/ajs_php/learners/app/views/user-info.tpl',
      1 => 1464018451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57432614bcd561_15184239 ($_smarty_tpl) {
?>
<div class="container" role="main">

<div class="row">
  <h3 class="widget-title">ALL USER INFO...</h3>
  <p>
	    You can search/filter all users using following table.
  </p>

</div>
<div class="row margin-bottom-30">
  <table id="example" class="display datatable all-user-info" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>NIC No.</th>
                <th>Address</th>
                <th>Tel. No-1</th>
                <!--<th>Tel. No-2</th>-->
                <th>User Type</th>
                <th>User State</th>
                <th>Control</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>NIC No.</th>
                <th>Address</th>
                <th>Tel. No-1</th>
                <!--<th>Tel. No-2</th>-->
                <th>User Type</th>
                <th>User State</th>
                <th>Control</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['userData']->value;
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
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['user']->value['nic'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['user']->value['tel1'];?>
</th>
                    <!--<th><?php echo $_smarty_tpl->tpl_vars['user']->value['tel2'];?>
</th>-->
                    <th>
                      <?php if ($_smarty_tpl->tpl_vars['user']->value['user_type'] == 1) {?>
                          Administrator
                      <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['user_type'] == 2) {?>
                          General User
                      <?php } else { ?>
                          Unknown User
                      <?php }?>
                    </th>
                    <th>
                      <?php if ($_smarty_tpl->tpl_vars['user']->value['is_enabled'] == 0) {?>
                          <span class="label label-warning">Disabled</span>
                      <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['is_enabled'] == 1) {?>
                          <span class="label label-success">Enabled</span>
                      <?php }?>
                    </th>
                    <th>
                      <?php if ($_smarty_tpl->tpl_vars['user']->value['is_enabled'] == 0) {?>
                          <a class="btn btn-success ctrl-btn" href="helper/en_dis_user.php?userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&state=1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                      <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['is_enabled'] == 1) {?>
                          <a class="btn btn-warning ctrl-btn" href="helper/en_dis_user.php?userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&state=0"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                      <?php }?>                      
                      
                      <a class="btn btn-danger ctrl-btn" href="helper/delete_user.php?userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      <a class="btn btn-info ctrl-btn" href="update-user.php?userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                      <?php if ($_smarty_tpl->tpl_vars['user']->value['user_type'] == 2) {?>
                        <a class="btn btn-success ctrl-btn" href="manage_device.php?userid=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><i class="fa fa-mobile" aria-hidden="true"></i></a>
                      <?php }?>
                      
                    </th>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
}
?>
        </tbody>
    </table>
  </div>
  <hr>
  <p> Please click on following button and add new user for system.</p>
  <a target="_self" href="add-user.php" class="btn btn-info" id="button_requestQuote">Add New User</a>
  <br>
  <br>
</div>
<?php }
}
