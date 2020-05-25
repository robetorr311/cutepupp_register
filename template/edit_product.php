<div class="wrap">
  <div class="postbox-container">
    <div class="postbox">
      <div id="container-product" class="alert alert-warning">
      <br>
        <form id="editproductForm"> 
        <span>
          <h4>EDIT PUPPY VALUES</h4>
        </span>
        <div class="inside alert alert-success">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="puppy_name">Puppy name </label>
                  <input type="hidden" id="id_product" name="id_product" value="<?php echo $id_product; ?>">
                  <input type="text" id="puppy_name" name="puppy_name" class="form-control" placeholder="Puppy Name" value="<?php echo $post_name; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="desc">Description</label>
                  <textarea id="desc" name="desc" class="form-control" placeholder="Description" ><?php echo $post_content; ?></textarea>
                </div>
              </div>
            </div>            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="price">Price</label>
                  <input type="text" id="price" name="price" class="form-control" placeholder="Price" value="<?php echo $post_price; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="imageProduct">Puppy Image</label>
                  <div id="fileupload2">Image</div>
                  <input type="hidden" id="picture">
                  <input type="hidden" id="formid"  value="<?php echo $formid; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div id="list_uploaded">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered ">
                      <thead>
                        <tr><th>Uploaded Image</th><th>Delete</th></tr>
                      </thead>
                      <tboby>
                      <?php
                        foreach ($imagesresult as $key_image) {
                          echo "<tr><td>$key_image->name</td><td><button type='button' class='button secondary is-larger btn-landing' onclick='deleteimage($key_image->id)'</td><i class='fa fa-trash'></i></button>";
                        }
                      ?>
                      </tboby>
                    </table>
                   </div>                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                  <h6>Are you able to ship to the following:<br>
                  <div class="row">
                  <div class="col-md-6">
                  <?php if(!$health){
                     echo "<input type='checkbox' name='health' id='health' > Healthcare certificate";
                  } 
                  else{
                     echo "<input type='checkbox' name='health' id='health' checked> Healthcare certificate";
                  }
                  ?>
                  
                  </div>
                  <div class="col-md-6">
                  <?php if(!$iso){
                     echo "<input type='checkbox' name='iso' id='iso' > ISO microchip";
                  } 
                  else{
                     echo "<input type='checkbox' name='iso' id='iso' checked> ISO microchip";
                  }
                  ?>                    
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6"> 
                  <?php if(!$shipping){
                     echo "<input type='checkbox' name='shipping' id='shipping' > Shipping Crate";
                  } 
                  else{
                     echo "<input type='checkbox' name='shipping' id='shipping' checked> Shipping Crate";
                  }
                  ?>                    
                  </div>
                  <div class="col-md-6">
                  <?php if(!$guarantee){
                     echo "<input type='checkbox' name='guarantee' id='guarantee' > 10 year Guarantee";
                  } 
                  else{
                     echo "<input type='checkbox' name='guarantee' id='guarantee' checked> 10 year Guarantee";
                  }
                  ?>                     
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">  
                  <input type="checkbox" name="pedigree" id="pedigree" checked> FCI Pedigree
                  </div>
                  </div>                  
                  </h6>
                </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-md-12">
                <button type="submit" name="submit" value="submit" class="button secondary is-larger btn-landing">Submit Details </button>                
              </div>
            </div>                                    
          </div>
        </form>
      </div>
    </div>
  </div>
</div>