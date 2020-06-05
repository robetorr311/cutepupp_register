<div class="wrap">
  <div class="postbox-container">
    <div class="postbox">
      <div id="container-product" class="alert alert-warning">
      <br>
        <form id="productForm"> 
        <span>
          <h1 class="entry-title" style="font-size:5em;">ADD PUPPY TO GALLERY</h1>
        </span>

        <div class="inside alert alert-success">
<h4>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                Puppy name 
                  <input type="text" id="puppy_name" name="puppy_name" class="form-control" placeholder="Puppy Name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                Description
                  <textarea id="desc" name="desc" class="form-control" placeholder="Description"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                Breed
                  <select id="category" name="category" class="form-control">
                    <option  value="">Select Breed</option>
                    <?php 
                      foreach($results_breeds as $key_breed){
                        echo "<option value='".$key_breed->name."'>".$key_breed->name."</option>";
                      }
                    ?>                    
                  </select>
                </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                Gender
                  <select id="gender" name="gender" class="form-control">
                    <option value="">Select gender</option>
                    <option  value="Male">Male</option>
                    <option  value="Female">Female</option>
                  </select>
                </div>
              </div>
            </div>          
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                Price
                  <input type="text" id="price" name="price" class="form-control" placeholder="Price">
                </div>
              </div>
            </div>
<h4>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="imageProduct">Puppy Image</label>
                  <div id="fileupload3">Image</div>
                  <input type="hidden" id="picture">
                  <input type="hidden" id="formid"  value="<?php echo $formid; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div id="list_uploaded">
                </div>
              </div>              
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                  <h6>Are you able to ship to the following:<br>
                  <div class="row">
                  <div class="col-md-6"> 
                  <input type="checkbox" name="health" id="health"> Healthcare certificate:
                  </div>
                  <div class="col-md-6">
                  <input type="checkbox" name="iso" id="iso"> ISO microchip
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">  
                  <input type="checkbox" name="shipping" id="shipping"> Shipping Crate
                  </div>
                  <div class="col-md-6">
                  <input type="checkbox" name="guarantee" id="guarantee"> 10 year Guarantee
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">  
                  <input type="checkbox" name="pedigree" id="pedigree"> Pedigree
                  </div>
                  </div>                  
                  </h6>
                </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-md-12">
                <div id="loading"><img src="<?php echo plugin_dir_url( __FILE__ ) . "assets/"; ?>img/loading-png-gif.gif" width="30%" height="30%"><span style="margin-left: 5px">Uploading images to gallery... please wait...</span></div> </div>
                <span style="padding-left:30%; padding-right:30%;"><button type="submit" id="button_submit" name="submit" value="submit" class="button secondary is-larger btn-landing">Submit Details </button></span>             
              </div>                                    
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
jQuery(document).ready( function($) {
         jQuery('#loading').hide();
        // validate signup form on keyup and submit     
        jQuery("#productForm").validate({
          ignore: [],
          rules: {
                 puppy_name:"required",
                 price:{ required: true,
                         number: true
                       },
                 category: "required",
                 gender: "required",
                 picture:"required",
                 desc: "required",
                 image:"required",
          },
          picture: "required",
          messages: {
             puppy_name: "Please enter puppy name",
             picture: "Please select an image of puppy",
             desc: "please enter description",
             category: "Please select breed of puppy",
             gender: "Please select gender of puppy",
             price: {
              required: "Please enter price",
              number: "Insert a number",
             }
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            jQuery('#loading').show();
            jQuery("#button_submit").hide(); 
            var params=jQuery("#productForm").serialize();
            var formid=jQuery("#formid").val();
            var data= {
              action:'addproduct',
              formid: formid,
              params:params
            };
            jQuery.post("https://cutepuppytime.com/wp-admin/admin-ajax.php", data, function(response) {
                jQuery('#loading').hide();
                jQuery("#container-product").html((response));
                jQuery('html, body').animate({scrollTop: 0}, 0);
            });            
          }
        });
        var formid=jQuery('#formid').val();
        jQuery("#fileupload3").uploadFile({
          url: "https://cutepuppytime.com/wp-admin/admin-ajax.php",
          formData: { action: 'uploadfile' },
          fileName:"myfile",
          allowedTypes: "jpg,png,gif",
          maxFileSize: "358562",
          allowDuplicates: false,
          duplicateStrict: true,
          showFileCounter: false,
          maxFileCount:4,
          showStatusAfterSuccess: false,
          showProgress: false,  
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
        jQuery.post("https://cutepuppytime.com/wp-admin/admin-ajax.php", data, function(response) {
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
    jQuery.post("https://cutepuppytime.com/wp-admin/admin-ajax.php", data, function(response) {
      jQuery("#list_uploaded").html((response));
    });
    }
    return false;
}
</script>