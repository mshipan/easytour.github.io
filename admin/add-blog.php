<?php
session_start();
if ($_SESSION['user']!=1) {
	header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';
include '../function.php';
		if (isset($_POST['submit'])) {
		if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$blog_name=validator($_POST['blog_name']);
		$description=validator($_POST['description']);
		// $image=validator($_POST['image']);

		$image = $_FILES['image']['name'];
		$temp_name = $_FILES['image']['tmp_name'];
		move_uploaded_file($temp_name, "images/blog/$image");



		$blog=Blog::insert([
		'blog_name' => $blog_name,
		'description' => $description,
		'image' => $image,
		]);
		// $msg="Tour Package insert successfully!";
		echo '<script type="text/javascript">
		window.location = "add-blog.php"
		</script >';
	}
}
?>
<div class="container">
	<div class="row" style="padding-top: 20px;">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h2> Here Add Blog</h2>
			<hr>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Blog Name</label>
					<input name="blog_name" type="text" class="form-control" placeholder="Blog Name">
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea name="description" rows="11" cols="70"></textarea>
					<!-- <textarea name="description" id="myeditablediv" rows="11" cols="70"></textarea> -->
				</div>
				<div class="form-group row">
					<label for="permanent_address" class="col-md-2 col-form-label text-md-right">Blog Image <small style="color: red;">300*200 | Max 1MB</small></label>
					<div class="col-md-8">
						<input type="file" name="image" id="permanent_address" class="form-control" >
					</div>
				</div>
				<button type="submit" name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
<!-- <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=wey1ni6s7ndtb73g6647wncn0sqa13tu7c2gs0geo6cbwbc9"></script> -->
<script type="text/javascript">
tinymce.init({
selector: '#myeditablediv',
height: 500,
plugins: [
"advlist autolink lists link ",
"searchreplace visualblocks code fullscreen",
"insertdatetime media table contextmenu paste"
],
toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
<?php require 'master/footer.php'; ?>