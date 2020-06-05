    <div class="container">
      <div id="container-product" class="alert alert-warning">
      <br>
        <form id="contactForm"> 
        <span>
          <h4>Contact Form</h4>
        </span>
        <div class="inside alert alert-success">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                Name
                  <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                Email
                  <input type="email" id="email" name="email" class="form-control" placeholder="Your email">
                </div>
              </div>
            </div>            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                Message
                  <textarea id="message" name="message" class="form-control" placeholder="Your Message"></textarea>
                </div>
              </div>
            </div>  
            <div class="row">
              <div class="col-md-12"><span style="padding-left:40%; padding-rigth:40%;">
                <button type="submit" id="button_submit" name="submit" value="submit" class="button secondary is-larger btn-landing">Send</button></span>             
              </div>
            </div>                                    
          </div>
        </form>
        <div id="success"></div>
      </div>
    </div>
    <script type="text/javascript">
     jQuery(document).ready( function($) {
        // validate signup form on keyup and submit  
        jQuery("#contactForm").validate({
          ignore: [],
          rules: {
                 name:"required",
                 message:"required",
                 email: {
                  required: true,
                  email: true,
                 },

          },
          messages: {
             name: "Please enter your name",
             message: "Please enter your message",
             email: "Please enter a valid email",
             },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var name=jQuery("#name").val();
            var message=jQuery("#message").val();
            var email=jQuery("#email").val();
            var data= {
              action:'sendcontact',
              name: name,
              email: email,
              message:message
            };
            //https://cutepuppytime.com/wp-admin/admin-ajax.php
              jQuery.post("https://cutepuppytime.com/wp-admin/admin-ajax.php", data, function(response) {
                jQuery("#success").html((response));
            });            
          }
        });
      });
</script>