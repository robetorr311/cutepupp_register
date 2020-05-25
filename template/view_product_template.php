      <div id="container-product" class="alert alert-warning">
        <div class="table-responsive">
        <table id="table_products" class="table table-striped table-bordered">
          <thead>
          	<th>Name</th>
          	<th>Price</th>
          	<th>Image</th>
          	<th>Buttons</th>
          </thead>
          <tbody>
          	<?php
          	foreach ($results_products as $key_product) {
            ?>
          	<tr>
            <td><?php echo $key_product->post_name; ?></td>
          	<td><?php echo get_price($key_product->ID); ?></td>
          	<td><img src='<?php echo get_site_url().'/wp-content/uploads/'.get_attached($key_product->ID); ?>' width="224px" height="224px"/></td>
          	<td><a type="button" class="button secondary is-larger btn-landing" href="<?php echo get_site_url().'/editproduct/?id='.$key_product->ID; ?>" target="blank"><i class="fa fa-pencil"></i></a><button type="button" class="button secondary is-larger btn-landing" onclick="deleteproduct(<?php echo $key_product->ID; ?>)"><i class="fa fa-trash"></i></a></td>
            </tr>
            <?php
            }
            ?>          	
          </tbody>
          <tfoot>
          	<th>Name</th>
          	<th>Price</th>
          	<th>Image</th>
          	<th>Buttons</th>          	
          </tfoot>
        </table>
      </div>
      </div>

<script type="text/javascript">
jQuery(document).ready( function($) {
  jQuery("#table_products").dataTable({
    "oPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false,
    "lengthMenu":[[10,25,50,100,200,-1],[10,25,50,100,200,"All"]]    
  });    
});  
</script>