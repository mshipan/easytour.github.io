<?php 
session_start();
include('views/master/header.php'); 
require'vendor/autoload.php';
$blogs=Blog::all();
<<<<<<< HEAD
=======

>>>>>>> master
?>

<div class="site wrapper-content">
		<div class="top_site_main"></div>
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-12 align-left">
						<div class="wrapper-blog-content">
							<?php 
							foreach ($blogs as $key => $blog) { ?>
								<article class="type-post">
								<div class="img_post"><a href="blog_details.php">
									<img width="370" height="260" src="images/blog/86H.jpg" class="wp-post-image" alt=""></a>
								</div>
								<div class="entry-content content-thumbnail">
									<header class="entry-header">
										<h2 class="entry-title">
											<a href="blog_details.php?id=<?php echo $blog->id; ?>" rel="bookmark"><?php echo $blog->blog_name; ?></a>
										</h2>
										<div class="entry-meta">
											<span class="posted-on">Posted on <?php echo $blog->created_at; ?> <a href="blog_details.php" rel="bookmark">
												<time class="entry-date published" datetime="2016-09-06T04:52:25+00:00"><?php echo  $blog->created_at; ?></time>
											</a></span>
										</div>
									</header>
									<div class="entry-desc">
										<p><?php echo $blog->description ?></p>
									</div>
								</div>
							</article>
							<?php }?>

						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

<?php include('views/master/footer.php'); ?>