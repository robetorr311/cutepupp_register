<div class="wrap">
  <div class="postbox-container">
   <center><h1 class="entry-title">View Register</h1></center>
      <div id="container-register" class="alert alert-warning">
      <br>
        <form id="view_registerForm"> 
        <span>
          <h4>CHOOSE USERNAME AND PASSWORD</h4>
        </span>
        <div class="inside alert alert-success">
          <input type="hidden" name="idregister" id="idregister" value="<?php echo $id; ?>">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="username">Username</label>
                  <input type="text" id="username" name="username" value="<?php echo $username; ?>" class="form-control" disabled placeholder="Email or username">
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
                  <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>" class="form-control" disabled placeholder="First Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">  
                <label for="lastname">Last Name</label>
                  <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>" class="form-control" disabled placeholder="Last Name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="street">Street address</label>
                  <textarea id="street" name="street" class="form-control" disabled placeholder="Street Address"><?php echo $street; ?></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">  
                <label for="apt">Suite Apt.</label>
                  <input type="text" id="apt" name="apt" value="<?php echo $apt; ?>" class="form-control" disabled placeholder="Suite Apt.">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">  
                <label for="city">City</label>
                  <input type="text" id="city" name="city" value="<?php echo $city; ?>" class="form-control" disabled placeholder="City">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">  
                <label for="apt">State.</label>
                  <select id="state" name="state" class="form-control" disabled>
                    <option selected value="<?php echo $code; ?>"><?php echo $state; ?></option>
<option value="Alabama">Alabama</option>
<option value="Arizona">Arizona</option>
<option value="Arkansas">Arkansas</option>
<option value="California">California</option>
<option value="Colorado">Colorado</option>
<option value="Connecticut">Connecticut</option>
<option value="Delaware">Delaware</option>
<option value="Florida">Florida</option>
<option value="Georgia">Georgia</option>
<option value="Hawaii">Hawaii</option>
<option value="Idaho">Idaho</option>
<option value="Illinois">Illinois</option>
<option value="Indiana">Indiana</option>
<option value="Iowa">Iowa</option>
<option value="Kansas">Kansas</option>
<option value="Kentucky">Kentucky</option>
<option value="Luisiana">Luisiana</option>
<option value="Maine">Maine</option>
<option value="Maryland">Maryland</option>
<option value="Massachusetts">Massachusetts</option>
<option value="Michigan">Michigan</option>
<option value="Minnesota">Minnesota</option>
<option value="Mississippi">Mississippi</option>
<option value="Missouri">Missouri</option>
<option value="Montana">Montana</option>
<option value="Nebraska">Nebraska</option>
<option value="Nevada">Nevada</option>
<option value="New Jersey">New Jersey</option>
<option value="New York">New York</option>
<option value="New Hampshire">New Hampshire</option>
<option value="New Mexico">New Mexico</option>
<option value="North Carolina">North Carolina</option>
<option value="North Dakota">North Dakota</option>
<option value="Ohio">Ohio</option>
<option value="Oklahoma">Oklahoma</option>
<option value="Oregon">Oregon</option>
<option value="Pennsylvania">Pennsylvania</option>
<option value="Rhode Island">Rhode Island</option>
<option value="South Carolina">South Carolina</option>
<option value="South Dakota">South Dakota</option>
<option value="Tennessee">Tennessee</option>
<option value="Texas">Texas</option>
<option value="Utah">Utah</option>
<option value="Vermont">Vermont</option>
<option value="Virginia">Virginia</option>
<option value="West Virginia">West Virginia</option>
                  </select>  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">  
                <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" value="<?php echo $zip; ?>" class="form-control" disabled placeholder="Zip">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">  
                <label for="country">Country</label>
                  <select id="country" name="country" class="form-control" disabled>
                    <option selected value="<?php echo $country; ?>"><?php echo $country; ?></option>
                    <option value="United States">United States</option>
                    <option value="Canada">Canada</option>
                   </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">  
                <label for="phone">Primary Phone</label>
                  <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" class="form-control" disabled placeholder="Primary Phone">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">  
                <label for="mobile">Mobile Phone</label>
                  <input type="text" id="mobile" name="mobile" value="<?php echo $mobile; ?>" class="form-control" disabled placeholder="Mobile Phone">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">  
                <label for="workphone">Work Phone</label>
                  <input type="text" id="workphone" name="workphone" value="<?php echo $workphone; ?>" class="form-control" disabled placeholder="Work Phone">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">  
                <label for="email">Email</label>
                  <input type="text" id="email" name="email" value="<?php echo $email; ?>" class="form-control" disabled placeholder="Email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">  
                <label for="confirm">Confirm Email</label>
                  <input type="text" id="confirm" name="confirm" value="<?php echo $email; ?>" class="form-control" disabled placeholder="Confirm Email">
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
                  <input type="text" id="kennel" name="kennel" value="<?php echo $kennel; ?>" class="form-control" disabled placeholder="Kennel Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">  
                <label for="url">URL</label>
                  <input type="text" id="url" name="url" value="<?php echo $url; ?>" class="form-control" disabled placeholder="URL">
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
                <textarea name="breeding" id="breeding" placeholder="Breeding" class="form-control" disabled><?php echo $breeding; ?></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">  
                <label for="breed1">First Breed</label>
                  <select id="breed1" name="breed1" class="form-control" disabled>
<?php if(!empty($breed1)){
?>
                        <option selected value="<?php echo $breed1; ?>"><?php echo $breed1; ?></option>
<?php
  } 
  else {
?>
                        <option value="">Choose One</option>
<?php
  } 
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
                  <select id="breed2" name="breed2" class="form-control" disabled>
                    <?php if(!empty($breed2)){
                        ?>
                        <option selected value="<?php echo $breed2; ?>"><?php echo $breed2; ?></option>
                        <?php
                    } 
                    else {
                        ?>
                        <option value="">Choose One</option>
                        <?php
                    } 
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
                  <select id="breed3" name="breed3" class="form-control" disabled>
                    <?php if(!empty($breed3)){
                        ?>
                        <option selected value="<?php echo $breed3; ?>"><?php echo $breed3; ?></option>
                        <?php
                    } 
                    else {
                        ?>
                        <option value="">Choose One</option>
                        <?php
                    } 
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
                  <select id="breed4" name="breed4" class="form-control" disabled>
                    <?php if(!empty($breed4)){
                        ?>
                        <option selected value="<?php echo $breed4; ?>"><?php echo $breed4; ?></option>
                        <?php
                    } 
                    else {
                        ?>
                        <option value="">Choose One</option>
                        <?php
                    } 
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
                  <select id="breed5" name="breed5" class="form-control" disabled>
                    <?php if(!empty($breed5)){
                        ?>
                        <option selected value="<?php echo $breed5; ?>"><?php echo $breed5; ?></option>
                        <?php
                    } 
                    else {
                        ?>
                        <option value="">Choose One</option>
                        <?php
                    } 
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
                  <select id="breed6" name="breed6" class="form-control" disabled>
                    <?php if(!empty($breed6)){
                        ?>
                        <option selected value="<?php echo $breed6; ?>"><?php echo $breed6; ?></option>
                        <?php
                    } 
                    else {
                        ?>
                        <option value="">Choose One</option>
                        <?php
                    } 
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
                <?php if($contract=="Yes"){
                  echo "<input type=\"radio\" name=\"contract\" id=\"contracty\" value=\"Yes\" checked >Yes<br>";
                  echo "<input type=\"radio\" name=\"contract\" id=\"contractn\" value=\"No\">No<br><br>";
                }
                else {
                  echo "<input type=\"radio\" name=\"contract\" id=\"contracty\" value=\"Yes\"  >Yes<br>";
                  echo "<input type=\"radio\" name=\"contract\" id=\"contractn\" value=\"No\" checked>No<br><br>";
                }
                ?>
                <span>Active USDA Dog Breeder?</span><br><br>
                <?php if($active=="Yes"){
                  echo "<input type=\"radio\" name=\"active\" id=\"activey\" value=\"Yes\" checked>Yes<br>";
                  echo "<input type=\"radio\" name=\"active\" id=\"activen\" value=\"No\" >No<br><br>";
                }
                else {
                  echo "<input type=\"radio\" name=\"active\" id=\"activey\" value=\"Yes\" >Yes<br>";
                  echo "<input type=\"radio\" name=\"active\" id=\"activen\" value=\"No\" checked>No<br><br>";
                }
                ?>                
                <span>Do you have a State Dog Breeders License?</span><br><br>
                <?php if($license=="Yes"){
                  echo "<input type=\"radio\" name=\"license\" id=\"licensey\" value=\"Yes\" checked >Yes<br>";
                  echo "<input type=\"radio\" name=\"license\" id=\"licensen\" value=\"No\" >No<br><br>";
                }
                else {
                  echo "<input type=\"radio\" name=\"license\" id=\"licensey\" value=\"Yes\" checked >Yes<br>";
                  echo "<input type=\"radio\" name=\"license\" id=\"licensen\" value=\"No\" checked>No<br><br>";
                }
                ?>                
               </h6>
             </div>    
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="vet_name">Vet's name</label>
                  <input type="text" id="vet_name" name="vet_name" value="<?php echo $vet_name; ?>" class="form-control" disabled placeholder="Vet's name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="vet_phone">Vet's phone #</label>
                  <input type="text" id="vet_phone" name="vet_phone" value="<?php echo $vet_phone; ?>" class="form-control" disabled placeholder="Vet's phone #">
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
                  <textarea id="travel_info" name="travel_info" class="form-control" disabled placeholder="What days can you ship puppies?"><?php echo $travel_info; ?></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                  <h6>What is included in the price:<br>
                  <div class="row">
                  <div class="col-md-6"> 
<?php
if($montreal==1){
?>
                  <input type="checkbox" name="montreal" id="montreal" checked> Montreal, Canada
<?php
}
else {
?>
                  <input type="checkbox" name="montreal" id="montreal"> Montreal, Canada
<?php
}
?>
                  </div>
                  <div class="col-md-6">
<?php
if($toronto==1){
?>
                  <input type="checkbox" name="toronto" id="toronto" checked> Toronto, Canada
<?php
}
else {
?>
                  <input type="checkbox" name="toronto" id="toronto"> Toronto, Canada
<?php
}
?>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">  
<?php
if($vancouver==1){
?>
                  <input type="checkbox" name="vancouver" id="vancouver" checked> Vancouver, Canada
<?php
}
else {
?>
                  <input type="checkbox" name="vancouver" id="vancouver"> Vancouver, Canada
<?php
}
?>
                  </div>
                  <div class="col-md-6">
<?php
if($anchorage==1){
?>
                  <input type="checkbox" name="anchorage" id="anchorage" checked> Anchorage, Alaska
<?php
}
else {
?>
                  <input type="checkbox" name="anchorage" id="anchorage"> Anchorage, Alaska
<?php
}
?>
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
                  <select id="howfound" name="howfound"  class="form-control" disabled>
                    <option selected value="<?php echo $howfound; ?>"><?php echo $howfound; ?></option>
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
                  <select id="howpay" name="howpay" class="form-control" disabled>
                    <option selected value="<?php echo $howpay; ?>"><?php echo $howpay; ?></option>
                    <option value="Stripe">Stripe</option>
                    <option value="Wire Transfer">Wire Transfer</option>                      
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">  
                <label for="registration_code">Registration Code</label>
                  <input type="text" id="registration_code" name="registration_code" value="<?php echo $registration_code; ?>" class="form-control" disabled placeholder="Registration Code">
                </div>
              </div>
            </div>
             <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <button type="button" id="edit_registration" class="button secondary is-larger btn-landing" onclick="edit_record()">Edit </button>
                  <button type="submit" id="update_registration" class="button secondary is-larger btn-landing">Update Changes </button>                  
                </div>
              </div>
            </div>

          </div>
          </form>
      </div>
      </div>
  </div>
</div>
