<div class="container" role="main">

<div class="row">
  <h3 class="widget-title">VEHICLE IMAGE GALLERY</h3>
</div>

<div class="row">
  {if count($allImages) gt 0}
    <div class="img-block showcase-img-block">
      {foreach from=$allImages key=index item=image}
        <figure class="zoomify-img-holder" id="showcase-img-{$index}">

            <img class="vehicle-img-holder zoomify-img" alt="placeholder" src="{$image}">
          {if $userType eq 1}
            <a href="#" class="delete-img" img-path="{$image}" img-index="showcase-img-{$index}" img-type="showcase-img"><i class="fa fa-trash"></i></a>
          {/if}
        </figure>
      {/foreach}
    </div>
  {elseif count($allImages) eq 0}
    <p>
       No vehicle's images uploaded.
    </p>
  {/if}

</div>
{if $userType eq 1}
  <div class="upload-btn-holder">
    <a class="btn btn-primary" href="uploadimages.php?type=showcase">Upload Images</a>
  </div>
{/if}

<div class="row">
  <h3 class="widget-title">DOCUMENTS</h3>
</div>
<div class="row margin-bottom-30">
  {if count($allDocuments) gt 0}
    <div class="img-block doc-img-block">
      {foreach from=$allDocuments key=index item=image}
      <figure class="zoomify-img-holder"  id="doc-img-{$index}">

          <img class="vehicle-img-holder zoomify-img" alt="placeholder" src="{$image}">
        {if $userType eq 1}
        <a href="#" class="delete-img" img-path="{$image}" img-index="doc-img-{$index}" img-type="doc-img"><i class="fa fa-trash"></i></a>
        {/if}
      </figure>
      {/foreach}
    </div>
  {elseif count($allDocuments) eq 0}
    <p>
       No documents uploaded.
    </p>
  {/if}
</div>
{if $userType eq 1}
  <div class="upload-btn-holder">
    <a class="btn btn-primary" href="uploadimages.php?type=doc">Upload Images</a>
  </div>
{/if}

<div class="row">
  <h3 class="widget-title">SERVICE RECORDS</h3>
  <p>
	    You can search/filter all available service records in your vehicle using following table.
  </p>

  <div class=" row vehicle-data-holder">
    <div class="col-md-3">
      <p><strong> Owner : </strong> {$owner}</p>
    </div>
    <div class="col-md-3">
      <p><strong> Vehicle No : </strong> {$vehicleNo}</p>
    </div>
    <div class="col-md-3">
      <p><strong> Model No : </strong> {$modelNo}</p>
    </div>
    <div class="col-md-3">
      <p><strong> Chassie No : </strong> {$chassieNo}</p>
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
            {foreach $vehicleData as $vehicle}
                <tr>
                    <th>{$vehicle['billno']}</th>
                    <th>{$vehicle['billedtime']}</th>
                    <th>{$vehicle['kmcount']}</th>
                    <th>- {$vehicle['items']|replace:',':'<br> - '}</th>
                    <th>{$vehicle['description']}</th>
                </tr>
            {/foreach}
        </tbody>
    </table>
  </div>
</div>
