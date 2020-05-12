<div class="wrap">
  <div class="postbox-container">
    <div class="postbox">
      <span>
        <h4 class='hndle'>REGISTER</h4>
      </span>
      <div id="container-register" class="alert alert-warning">
      <br>
        <form id="registerForm"> 
        <span>
          <h4>CHOOSE USERNAME AND PASSWORD</h4>
        </span>
        <div class="inside alert alert-success">
          <input type="hidden" id="idsetting" >
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="username">Username</label>
                  <input type="text" id="username" name="username" class="form-control" placeholder="Email or username">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">  
                <label for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">  
                <label for="repassword">Retype Password</label>
                  <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Retype Password">
                </div>
              </div>
            </div>
          </div>
          <span><h4>CONTACT INFORMATION</h4></span>
          <div class="inside alert alert-success alert alert-success">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">  
                <label for="firstname">First Name</label>
                  <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">  
                <label for="lastname">Last Name</label>
                  <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="street">Street address</label>
                  <textarea id="street" name="street" class="form-control" placeholder="Street Address"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">  
                <label for="apt">Suite Apt.</label>
                  <input type="text" id="apt" name="apt" class="form-control" placeholder="Suite Apt.">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">  
                <label for="city">City</label>
                  <input type="text" id="city" name="city" class="form-control" placeholder="City">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">  
                <label for="apt">State.</label>
                  <select id="state" name="state" class="form-control">
                    <option value="">Choose One</option>
<?php
                  foreach ($results_states as $key_state) {
?>
                    <option value="<?php echo $key_state->code; ?>"><?php echo $key_state->name; ?></option>
<?php      
                  }
?>
                  </select>  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">  
                <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" class="form-control" placeholder="Zip">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">  
                <label for="country">Country</label>
                  <select id="country" name="country" class="form-control">
                    <option value="">Choose One</option>
                    <option value="USA">United States</option>
                    <option value="CAN">Canada</option>
                   </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">  
                <label for="phone">Primary Phone</label>
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="Primary Phone">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">  
                <label for="mobile">Mobile Phone</label>
                  <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile Phone">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">  
                <label for="workphone">Work Phone</label>
                  <input type="text" id="workphone" name="workphone" class="form-control" placeholder="Work Phone">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">  
                <label for="email">Email</label>
                  <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">  
                <label for="confirm">Confirm Email</label>
                  <input type="text" id="confirm" name="confirm" class="form-control" placeholder="Confirm Email">
                </div>
              </div>
            </div>
          </div>
          <span><h4>BREEDING</h4></span>
          <div class="inside alert alert-success alert alert-success">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">  
                <label for="kennel">Kennel Name</label>
                  <input type="text" id="kennel" name="kennel" class="form-control" placeholder="Kennel Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">  
                <label for="url">URL</label>
                  <input type="url" id="url" name="url" class="form-control" placeholder="URL">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <span><h4>Breeding Practices</h4></span>
                <h6>
                <ol>
                  <li>How long have you been breeding?</li>
                  <li>Why do you breed? Tell us about yourself.</li>
                  <li>Do you microchip your puppies? If available upon request, what is the additional cost?</li>
                  <li>If you could tell a potential customer one thing about you and your puppies, what would it be?</li>
                </ol>
              </h6>
                <textarea name="breeding" id="breeding" placeholder="Breeding" class="form-control"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">  
                <label for="breed1">First Breed</label>
                  <select id="breed1" name="breed1" class="form-control">
                    <option value="">Choose One</option>
<?php
                  foreach ($results_breeds as $key_breed) {
?>
                    <option value="<?php echo $key_breed->name; ?>"><?php echo $key_breed->name; ?></option>
<?php      
                  }
?>
                  </select>  
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">  
                <label for="breed2">Second Breed</label>
                  <select id="breed2" name="breed2" class="form-control">
                    <option value="">Choose One</option>
<?php
                  foreach ($results_breeds as $key_breed) {
?>
                    <option value="<?php echo $key_breed->name; ?>"><?php echo $key_breed->name; ?></option>
<?php      
                  }
?>
                  </select>  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">  
                <label for="breed3">Third Breed</label>
                  <select id="breed3" name="breed3" class="form-control">
                    <option value="">Choose One</option>
<?php
                  foreach ($results_breeds as $key_breed) {
?>
                    <option value="<?php echo $key_breed->name; ?>"><?php echo $key_breed->name; ?></option>
<?php      
                  }
?>
                  </select>  
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">  
                <label for="breed4">Fourth Breed</label>
                  <select id="breed4" name="breed4" class="form-control">
                    <option value="">Choose One</option>
<?php
                  foreach ($results_breeds as $key_breed) {
?>
                    <option value="<?php echo $key_breed->name; ?>"><?php echo $key_breed->name; ?></option>
<?php      
                  }
?>
                  </select>  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">  
                <label for="breed5">Fifth Breed</label>
                  <select id="breed5" name="breed5" class="form-control">
                    <option value="">Choose One</option>
<?php
                  foreach ($results_breeds as $key_breed) {
?>
                    <option value="<?php echo $key_breed->name; ?>"><?php echo $key_breed->name; ?></option>
<?php      
                  }
?>
                  </select>  
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">  
                <label for="breed6">Sixth Breed</label>
                  <select id="breed6" name="breed6" class="form-control">
                    <option value="">Choose One</option>
<?php
                  foreach ($results_breeds as $key_breed) {
?>
                    <option value="<?php echo $key_breed->name; ?>"><?php echo $key_breed->name; ?></option>
<?php      
                  }
?>
                  </select>  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">  
               <h6>
                <span>Spay/Neuter Contract?</span><br><br>
                <input type="radio" name="contract" id="contracty" value="Yes">Yes<br>
                <input type="radio" name="contract" id="contractn" value="No">No<br><br>
                <span>Active USDA Dog Breeder?</span><br><br>
                <input type="radio" name="active" id="activey" value="Yes">Yes<br>
                <input type="radio" name="active" id="activen" value="No">No<br><br>
                <span>Do you have a State Dog Breeders License?</span><br><br>
                <input type="radio" name="license" id="licensey" value="Yes">Yes<br>
                <input type="radio" name="license" id="licensen" value="No">No<br><br>
               </h6>
             </div>    
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="vet_name">Vet's name</label>
                  <input type="text" id="vet_name" name="vet_name" class="form-control" placeholder="Vet's name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="vet_phone">Vet's phone #</label>
                  <input type="text" id="vet_phone" name="vet_phone" class="form-control" placeholder="Vet's phone #">
                </div>
              </div>
            </div>
          </div>
          <span><h4>TRAVEL INFORMATION</h4></span>
          <div class="inside alert alert-success alert alert-success">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="travel_info">What days can you ship puppies?</label>
                  <textarea id="travel_info" name="travel_info" class="form-control" placeholder="What days can you ship puppies?"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                  <h6>Are you able to ship to the following:<br>
                  <div class="row">
                  <div class="col-md-6"> 
                  <input type="checkbox" name="montreal" id="montreal"> Montreal, Canada
                  </div>
                  <div class="col-md-6">
                  <input type="checkbox" name="toronto" id="toronto"> Toronto, Canada
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">  
                  <input type="checkbox" name="vancouver" id="vancouver"> Vancouver, Canada
                  </div>
                  <div class="col-md-6">
                  <input type="checkbox" name="anchorage" id="anchorage"> Anchorage, Alaska US
                  </div>
                  </div>
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <span><h4>PAYMENT AND TERMS</h4></span>
          <div class="inside alert alert-success">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="howfound">How you found us*</label>
                  <select id="howfound" name="howfound" class="form-control">
                    <option value="">Choose One</option>
                    <option value="Search Engine">Search Engine</option>
                    <option value="Received an Email">Received an Email</option>
                    <option value="Word of Mouth">Word of Mouth</option>
                    <option value="Referred By">Referred By ...</option>
                    <option value="Received Phone Call">Received Phone Call</option>
                    <option value="AKC">AKC</option>
                    <option value="Other">Other</option>                      
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                  <label>How would you like to be paid?</label>
                  <select id="howpay" name="howpay" class="form-control">
                    <option value="">Choose One</option>
                    <option value="PayPal (Instant)">PayPal (Instant)</option>
                    <option value="Wire Transfer">Wire Transfer</option>                      
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="registration_code">Registration Code</label>
                  <input type="text" id="registration_code" name="registration_code" class="form-control" placeholder="Registration Code">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <h6>
                  By checking this box, you agree to our <a class="policy-link" href="" target="_blank">Breeder Membership Agreement</a>, <a class="policy-link" href="https://www.puppyspot.com/breeders/terms-of-use" target="_blank">Terms of Use</a>, and <a class="policy-link" href="" target="_blank">Privacy Policy</a><br />
                  <input id="term_agreement" name="term_agreement" value="1" type="checkbox" id="form_term_agreement" />
                </h6>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <button type="submit" name="submit" value="submit" class="button secondary is-larger btn-landing">Submit Account Details </button>
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
  </div>
</div>