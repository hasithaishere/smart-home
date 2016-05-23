
<!-- MAIN TITLE -->
<div class="main-title">
  <div class="container">
    <h1 class="main-title__primary">Login...</h1>
    <h3 class="main-title__secondary">Login area for administrators and Device Users.</h3>
  </div>
</div><!-- /.main-title -->

<!-- BREADCRUMBS -->
<div class="breadcrumbs">
  <div class="container">
    <span>
      <a class="home" href="index.php" title="Go to CargoPress." rel="v:url">Smart Home</a>
    </span>
    <span>
      <span>Login Area</span>
    </span>
  </div>
</div><!-- /.breadcrumbs -->

<div class="container">

  <div class="row">

    <div class="col-sm-8 col-sm-offset-2 margin-bottom-60">

      <p>
        Enter your username (Which you used for register in system) and password for login to admin area / device control web console.
      </p>

      <form method="post" action="helper/validate_user.php" class="trackForm clearfix">
        <input type="text" class="text_holder" name="username" placeholder="Enter your email address as username" id="username">
        <input type="password" class="text_holder" name="password" placeholder="Enter admin password" id="password">
        <button type="submit" class="btn btn-info">Login</button>
        {if $hasError eq 1}
          <div class="error-alert error-alert-danger">
            <strong>Login Failed!</strong> Invalid username or pasword, please check again and re-enter.
          </div>
        {/if}
      </form>


    </div><!-- /.col -->

  </div><!-- /.row -->

</div><!-- /.container -->
