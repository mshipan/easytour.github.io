<?php 

session_start();
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
			<div style="margin-bottom: 30px;" class="col-md-4">
				<div class="item_border item-product">
					<div class="post_images">
						<a href="single_tour.php">
							<img width="430" height="305" src="images/tour/430x305/tour-1.jpg" alt="Discover Brazil" title="Discover Brazil">
						</a>
					</div>
					<div class="wrapper_content" style=" margin-left: 10px;">
						<div class="post_title">
							<h4>
							<a href="#" rel="bookmark"><?php echo $tour->tour_name; ?></a>
							</h4>
							<h6 style="font-size: 18px; color: #000; background: #ffb300; " class="badge badge-info"><?php echo $tour->amount; ?></h6>
						</div>
						<span style="font-size: 18px; color: #000; background: #ffb300; " class="badge badge-info">City: <?php echo $tour->city; ?></span><br>
						<span style="font-size: 18px; color: #000; background: #ffb300; margin-top: 4px;" class="badge badge-info">Country:  <?php echo $tour->country; ?></span>
					</div>
					<div style="text-align: center; margin-top: 8px;"  align="center" class="read_more">
						<a style="text-align: center; margin-top: 4px;" rel="nofollow" href="single-tour.html" class="btn btn-info">Read more</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
</div>
<?php include('views/master/footer.php'); ?>