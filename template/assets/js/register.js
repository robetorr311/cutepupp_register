//https://wordpress.stackexchange.com/questions/129955/using-standard-backend-elements-in-plugin
jQuery(document).ready( function($) {
        // validate signup form on keyup and submit
        jQuery("#registerForm").validate({
          rules: {
                 username:"required",
                 password: {
                  required: true,
                  minlength: 8
                 },
                 confirm_password: {
                   required: true,
                   minlength: 8,
                   equalTo: "#password"
                 },
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
            var params=jQuery("#registerForm").serialize();
            var data= {
              action:'saveregister',
              params: params
            };
            jQuery.post(ajaxurl, data, function(response) {
              jQuery("#container-register").html((response));
            });            
          }
          

        });
});
function getregister(id){
    if (confirm("Are you sure?")) {
    var data= {
        action:'getregister',
        id: id
    };
    jQuery.post(ajaxurl, data, function(response) {
      location.reload();
    });
    }
    return false;
}
function deleteregister(id){
    if (confirm("Are you sure?")) {
    var data= {
        action:'deleteregister',
        id: id
    };
    jQuery.post(ajaxurl, data, function(response) {
      location.reload();
    });
    }
    return false;
}
function activeuser(id){
    if (confirm("Are you sure?")) {
    var data= {
        action:'activeuser',
        id: id
    };
    jQuery.post(ajaxurl, data, function(response) {
     alert(response);
     location.reload();
    });
    }
    return false;
}
