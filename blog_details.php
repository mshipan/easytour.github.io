<?php 
session_start();
include('views/master/header.php'); 
require'vendor/autoload.php';


if (isset($_POST['submit'])) {

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $comment=Comment::create([
        'blog_id' => $_POST['blog_id'],
        'user_id' => $_SESSION['user_id'],
        'text' => $_POST['text'],
    ]);
    if (!$comment) {
    	die('something whron');
    }
}
}

$blog_id = $_GET['id'];

$blog=Blog::find($blog_id);

$dt = new DateTime($blog->created_at);

$date= $dt->format('M d, Y');



?>
<div class="site wrapper-content">
	<div class="top_site_main">
	</div>
	<section class="content-area">
		<div class="container">
			<div class="row">
				<header class="entry-header">
					<h1 class="entry-title"><?php echo $blog->blog_name; ?></h1>
					<div class="entry-meta">
						<span class="posted-on">Posted on <a href="single.html" rel="bookmark">
							<time class="entry-date published" datetime="2016-09-06T04:52:25+00:00"><?php echo $date; ?></time>
						</a></span>
					</div>
				</header>
				<div class="img_post"><a href="single.html">
					<img style="width: 100%; height: 550px; margin-top: 10px;  border-radius: 10px;" src="<?php echo 'images/blog/'.$blog->image; ?>" class="wp-post-image" alt=""></a>
				</div>
				<div class="site-main col-sm-12">
					<div class="wrapper-blog-content"><div class="entry-content content-thumbnail">
						<div class="entry-desc">
							<p style=" margin-top: 10px; font-size: 18px;"><?php echo $blog->description; ?></p>
						</div>
					</div>
				</div>
			</div>
		<div class="clearfix"></div><br>
		<div style="background-color: #f5f5f5;" >
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-9">
					<div class="widget-area no-padding blank">
						<div class="status-upload">
							<form class="form-group" action="" method="post">
								<input type="hidden" name="blog_id" value=" <?php echo $blog->id; ?>">
								<textarea name="text" placeholder="What are you doing right now?" ></textarea>
								<button type="submit" name="submit" class="btn btn-success green"><i class="fa fa-share"></i>Comment</button>
							</form>
							</div><!-- Status Upload  -->
							</div><!-- Widget Area -->
						</div>
						<div class="col-md-1"></div>
					</div><br>
					<?php 

					foreach ($blog->comments->sortByDesc("created_at") as $key => $comment) { ?>
						<div class="row">
							<div class="col-md-1"></div>
								<div class="col-md-9">
									<div class="alert alert-info">
										<h5> <?php echo $comment->user->name; ?></h5>
										<h6> <?php echo $comment->created_at->format('h:i:s').' date- '.$comment->created_at->format('d/m/Y'); ?></h6>
										<p><?php echo $comment->text; ?></p>
									</div>
								</div>
							<div class="col-md-1"></div>
						</div>
					<?php }?>

					
				</div>
			</div>
		</div>
	</section>
</div>
<?php include('views/master/footer.php'); ?>