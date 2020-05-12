//https://wordpress.stackexchange.com/questions/129955/using-standard-backend-elements-in-plugin
jQuery(document).ready( function($) {
        // validate signup form on keyup and submit
        jQuery("#loginForm").validate({
          rules: {
                 email:"required",
          },
          messages: {
             email: "Please enter email",
          },
          errorClass: "error_validate",
          inputContainer: "form-group",        
        });
});
