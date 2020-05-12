<div class="wrap">
  <div class="postbox-container">
    <div class="postbox">
      <div id="container-product" class="alert alert-warning">
      <br>
        <form id="loginForm" action="<?php echo site_url( '/wp-login.php' ); ?>" method="POST"> 
        <span>
          <h4>Login</h4>
        </span>
        <input type="hidden" value="<?php echo site_url(); ?>" name="redirect_to">
        <div class="inside alert alert-success">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="log">User Login </label>
                  <input type="text" id="log" name="log" class="form-control" placeholder="User Login">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="pwd">User password </label>
                  <input type="password" id="pwd" name="pwd" class="form-control" placeholder="User password">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <button type="submit" class="button secondary is-larger btn-landing">Login</button>
                </div>
              </div>
            </div>
            <?php if($login=='failed'){ ?> 
                <div class="alert alert-danger alert-dismissible">
                  <strong>Error!</strong> Wrong login or password!.
                </div>
            <?php } ?>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <a href="<?php echo get_site_url().'/recover-password'; ?>" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>  
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <a href="<?php echo get_site_url().'/register-in-cutepuppytime/'; ?>" class="text-muted">Create an account</a>
                </div>
              </div>              
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>