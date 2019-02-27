<?php
session_start();
if ($_SESSION['user']!=1) {
header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';
?>
<div class="container">
	<div class="row" style="padding-top: 20px;">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h2> Here Add Hotel Details</h2>
			<hr>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Hotel Name</label>
					<input name="hotel_name" type="text" class="form-control" placeholder="Hotel Name">
				</div>
				<div class="form-group">
					<label>Package Name</label>
					<input name="package_name" type="text" class="form-control" placeholder="Package Name">
				</div>
				<div class="form-group">
					<label>City</label>
					<input name="city" type="text" class="form-control" placeholder="City">
				</div>
				<div class="form-group">
					<label>Country</label>
					<input name="country" type="text" class="form-control" placeholder="Country">
				</div>
				<div class="form-group">
					<label>Amount</label>
					<input name="amount" type="text" class="form-control" placeholder="Amount">
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea id="myeditablediv" rows="11" cols="70"></textarea>
				</div>
				<div class="form-group row">
					<label for="permanent_address" class="col-md-2 col-form-label text-md-right">Profile Image <small style="color: red;">300*200 | Max 1MB</small></label>
					<div class="col-md-8">
						<input type="file" name="image" id="permanent_address" class="form-control" >
					</div>
				</div>
				<button type="submit" name="login" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=wey1ni6s7ndtb73g6647wncn0sqa13tu7c2gs0geo6cbwbc9"></script>
<script type="text/javascript">
tinymce.init({
selector: '#myeditablediv',
height: 300,
plugins: [
"advlist autolink lists link ",
"searchreplace visualblocks code fullscreen",
"insertdatetime media table contextmenu paste"
],
toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
<?php require 'master/footer.php'; ?>