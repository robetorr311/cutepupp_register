<div class="wrap">
  <div class="postbox-container">
    <div class="postbox">
      <div id="setpassword" class="alert alert-warning">
      <br>
        <form id="setpasswordForm"> 
        <span>
          <h4>Set new password</h4>
        </span>
        <div class="inside alert alert-success">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="log">Please enter your new password </label>
                 <input type="hidden" id="email" name="email" value="<?php echo $email; ?>">
                  <input type="password" id="password" name="password" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <button type="submit" class="button secondary is-larger btn-landing">Change</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>