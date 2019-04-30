<?php
session_start();
if ($_SESSION['user']!=1) {
	header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';
include '../function.php';
$id = $_GET['id'];
$blog=Blog::find($id);
if (isset($_POST['update'])) {
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		
		$blog=Blog::find($id);
		
		echo $image=$blog->image;
		if (isset($_FILES['image'])) {
			$image = $_FILES['image']['name'];
			$temp_name = $_FILES['image']['tmp_name'];
			move_uploaded_file($temp_name, "images/blog/$image");
		}
		
		$blog->update([
		'blog_name' => $_POST['blog_name'],		
		'description' => $_POST['description'] ,
		'image' => $image,
		]);
		$msg="Hotel Package insert successfully!";
		echo '<script type="text/javascript">
		window.location = "allBlog.php"
		</script>';
		}
	}
?>
<div class="row" style="padding-top: 20px;">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<h2> Update Blog</h2>
		<hr>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Blog Name</label>
				<input name="blog_name" type="text" class="form-control" value="<?php echo $blog->blog_name; ?>">
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea name="description" rows="11" cols="70"><?php echo $blog->description; ?></textarea>
				<!-- <textarea name="description" id="myeditablediv" rows="11" cols="70"></textarea> -->
			</div>
			<div class="form-group">
					<img style="height: 100px;" src="<?php echo "images/blog/$blog->image"; ?>">
				</div>
			<div class="form-group row">
				<label for="permanent_address" class="col-md-2 col-form-label text-md-right">Blog Image <small style="color: red;">300*200 | Max 1MB</small></label>
				<div class="col-md-8">
					<input type="file" name="image" id="permanent_address" class="form-control" >
				</div>
			</div>
			<button type="submit" name="update" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
		</form>
	</div>
	<div class="col-md-3"></div>
</div>

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