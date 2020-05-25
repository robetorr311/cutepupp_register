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
                 desc: "required",
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
            var params=jQuery("#productForm").serialize();
            var formid=jQuery("#formid").val();
            var data= {
              action:'addproduct',
              formid: formid,
              params:params
            };
            jQuery.post("http://localhost/cutepupp/wp-admin/admin-ajax.php", data, function(response) {
              jQuery("#container-product").html((response));
              jQuery('html, body').animate({scrollTop: 0}, 0);
            });            
          }
        });
        var formid=jQuery('#formid').val();
        jQuery("#fileupload").uploadFile({
          url: "http://localhost/cutepupp/wp-admin/admin-ajax.php",
          formData: { action: 'uploadfile' },
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

function save_image(formid){
    var picture=jQuery("#picture").val();
    var data= {
        action:'uploadlist',
        picture: picture,
        formid: formid };
        jQuery.post("http://localhost/cutepupp/wp-admin/admin-ajax.php", data, function(response) {
        jQuery("#list_uploaded").html((response));
    });
}
function deleteimage(id){
    var formid=jQuery('#formid').val();
    if (confirm("Are you sure?")) {
    var data= {
        action:'deleteimage',
        id: id,
        formid:formid
    };
    jQuery.post("http://localhost/cutepupp/wp-admin/admin-ajax.php", data, function(response) {
      jQuery("#list_uploaded").html((response));
    });
    }
    return false;
}