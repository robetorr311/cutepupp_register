//https://wordpress.stackexchange.com/questions/129955/using-standard-backend-elements-in-plugin
jQuery(document).ready( function($) {
        // validate signup form on keyup and submit
        jQuery("#update_registration").hide();
        jQuery("#edit_registration").show();
        jQuery("#view_registerForm").validate({
          rules: {
                 username:"required",
                 firstname:"required",
                 lastname:"required",
                 street:"required",
                 apt:"required",
                 city:"required",
                 state:"required",
                 zip:"required",
                 country:"required",
                 phone:"required",
                 mobile:"required",
                 workphone:"required",
                 email: {
                  required: true,
                  email: true,
                 },
                 confirm_email: {
                  required: true,
                  email: true,
                  equalTo: "#email"
                 },
                 howpay:"required",
                 breeding:"required",
                 breed1:"required",
                 travel_info:"required",
                 agree: "required"
          },
          messages: {
             username: "Please enter username",
             password: {
              required: "Please provide a password",
              minlength: "Your password must be at least 8 characters long",
              equalTo: "Please enter the same password as above"
             },
            confirm_password: {
              required: "Please provide a password",
              minlength: "Your password must be at least 8 characters long",
              equalTo: "Please enter the same password as above"
             },
             firstname: "Please enter firstname",
             lastname: "Please enter lastname",
             street: "Please enter street",
             apt: "Please enter apt",
             city: "Please enter city",
             state: "Please choose an state",
             zip: "Please enter zip",
             country: "Please choose a country",
             phone: "Please enter phone",
             mobile: "Please enter mobile",
             workphone: "Please enter workphone",
             email: {
              required: "Please enter a valid email address",
              email: "Please enter a valid email address",
              equalTo: "Please enter the same email as above",
             },
             confirm_email: {
                  required: "Please enter a valid email address",
                  email: "Please enter a valid email address",
                  equalTo: "Please enter the same email as above",
               },
             howpay: "Please choose how pay",
             breeding: "Please enter breeding",
             breed1: "Please choose at least one breed",
             travel_info: "Please enter travel_info",
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var id=jQuery("#idregister").val();
            var params=jQuery("#view_registerForm").serialize();
            var data= {
              action:'updateregister',
              id: id,
              params: params
            };
            jQuery.post(ajaxurl, data, function(response) {
              jQuery("#container-register").html((response));
            });            
          }
          

        });
});
function edit_record(){
   jQuery("#username").prop('disabled',false);
   jQuery("#password").prop('disabled',false);
   jQuery("#confirm_password").prop('disabled',false);
   jQuery("#firstname").prop('disabled',false);
   jQuery("#lastname").prop('disabled',false);
   jQuery("#street").prop('disabled',false);
   jQuery("#apt").prop('disabled',false);
   jQuery("#city").prop('disabled',false);
   jQuery("#state").prop('disabled',false);
   jQuery("#zip").prop('disabled',false);
   jQuery("#country").prop('disabled',false);
   jQuery("#phone").prop('disabled',false);
   jQuery("#mobile").prop('disabled',false);
   jQuery("#workphone").prop('disabled',false);
   jQuery("#email").prop('disabled',false);
   jQuery("#confirm").prop('disabled',false);
   jQuery("#howfound").prop('disabled',false);
   jQuery("#howpay").prop('disabled',false);
   jQuery("#registration_code").prop('disabled',false);
   jQuery("#kennel").prop('disabled',false);
   jQuery("#url").prop('disabled',false);
   jQuery("#breeding").prop('disabled',false);
   jQuery("#breed1").prop('disabled',false);
   jQuery("#breed2").prop('disabled',false);
   jQuery("#breed3").prop('disabled',false);
   jQuery("#breed4").prop('disabled',false);
   jQuery("#breed5").prop('disabled',false);
   jQuery("#breed6").prop('disabled',false);
   jQuery("#contract").prop('disabled',false);
   jQuery("#active").prop('disabled',false);
   jQuery("#license").prop('disabled',false);
   jQuery("#vet_name").prop('disabled',false);
   jQuery("#vet_phone").prop('disabled',false);
   jQuery("#travel_info").prop('disabled',false);
   jQuery("#montreal").prop('disabled',false);
   jQuery("#toronto").prop('disabled',false);
   jQuery("#vancouver").prop('disabled',false);
   jQuery("#anchorage").prop('disabled',false);
   jQuery("#update_registration").show();
   jQuery("#edit_registration").hide();
}
