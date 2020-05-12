//https://wordpress.stackexchange.com/questions/129955/using-standard-backend-elements-in-plugin
jQuery(document).ready( function($) {
        // validate signup form on keyup and submit     
        jQuery("#productForm").validate({
          ignore: [],
          rules: {
                 puppy_name:"required",
                 price:{ required: true,
                         number: true
                       },
                 picture:"required",
                 desc: "required",
                 short_desc: "required",
                 image:"required",
          },
          picture: "required",
          messages: {
             puppy_name: "Please enter puppy name",
             picture: "Please select an image of puppy",
             short_desc: "Please enter short description",
             desc: "please enter description",
             price: {
              required: "Please enter price",
              number: "Insert a number",
             }
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var params=jQuery("#productForm").serialize();
            var picture=jQuery("#picture").val();
            var data= {
              action:'addproduct',
              picture: picture,
              params:params
            };
            jQuery.post("https://cutepuppytime.com/wp-admin/admin-ajax.php", data, function(response) {
              jQuery("#container-product").html((response));
            });            
          }
        });
        jQuery("#fileupload").uploadFile({
          url: "https://cutepuppytime.com/wp-admin/admin-ajax.php",
          formData: { action: 'uploadfile' },
          fileName:"myfile",
          allowedTypes: "jpg,png,gif",
          maxFileSize: "2097152",
          onSuccess:function(data)
           {
              $('#picture').val(data); 
           }
         });
         
}); 

