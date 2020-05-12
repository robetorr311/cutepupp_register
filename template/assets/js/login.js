//https://wordpress.stackexchange.com/questions/129955/using-standard-backend-elements-in-plugin
jQuery(document).ready( function($) {
        // validate signup form on keyup and submit
        jQuery("#loginForm").validate({
          rules: {
                 log:"required",
                 pwd: {
                  required: true,
                  minlength: 8
                 },
          },
          messages: {
             log: "Please enter login",
             pwd: {
              required: "Please provide a password",
              minlength: "Your password must be at least 8 characters long",
              equalTo: "Please enter the same password as above"
             },
          },
          errorClass: "error_validate",
          inputContainer: "form-group",        
        });
});
