
<!-- MAIN TITLE -->
<div class="main-title">
  <div class="container">
    <h1 class="main-title__primary">Vehicle Info...</h1>
    <h3 class="main-title__secondary">Find and read about your vehicle's service logs.</h3>
  </div>
</div><!-- /.main-title -->

<!-- BREADCRUMBS -->
<div class="breadcrumbs">
  <div class="container">
    <span>
      <a class="home" href="index.php" title="Go to CargoPress." rel="v:url">Yashodha Motors</a>
    </span>
    <span>
      <span>Find Your Vehicle</span>
    </span>
  </div>
</div><!-- /.breadcrumbs -->

<div class="container">

  <div class="row">

    <div class="col-sm-8 col-sm-offset-2 margin-bottom-60">

      <p>
        Enter your vehicle number and last four digits of your chassie number. As an example emagine your vehicle number AAA-1234 and chassie number 345676789965. So you can enter vehicle number as AAA-1234 and chassie number as 9965, finally you can click on "Go To Vehicle".
      </p>

      <form method="post" action="helper/validate_vehicle.php" class="trackForm clearfix">
        <input type="text" class="text_holder" name="vehicleno" placeholder="Enter your vehicle number.... eg: AAA-1234" id="vehicleno">
        <input type="password" class="text_holder" name="chcode" placeholder="Enter your last 4 digits of your vhicle chassie number.... eg: xxxxxxxx5678" id="chassieno">
        <button type="submit" class="btn btn-info">Go To vehicle</button>
        {if $hasError eq 1}
          <div class="error-alert error-alert-danger">
            <strong>No Vehicle Found!</strong> No vehicle found for given information.
          </div>
        {/if}
      </form>

    </div><!-- /.col -->

  </div><!-- /.row -->

</div><!-- /.container -->
