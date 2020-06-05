      <div id="sendemail" class="alert alert-warning">
      <br>
        <form id="changepasswordForm"> 
        <span>
          <h4>Change password</h4>
        </span>
        <div class="inside alert alert-success">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="log">Please enter your email </label>
                  <input type="text" id="email" name="email" class="form-control" placeholder="User email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <button type="button" class="button secondary is-larger btn-landing" onclick="send_email();">Send</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
<script type="text/javascript">
function send_email(){
    var email= jQuery('#email').val();
    var data= {
        action:'sendemailpwd',
        email: email
    };
    jQuery.post("https://cutepuppytime.com/wp-admin/admin-ajax.php", data, function(response) {
              jQuery("#sendemail").html((response));
              jQuery('html, body').animate({scrollTop: 0}, 0);
    });

}
</script>
