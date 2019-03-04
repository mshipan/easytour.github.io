<?php
require'vendor/autoload.php';
include 'function.php';
$tours=TourPackage::all();
?>
<?php include('views/master/header.php'); ?>
	
	<div class="site wrapper-content">
		<div class="top_site_main"></div>
		<section class="content-area">
			<div class="container">
				<?php foreach ($tours as $key => $tour) { ?>
				<div class="item-tour col-sm-4">
					<div class="item_border ">
						<div class="item_content">
							<div class="post_images">
								<a href="single-tour.html" class="woocommerce-LoopProduct-link">
								<img width="430" height="305" src="admin/images/tourPackage/<?php echo $tour->image; ?>.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="You big profit" title="You big profit"></a>
								
							</div>
							<div class="wrapper_content">
								<div class="post_title"><h5>
									<a href="single-tour.html" style="font-size: 18px; color: #ffb300;" rel="bookmark"><?php echo $tour->tour_name; ?></a>
									</h5>					
									<span class="price">
										<span style="font-size: 18px;" class="woocommerce-Price-amount amount">$<?php echo $tour->amount; ?></span>
									</span>
								</div>
								<p><?php echo $tour->description; ?></p>
							</div>
						</div>
						<div class="read_more">
							<span class="post_date"><?php echo $tour->days; ?> DAYS - <?php echo $tour->night; ?> Night</span>
							<div class="item_rating">
								<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
</div>
<?php include('views/master/footer.php'); ?>