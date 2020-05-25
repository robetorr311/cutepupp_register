jQuery(document).ready( function($) {
        // validate signup form on keyup and submit
        jQuery("#setpasswordForm").validate({
          rules: {
                 password: {
                  required: true,
                  minlength: 8
                 }
          },
          messages: {
             email: {
              required: "Please provide a password",
              minlength: "Your password must be at least 8 characters long",
             }
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var email=jQuery("#email").val();
            var password=jQuery("#password").val();            
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
          

        });
});
