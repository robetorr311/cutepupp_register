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
