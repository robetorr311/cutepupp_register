//https://wordpress.stackexchange.com/questions/129955/using-standard-backend-elements-in-plugin
jQuery(document).ready( function($) {
        // validate signup form on keyup and submit     
        jQuery("#editproductForm").validate({
          ignore: [],
          rules: {
                 puppy_name:"required",
                 price:{ required: true,
                         number: true
                       },
                 desc: "required",
                 image:"required",
          },
          messages: {
             puppy_name: "Please enter puppy name",
             desc: "please enter description",
             price: {
              required: "Please enter price",
              number: "Insert a number",
             }
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var params=jQuery("#editproductForm").serialize();
            var idproduct=jQuery("#id_product").val();
            var picture=jQuery("#picture").val();
            var data= {
              action:'updateproduct',
              idproduct: idproduct,
              formid: formid,
              params:params
            };
              jQuery.post("http://localhost/cutepupp/wp-admin/admin-ajax.php", data, function(response) {
              jQuery("#container-product").html((response));
              jQuery('html, body').animate({scrollTop: 0}, 0);
            });            
          }
        });
        var picture=jQuery('#picture').val(); 
        jQuery("#fileupload2").uploadFile({          
          url: "http://localhost/cutepupp/wp-admin/admin-ajax.php",
          formData: { action: 'uploadfile', image: picture },
          fileName:"myfile",
          allowedTypes: "jpg,png,gif",
          maxFileSize: "97152",
          onSuccess:function(data)
           {
             jQuery("#picture").val(data); 
             save_image(formid); 
           }
         });
         
}); 
function deleteproduct(id){
    if (confirm("Are you sure?")) {
    var data= {
        action:'deleteproduct',
        id: id
    };
    jQuery.post("https://cutepuppytime.com/wp-admin/admin-ajax.php", data, function(response) {
      location.reload();
    });
    }
    return false;
}
