<div class="wrap">
  <div class="postbox-container">
    <div class="postbox">
      <div id="container-product" class="alert alert-warning">
      <br>
        <form id="loginForm" action="<?php echo site_url( '/wp-login.php' ); ?>" method="POST"> 
        <h1>
          <span class="entry-title" style="font-size:5em;">
           Log in
          </span>
        </h1>
        <input type="hidden" value="<?php echo site_url(); ?>" name="redirect_to">
        <div class="inside alert alert-success">
            <h4><div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                User Login
                  <input type="text" id="log" name="log" class="form-control" placeholder="User Login">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                User password
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
                  <a href="<?php echo get_site_url().'/register-in-cutepuppytime/'; ?>" class="text-muted"><i class="fa fa-user"></i> Create an account</a>
                </div>
              </div>              
              </div>
            </div>
            </h4>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>