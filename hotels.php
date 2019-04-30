<?php
session_start();
require'vendor/autoload.php';
include 'function.php';
$hotel=HotelPackage::orderBy('id','desc')->get();
?>
<?php include('views/master/header.php'); ?>
<div class="site wrapper-content">
	<div class="top_site_main"></div>
	<section class="content-area">
		<div class="container">
			<?php foreach ($hotel as $key => $hotel) { ?>
			<div style="margin-bottom: 30px;" class="col-md-4">
				<div class="item_border item-product">
					<div class="row">
						<div class="col-md-4">
							<div style="height: 260px; width: 348px;">
								<img style="width: 350px; height: 233px; " src="<?php echo 'admin/images/HotelPackage/'.$hotel->image; ?>"></a><br>
							</div>
						</div>
					</div>
					<div class="wrapper_content" style=" margin-left: 10px;">
						<div class="post_title">
							<h4>
							<a href="hotel_details.php?id=<?php echo $hotel->id; ?>" rel="bookmark"><?php echo $hotel->package_name; ?></a><span style="margin-left: 20%; font-size: 15px;">ID:<?php echo $hotel->id; ?></span>
							</h4>
							<h6 style="font-size: 18px; color: #000; background: #ffb300; " class="badge badge-info"><?php echo $hotel->amount; ?> Tk.</h6><span style="margin-left: 20%; font-size: 15px;">Date: <?php echo $hotel->date; ?></span>
						</div>
						<span class="post_date"><?php echo $hotel->days; ?> DAYS <?php echo $hotel->night; ?> NIGHTS</span>
						<div class="description">
						
							<p><?php echo str_limit($hotel->description, 70); ?></p>
						</div>
					</div>
					<div align="center" class="read_more">
						<a style="text-align: center; margin-top: 4px;" rel="nofollow" href="hotel_details.php?id=<?php echo $hotel->id; ?>" class="btn btn-info">Read more</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
</div>
<?php include('views/master/footer.php'); ?>