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
					<div class="row">
						<div class="col-md-4">
							<div style="height: 270px; width: 350px;">
								<?php echo "<img src='admin/images/tourPackage/$tour->image'/>"; ?><br>
							</div>
						</div>
					</div>
					<div class="wrapper_content" style=" margin-left: 10px;">
						<div class="post_title">
							<h4>
							<a href="hotel_details.php?id=<?php echo $tour->id; ?>" rel="bookmark"><?php echo $tour->tour_name; ?></a>
							</h4>
							<h6 style="font-size: 18px; color: #000; background: #ffb300; " class="badge badge-info"><?php echo $tour->amount; ?> Tk.</h6>
						</div>
						<span class="post_date"><?php echo $tour->days; ?> DAYS <?php echo $tour->night; ?> NIGHTS</span>
						<div class="description">
							<p><?php echo $tour->description; ?></p>
						</div>
					</div>
					<div align="center" class="read_more">
						<a style="text-align: center; margin-top: 4px;" rel="nofollow" href="tour_details.php?id=<?php echo $tour->id; ?>" class="btn btn-info">Read more</a>
					</div>
				</div>
			</div>
				<?php } ?>
			</div>
		</div>
	</section>
</div>
<?php include('views/master/footer.php'); ?>