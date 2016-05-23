
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

    {foreach $subDeviceData as $subDevice}
      <div class="col-sm-4 col-md-3 single-device-unit">
          <div class="thumbnail text-center">
            {if $subDevice['device_type'] == 1}
                <img class="device-icon-holder" src="src/images/ctrl-panel/bulb-icon.png" alt="...">
            {elseif $subDevice['device_type'] == 2}
                <img class="device-icon-holder" src="src/images/ctrl-panel/meter.png" alt="...">
            {else}
                <img class="device-icon-holder" src="src/images/ctrl-panel/meter.png" alt="...Unknown Device...">
            {/if}            
            <div class="caption">
              <h5>{$subDevice['device_name']}</h5>
              <p>{$subDevice['device_location']}</p>

              {if $subDevice['device_type'] == 1}
                <label class="switch">
                  {if $subDevice['state'] == 1}
                    <input type="checkbox" class="sub-device-switch" main-device-id="{$subDevice['main_device_id']}" sub-device-id="{$subDevice['sub_device_id']}" checked>
                  {else}
                    <input type="checkbox" class="sub-device-switch" main-device-id="{$subDevice['main_device_id']}" sub-device-id="{$subDevice['sub_device_id']}">                  
                  {/if}
                  <div class="slider round"></div>
                </label>
              {elseif $subDevice['device_type'] == 2}
                  <h3 class="device-meter" main-device-id="{$subDevice['main_device_id']}">0W</h3>
              {else}
                  <h3>Unknown Function</h3>
              {/if}  



              
            </div>
          </div>
      </div>
    {/foreach}

  </div><!-- /.row -->
  <div class="row"><br></div>

</div><!-- /.container -->

<script>
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
</script>