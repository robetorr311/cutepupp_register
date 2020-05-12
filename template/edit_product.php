<div class="wrap">
  <div class="postbox-container">
    <div class="postbox">
      <div id="container-product" class="alert alert-warning">
      <br>
        <form id="editproductForm"> 
        <span>
          <h4>ADD PUPPY TO GALLERY</h4>
        </span>
        <div class="inside alert alert-success">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="puppy_name">Puppy name </label>
                  <input type="text" id="id_product" name="id_product" value="<?php echo $id; ?>">
                  <input type="text" id="puppy_name" name="puppy_name" class="form-control" placeholder="Puppy Name" value="<?php echo $puppy_name; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="short_desc">Short Description</label>
                  <input type="text" id="short_desc" name="short_desc" class="form-control" placeholder="Short Description"  value="<?php echo $short_desc; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="desc">Description</label>
                  <textarea id="desc" name="desc" class="form-control" placeholder="Description" ><?php echo $desc; ?></textarea>
                </div>
              </div>
            </div>            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="price">Price</label>
                  <input type="text" id="price" name="price" class="form-control" placeholder="Price" value="<?php echo $price; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="imageProduct">Puppy Image</label>
                  <div id="fileupload">Image</div>
                  <input type="hidden" id="picture">
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
                  <input type="checkbox" name="pedigree" id="pedigree"> FCI Pedigree
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