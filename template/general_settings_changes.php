<div class="postbox">
<span>
<h3 class='hndle'>General Settings</h3>
</span>
<br>
<div class="inside">
<h3 class='hndle'>Users registered but disabled</h3>
<div id="table_disabled">
<table id="table_dis" class="table table-striped table-bordered" >
<thead>
    <tr>
      <th>Username </th>  
      <th>First name </th> 
      <th>Last name </th> 
      <th>Street </th> 
      <th>Suite or Apt. </th> 
      <th>City </th> 
      <th>State </th> 
      <th>Zip </th> 
      <th>Country </th> 
      <th>Phone </th> 
      <th>Mobile </th> 
      <th>Work phone </th> 
      <th>Email </th> 
      <th>Options</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($results_disabled as $disabled) {
?>  
  <tr>
    <td> <?php echo $disabled->username; ?> </td>  
    <td> <?php echo $disabled->firstname; ?> </td> 
    <td> <?php echo $disabled->lastname; ?> </td> 
    <td> <?php echo $disabled->street; ?> </td> 
    <td> <?php echo $disabled->apt; ?> </td> 
    <td> <?php echo $disabled->city; ?> </td> 
    <td> <?php echo $disabled->state; ?> </td> 
    <td> <?php echo $disabled->zip; ?> </td> 
    <td> <?php echo $disabled->country; ?> </td> 
    <td> <?php echo $disabled->phone; ?> </td> 
    <td> <?php echo $disabled->mobile; ?> </td> 
    <td> <?php echo $disabled->workphone; ?> </td> 
    <td> <?php echo $disabled->email; ?> </td> 
    <td>
      <button type="button" class="button button-primary" onclick="active('<?php echo $disabled->id; ?>')">Active</button>
      <a type="button" class="button button-primary" href="<?php echo get_site_url().'/view_register/?id='.$disabled->id; ?>" target="blank">View register</a>
      <button type="button" class="button button-primary" onclick="deleteregister('<?php echo $disabled->id; ?>')">Delete</button>
    </td>
</tr>
<?php
}
?>
</tbody>
<tfoot>
    <tr>
      <th>Username </th>  
      <th>First name </th> 
      <th>Last name </th> 
      <th>Street </th> 
      <th>Suite or Apt. </th> 
      <th>City </th> 
      <th>State </th> 
      <th>Zip </th> 
      <th>Country </th> 
      <th>Phone </th> 
      <th>Mobile </th> 
      <th>Work phone </th> 
      <th>Email </th> 
      <th>Options</th>
    </tr>
</tfoot>    
</table>
</div>
</div>
</div>

<div class="postbox">
<br>
<div class="inside">
<span><h3 class='hndle'>Users registered active</h3></span>
<div id="table_enabled">
<table id="table_en" class="table table-striped table-bordered" >
<thead>
    <tr>
      <th>Username </th> 
      <th>First name </th> 
      <th>Last name </th> 
      <th>Street </th> 
      <th>Suite or Apt. </th> 
      <th>City </th> 
      <th>State </th> 
      <th>Zip </th> 
      <th>Country </th> 
      <th>Phone </th> 
      <th>Mobile </th> 
      <th>Work phone </th> 
      <th>Email </th> 
      <th>Options</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($results_enabled as $enabled) {
?>  
  <tr>
    <td> <?php echo $enabled->username; ?> </td>
    <td> <?php echo $enabled->firstname; ?> </td> 
    <td> <?php echo $enabled->lastname; ?> </td> 
    <td> <?php echo $enabled->street; ?> </td> 
    <td> <?php echo $enabled->apt; ?> </td> 
    <td> <?php echo $enabled->city; ?> </td> 
    <td> <?php echo $enabled->state; ?> </td> 
    <td> <?php echo $enabled->zip; ?> </td> 
    <td> <?php echo $enabled->country; ?> </td> 
    <td> <?php echo $enabled->phone; ?> </td> 
    <td> <?php echo $enabled->mobile; ?> </td> 
    <td> <?php echo $enabled->workphone; ?> </td> 
    <td> <?php echo $enabled->email; ?> </td> 
    <td>
      <button type="button" class="button button-primary" onclick="deactivate('<?php echo $enabled->id; ?>')">Deactivate</button>
    </td>
</tr>
<?php
}
?>
</tbody>  
<tfoot>
    <tr>
      <th>Username </th>  
      <th>First name </th> 
      <th>Last name </th> 
      <th>Street </th> 
      <th>Suite or Apt. </th> 
      <th>City </th> 
      <th>State </th> 
      <th>Zip </th> 
      <th>Country </th> 
      <th>Phone </th> 
      <th>Mobile </th> 
      <th>Work phone </th> 
      <th>Email </th> 
      <th>Options</th>
    </tr>
</tfoot>  
</table>
</div>
</div>
</div>