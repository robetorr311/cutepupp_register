<h2 class="uppercase" style="text-align: center;"><span style="color: #464646; font-family: twin-pines; font-size: 2em;">FEATURED PUPPIES AND DOGS FOR SALE</span></h2>
<p class="thin-font" style="text-align: center;"><span style="color: #464646; font-family: karla; font-size: 1.1em; font-weight: bold;">Find the Right Puppy for You and Your Family</span></p>
<div class="products row">
	<?php
	foreach ($results as $key) {
    ?>
	<div class="product-small col">
        <div class="col-sm-3">
		<div class="col-inner">
			<div class="product-smal box">
				<div class="box_image">
                  <img src='<?php echo get_site_url().'/wp-content/uploads/'.get_attached($key->ID); ?>' width="247" height="296"/>
				</div>
				<div class="product-values">
				    <div class="box-text box-text-product">
					    <p class="alignleft"><?php echo $key->post_name; ?></p>
					    <p class="alignright"><?php echo get_price($key->ID); ?> $</p>
					    <div style="clear: both;"></div>
					    <p class="alignleft"><?php echo get_puppy_category($key->ID); ?></p>
				    </div>
				</div>    
				<div class="product-buttons">
					<div class="add-to-cart-button">
					<a type="button" class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small" href="<?php echo get_site_url(); ?>/?add-to-cart=<?php echo $key->ID; ?>">RESERVE NOW</a>
                    </div>
                    <div class="learn-more-button">
                    <a type="button" class="tekicado ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small added" href="<?php echo get_site_url(); ?>/shop/<?php echo get_puppy_category($key->ID); ?>/<?php echo $key->post_name; ?>/">LEARN MORE</a>
  		           </div>

			    </div>
		    </div>
        </div>
	</div>
	<?php 
    }
	?>
</div>