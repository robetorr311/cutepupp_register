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
                <button type="button" class="button secondary is-larger btn-landing" onclick="change_pwd();">Change</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
<script type="text/javascript">
function change_pwd(){
    var email= jQuery('#email').val();
    var password=jQuery('#password').val();
    var data= {
        action:'setnewpwd',
        email: email,
        password: password
    };
    jQuery.post("https://cutepuppytime.com/wp-admin/admin-ajax.php", data, function(response) {
              jQuery("#setpassword").html((response));
              jQuery('html, body').animate({scrollTop: 0}, 0);
    });

}
</script>