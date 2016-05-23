<?php
/* Smarty version 3.1.29, created on 2016-05-23 21:26:42
  from "/home/hasitha/projects/ajs_php/learners/app/views/device-panel.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5743283a3bad97_29904762',
  'file_dependency' => 
  array (
    '4d7d475d334bc7233d44ca644a46312d8c7a76fd' => 
    array (
      0 => '/home/hasitha/projects/ajs_php/learners/app/views/device-panel.tpl',
      1 => 1464019001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5743283a3bad97_29904762 ($_smarty_tpl) {
?>

<!-- MAIN TITLE -->
<div class="main-title">
  <div class="container">
    <h1 class="main-title__primary">Device Console...</h1>
    <h3 class="main-title__secondary">Change all the functionalities and behaviours of the system.</h3>
  </div>
</div><!-- /.main-title -->

<!-- BREADCRUMBS -->
<div class="breadcrumbs">
  <div class="container">
    <span>
      <a class="home" href="index.php" title="Go to CargoPress." rel="v:url">Smart Home</a>
    </span>
    <span>
      <span>Admin Console</span>
    </span>
  </div>
</div><!-- /.breadcrumbs -->

<div class="container">

  <div class="row">

    <?php
$_from = $_smarty_tpl->tpl_vars['subDeviceData']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_subDevice_0_saved_item = isset($_smarty_tpl->tpl_vars['subDevice']) ? $_smarty_tpl->tpl_vars['subDevice'] : false;
$_smarty_tpl->tpl_vars['subDevice'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['subDevice']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['subDevice']->value) {
$_smarty_tpl->tpl_vars['subDevice']->_loop = true;
$__foreach_subDevice_0_saved_local_item = $_smarty_tpl->tpl_vars['subDevice'];
?>
      <div class="col-sm-4 col-md-3 single-device-unit">
          <div class="thumbnail text-center">
            <?php if ($_smarty_tpl->tpl_vars['subDevice']->value['device_type'] == 1) {?>
                <img class="device-icon-holder" src="src/images/ctrl-panel/bulb-icon.png" alt="...">
            <?php } elseif ($_smarty_tpl->tpl_vars['subDevice']->value['device_type'] == 2) {?>
                <img class="device-icon-holder" src="src/images/ctrl-panel/meter.png" alt="...">
            <?php } else { ?>
                <img class="device-icon-holder" src="src/images/ctrl-panel/meter.png" alt="...Unknown Device...">
            <?php }?>            
            <div class="caption">
              <h5><?php echo $_smarty_tpl->tpl_vars['subDevice']->value['device_name'];?>
</h5>
              <p><?php echo $_smarty_tpl->tpl_vars['subDevice']->value['device_location'];?>
</p>

              <?php if ($_smarty_tpl->tpl_vars['subDevice']->value['device_type'] == 1) {?>
                <label class="switch">
                  <?php if ($_smarty_tpl->tpl_vars['subDevice']->value['state'] == 1) {?>
                    <input type="checkbox" class="sub-device-switch" main-device-id="<?php echo $_smarty_tpl->tpl_vars['subDevice']->value['main_device_id'];?>
" sub-device-id="<?php echo $_smarty_tpl->tpl_vars['subDevice']->value['sub_device_id'];?>
" checked>
                  <?php } else { ?>
                    <input type="checkbox" class="sub-device-switch" main-device-id="<?php echo $_smarty_tpl->tpl_vars['subDevice']->value['main_device_id'];?>
" sub-device-id="<?php echo $_smarty_tpl->tpl_vars['subDevice']->value['sub_device_id'];?>
">                  
                  <?php }?>
                  <div class="slider round"></div>
                </label>
              <?php } elseif ($_smarty_tpl->tpl_vars['subDevice']->value['device_type'] == 2) {?>
                  <h3 class="device-meter" main-device-id="<?php echo $_smarty_tpl->tpl_vars['subDevice']->value['main_device_id'];?>
">0W</h3>
              <?php } else { ?>
                  <h3>Unknown Function</h3>
              <?php }?>  



              
            </div>
          </div>
      </div>
    <?php
$_smarty_tpl->tpl_vars['subDevice'] = $__foreach_subDevice_0_saved_local_item;
}
if ($__foreach_subDevice_0_saved_item) {
$_smarty_tpl->tpl_vars['subDevice'] = $__foreach_subDevice_0_saved_item;
}
?>

  </div><!-- /.row -->
  <div class="row"><br></div>

</div><!-- /.container -->

<?php echo '<script'; ?>
>
    function init() { 
      websocket = new WebSocket("ws://nodered-hasitha.rhcloud.com:8000/api/ws/wattlistner");
      
      websocket.onopen = function() { console.log("CONNECTED"); };
      
      websocket.onmessage = function(evt) { 
        console.log('Event Data', evt.data);
        var dataObj = JSON.parse(evt.data);

        var wattAmpiarage = dataObj.watt;

        if(wattAmpiarage <= 0.20) {
          wattAmpiarage = 0.00;
        }

        var wattCount = Math.round(230 * wattAmpiarage * 100) / 100;

        if(!dataObj.hasOwnProperty('isin')){
          $('.device-meter[main-device-id="'+ dataObj.did +'"]').html(wattCount + 'W');
        }
        
      };
      
      websocket.onerror = function(evt) { console.log('Event Error', evt.data); };
    }
    
    window.addEventListener("load", init, false);
<?php echo '</script'; ?>
><?php }
}
