<div class="container" role="main">
  <div class="row">
    <div class="col-md-5">
      <h3 class="widget-title">UPLOAD
        {if $imgType eq 'showcase'}
          SHOW CASE IMAGES
        {elseif $imgType eq 'doc'}
          DOCUMENT IMAGES
        {/if}
      </h3>
      <p>
    	    Please drag and drop or select files, which are wanted to upload.
      </p>
      {if $imgType eq 'showcase'}
        <input type="file" name="files[]" id="filer_input_showcase" multiple="multiple">
      {elseif $imgType eq 'doc'}
        <input type="file" name="files[]" id="filer_input_documents" multiple="multiple">
      {/if}

      <a class="btn btn-primary" href="vehicleinfo.php">Go Back</a>

    </div>
  </div>
  <div class="row margin-bottom-30"></div>
</div>
