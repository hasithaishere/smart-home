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
            {foreach $userData as $user}
                <tr>
                    <th>{$user['name']}</th>
                    <th>{$user['username']}</th>
                    <th>{$user['nic']}</th>
                    <th>{$user['address']}</th>
                    <th>{$user['tel1']}</th>
                    <!--<th>{$user['tel2']}</th>-->
                    <th>
                      {if $user['user_type'] == 1}
                          Administrator
                      {elseif $user['user_type'] == 2}
                          General User
                      {else}
                          Unknown User
                      {/if}
                    </th>
                    <th>
                      {if $user['is_enabled'] == 0}
                          <span class="label label-warning">Disabled</span>
                      {elseif $user['is_enabled'] == 1}
                          <span class="label label-success">Enabled</span>
                      {/if}
                    </th>
                    <th>
                      {if $user['is_enabled'] == 0}
                          <a class="btn btn-success ctrl-btn" href="helper/en_dis_user.php?userid={$user['id']}&state=1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                      {elseif $user['is_enabled'] == 1}
                          <a class="btn btn-warning ctrl-btn" href="helper/en_dis_user.php?userid={$user['id']}&state=0"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                      {/if}                      
                      
                      <a class="btn btn-danger ctrl-btn" href="helper/delete_user.php?userid={$user['id']}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      <a class="btn btn-info ctrl-btn" href="update-user.php?userid={$user['id']}"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                      {if $user['user_type'] == 2}
                        <a class="btn btn-success ctrl-btn" href="manage_device.php?userid={$user['id']}"><i class="fa fa-mobile" aria-hidden="true"></i></a>
                      {/if}
                      
                    </th>
                </tr>
            {/foreach}
        </tbody>
    </table>
  </div>
  <hr>
  <p> Please click on following button and add new user for system.</p>
  <a target="_self" href="add-user.php" class="btn btn-info" id="button_requestQuote">Add New User</a>
  <br>
  <br>
</div>
