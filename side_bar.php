
<h2>Category</h2>
<div class="panel-group category-products" id="accordian"><!--category-productsr-->
	<?php 
	$query = "SELECT * FROM category";
	$result = mysqli_query($connect, $query);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {
			?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordian" href="#collapse_<?php echo $row['cat_id']; ?>">
							<span class="badge pull-right accordion in"><i class="fa fa-plus"></i></span>
							<?php echo $row['category']; ?>
						</a>
					</h4>
				</div>
				<div id="collapse_<?php echo $row['cat_id']; ?>" class="panel-collapse collapse">
					<div class="panel-body">
						<ul>
							<?php 
							$cat_id=$row['cat_id'];
							$subquery = "SELECT * FROM subcategory where cat_id='$cat_id'";
							$subresult = mysqli_query($connect, $subquery);
							if (mysqli_num_rows($subresult) > 0) {
								while ($subrow = mysqli_fetch_array($subresult)) {
									?>

									<li><a href="product_by_subcategory.php?sub_id=<?php echo $subrow['id']; ?>"><?php echo $subrow['subcatg']; ?>  </a></li>
								<?php } } ?>
						</ul>
					</div>
				</div>
			</div>
			<?php } } ?>
</div><!--/category-products-->

		<div class="brands_products"><!--brands_products-->
			<h2>Brands</h2>
			<div class="brands-name">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
					<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>

				</ul>
			</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						
				


