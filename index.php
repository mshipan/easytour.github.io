<?php
session_start();
 include('views/master/header.php');
 ?>

<div class="site wrapper-content">
	<div class="home-content" role="main">
		<div class="section-background" style="background-image:url('images/home/banner-home3.jpg'); min-height: 100vh;position: relative;">
			<div class="text-banner-home4">
				<div class="container" >
					<div class="row">
						<div class="col-sm-12">
							<div class="banner-typed"><h2 class="phys-typingEffect" style="color:#ffffff">
								The theme for
								<span class="phys-typingTextEffect" data-strings0="Travel booking." data-strings1="Tour booking." data-strings2="Travel Agency." data-strings3="Tour Operator." data-type-speed="100">Travel Agency.</span>
								</h2>
								<p class="desc" style="color:#ffffff">Find tours, book tour online and payment with more options.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
		</div>
		<div class="padding-top-6x" style="background-color: #f2f2f2">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="wpb_text_column wpb_content_element ">
							<div class="wpb_wrapper">
								<h2 style="text-align: center;">Let’s start width some benefits
								<strong>Travel</strong><span style="color: #ffcc00;"><sup>WP</sup></span></h2>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div class="widget-icon-box widget-icon-box-base iconbox-center">
											<div class="box-icon icon-image circle" style="width:160px">
												<img src="images/home/passionate-travel.png" alt="">
											</div>
											<div class="content-inner">
												<div class="sc-heading article_heading">
													<h4 style="color:#000000" class="heading__primary">Passionate Travel</h4>
												</div>
												<div class="desc-icon-box">
													<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div class="widget-icon-box widget-icon-box-base iconbox-center">
											<div class="box-icon icon-image ">
												<img src="images/home/diverse-destinations.png" alt="">
											</div>
											<div class="content-inner">
												<div class="sc-heading article_heading">
													<h4 style="color:#000000" class="heading__primary">Diverse Destinations</h4>
												</div>
												<div class="desc-icon-box">
													<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div class="widget-icon-box widget-icon-box-base iconbox-center">
											<div class="box-icon icon-image ">
												<img src="images/home/value-money.png" alt="">
											</div>
											<div class="content-inner">
												<div class="sc-heading article_heading">
													<h4 style="color:#000000" class="heading__primary">Value for Money</h4>
												</div>
												<div class="desc-icon-box">
													<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div class="widget-icon-box widget-icon-box-base iconbox-center">
											<div class="box-icon icon-image ">
												<img src="images/home/beautiful-places.png" alt="">
											</div>
											<div class="content-inner">
												<div class="sc-heading article_heading">
													<h4 style="color:#000000" class="heading__primary">Beautiful Places</h4>
												</div>
												<div class="desc-icon-box">
													<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_empty_space" style="height: 80px"><span class="vc_empty_space_inner"></span>
					</div>

					
					<div class="shortcode_title shortcode-title-style_2">
						<h2 class="title_primary">Tour Deals</h2>
					</div>
					<div class="row wrapper-tours-slider arrow-black">
						<div class="tours-type-slider content_tour_style_2 list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":3}, "992":{"items":3}, "1200":{"items":3}}'>
<?php 
require'vendor/autoload.php';
include 'function.php';
$hotel=HotelPackage::all();
$tours=TourPackage::all();
?>
					<?php foreach ($tours as $key => $tour) { ?>
							<div class="item-tour">
								<div class="item_border ">
									<div class="item_content">
										<div class="post_images">
											<a href="single-tour.html" class="woocommerce-LoopProduct-link">
												<img width="430" height="305" src="<?php echo 'admin/images/tourPackage/'.$tour->image; ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="You big profit" title="You big profit">
											</a>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h5>
												<a href="tour_details.php?id=<?php echo $tour->id; ?>" rel="bookmark"><?php echo $tour->tour_name; ?></a>
												</h5><span class="price">
													<span class="text">From</span><span class="woocommerce-Price-amount amount"><?php echo $tour->amount; ?> Tk.</span>			</span>
												</div>
												<p><?php echo str_limit($tour->description, 100); ?></p>
											</div>
										</div>
										<div class="read_more">
											<span class="post_date"><?php echo $tour->days; ?> DAYS <?php echo $tour->night; ?> NIGHTS</span>
											<div class="item_rating">
												<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
											</div>
										</div>
									</div>
								</div>

				<?php } ?>
							</div>
						</div>
						<div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container padding-bottom-6x padding-top-6x">
		<div class="row">
			<div class="col-sm-12">
				<div class="shortcode_title shortcode-title-style_3">
					<h2 class="title_primary">Most popular Hotels</h2>
					<div class="title_subtitle">
						<a href="tours.html">View All Tours</a></div>
					</div>
					<div class="row wrapper-tours-slider">
						<div class="list_content content_tour_style_2 tours-type-pain">
						<?php foreach ($hotel as $key => $hotel) { ?>
							<div class="item-tour col-sm-4">
								<div class="item_border ">
									<div class="item_content">
										<div class="post_images">
											<a href="single-tour.html" class="woocommerce-LoopProduct-link">
											<img width="430" height="305" src="<?php echo 'admin/images/hotelPackage/'.$tour->image; ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="You big profit" title="You big profit"></a>
											
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h5>
												<a href="hotel_details.php?id=<?php echo $hotel->id; ?>" rel="bookmark"><?php echo $hotel->package_name; ?></a>
												</h5><span class="price">
													<span class="text">From</span><span class="woocommerce-Price-amount amount"><?php echo $hotel->amount; ?> Tk.</span></span>
												</div>
												<p><?php echo str_limit($hotel->description, 100); ?></p>
											</div>
										</div>
										<div class="read_more">
											<span class="post_date"><?php echo $hotel->days; ?> DAYS <?php echo $hotel->night; ?> NIGHTS</span>
											<div class="item_rating">
												<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div><!-- #main-content -->
				</div>
				<?php
				include('views/master/footer.php');
				?>