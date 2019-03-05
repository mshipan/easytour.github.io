<?php
session_start();
 include('views/master/header.php'); ?>
<div class="site wrapper-content">
	<div class="top_site_main">
	</div>
	<section class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="site-main col-sm-10 alignleft">
					<div class="video-container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6304.829986131271!2d-122.4746968033092!3d37.80374752160443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808586e6302615a1%3A0x86bd130251757c00!2sStorey+Ave%2C+San+Francisco%2C+CA+94129!5e0!3m2!1sen!2sus!4v1435826432051" width="600" height="450" style="border: 0; pointer-events: none;" allowfullscreen=""></iframe>
					</div>
					<div class="pages_content padding-top-4x">
						<h4>CONTACT INFORMATION</h4>
						<div class="contact_infor">
							<ul>
								<li><label><i class="fa fa-map-marker"></i>ADDRESS</label>
								<div class="des">West Raja Bazar,Dhaka 1215</div>
							</li>
							<li><label><i class="fa fa-phone"></i>Phone NO</label>
							<div class="des">+012345678 (tour) | +0123456789 (ticketing)</div>
						</li>
					<li><label><i class="fa fa-envelope"></i>EMAIL</label>
					<div class="des">tours@physcode.com (tour) | tickets@physcode.com (ticketing)</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="wpb_wrapper pages_content">
		<h4>Have a question?</h4>
		<div role="form" class="wpcf7">
			<div class="screen-reader-response"></div>
			<form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
				<div class="form-contact">
					<div class="row-1x">
						<div class="col-sm-6">
							<span class="wpcf7-form-control-wrap your-name">
								<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control" placeholder="Your name*">
							</span>
						</div>
						<div class="col-sm-6">
							<span class="wpcf7-form-control-wrap your-email">
								<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control" placeholder="Email*">
							</span>
						</div>
					</div>
					<div class="form-contact-fields">
						<span class="wpcf7-form-control-wrap your-subject">
							<input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control" placeholder="Subject">
						</span>
					</div>
					<div class="form-contact-fields">
						<span class="wpcf7-form-control-wrap your-message">
							<textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message"></textarea>
						</span><br>
						<input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-sm-1"></div>
</div>
</div>
</section>
</div>
<?php include('views/master/footer.php'); ?>