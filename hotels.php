<?php 
session_start();
require'vendor/autoload.php';
include 'function.php';
$hotel=HotelPackage::all();

?>
<?php include('views/master/header.php'); ?>
<div class="site wrapper-content">
	<div class="top_site_main"></div>
	<section class="content-area">
		<div class="container">
		<?php foreach ($hotel as $key => $hotel) { ?>
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
							<a href="single_tour.php" rel="bookmark">Discover Brazil</a>
							</h4>
							<h6 style="font-size: 18px; color: #000; background: #ffb300; " class="badge badge-info">$93.00</h6>
						</div>
						<span class="post_date">5 DAYS 4 NIGHTS</span>
						<div class="description">
							<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
						</div>
					</div>
					<div align="center" class="read_more">
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