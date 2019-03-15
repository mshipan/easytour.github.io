<?php
session_start();
include('views/master/header.php');
require'vendor/autoload.php';
$tour_id = $_GET['id'];
$tour=TourPackage::find($tour_id);
$dt = new DateTime($tour->created_at);
$date= $dt->format('M d, Y');
?>
<div class="site wrapper-content">
	<div class="top_site_main">
	</div>
	<section class="content-area">
		<div class="container">
			<div class="row">
				<header class="entry-header">
					<h1 class="entry-title"><?php echo $tour->tour_name; ?></h1>
					<div class="entry-meta">
						<span class="posted-on">Posted on <a href="single.html" rel="bookmark">
							<time class="entry-date published" datetime="2016-09-06T04:52:25+00:00"><?php echo $date; ?></time>
						</a></span>
					</div>
				</header>
				<div class="img_post"><a href="single.html">
					<img style="width: 100%; height: 550px; margin-top: 10px;  border-radius: 10px;" src="<?php echo 'admin/images/tourPackage/'.$tour->image; ?>" class="wp-post-image" alt=""></a>
				</div>
			<div class="site-main col-sm-12">
				<div class="wrapper-tour-content">
					<div class="entry-content content-thumbnail">
						<div class="entry-desc">
							<p style=" margin-top: 10px; font-size: 18px;"><?php echo $tour->description; ?></p>
						</div>
					</div>
				</div>
			</div>
		<div class="clearfix"></div><br>
	</div>
</div>
</section>
</div>
<?php include('views/master/footer.php'); ?>