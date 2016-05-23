
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

      <input type="text" class="text_holder" name="device_id" data-toggle="tooltip" title="Enter device uniq id" placeholder="Enter device uniq id" id="device_id" value="{$deviceData['device_id']}">

        <input type="text" class="text_holder" name="device_name" data-toggle="tooltip" title="Enter device name" placeholder="Enter device name" id="device_name" value="{$deviceData['device_name']}">

        <input type="text" class="text_holder" name="location" data-toggle="tooltip" title="Enter device location" placeholder="Enter device location" id="location" value="{$deviceData['location']}">
        <input type="text" class="text_holder" name="no_of_subdevices" data-toggle="tooltip" title="Enter no of sub devices / points" placeholder="Enter no of sub devices / points" id="no_of_subdevices" value="{$deviceData['no_of_subdevices']}">
        <input type="text" class="text_holder" name="no_of_readers" data-toggle="tooltip" title="Enter no of energy readers" placeholder="Enter no of energy readers" id="no_of_readers" value="{$deviceData['no_of_readers']}">

        <input type="hidden" name="user_id" value="{$org_user_id}">

        <button type="submit" class="btn btn-info">Save</button>
      </form>


    </div><!-- /.col -->

  </div><!-- /.row -->

</div><!-- /.container -->
