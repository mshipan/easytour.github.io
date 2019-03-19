<?php
session_start();
if ($_SESSION['user']!=1) {
	header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';
include '../function.php';


if (isset($_POST['update'])) {
if ($_SERVER["REQUEST_METHOD"]=="POST") {

$id = $_GET('id');
$image = $_FILES['image']['name'];
$temp_name = $_FILES['image']['tmp_name'];
move_uploaded_file($temp_name, "images/tourPackage/$image");

$tourPackage=TourPackage::find()->update([
'tour_name' => $tour_name,
'days' => $days,
'night' => $night,
'city' => $city,
'country' => $country,
'amount' => $amount,
'description' => $description,
'image' => $image,
]);
// $msg="Tour Package insert successfully!";
echo '<script type="text/javascript">
window.location = "tourPackage.php"
</script>';
}
}
$tours=TourPackage::first();
?>
<div class="row" style="padding-top: 20px;">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<h2> Here Edit Tour Details</h2>
		<hr>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>ID</label>
				<input name="id" type="hidden" class="form-control" placeholder="<?php echo $tours->id; ?>">
			</div>
			<div class="form-group">
				<label>Tour Package Name</label>
				<input name="tour_name" type="text" class="form-control" placeholder="<?php echo $tours->tour_name; ?>">
			</div>
			<div class="form-group">
				<label>Days</label>
				<input name="days" type="text" class="form-control" placeholder="<?php echo $tours->days; ?>">
			</div>
			<div class="form-group">
				<label>Night</label>
				<input name="night" type="text" class="form-control" placeholder="<?php echo $tours->night; ?>">
			</div>
			<div class="form-group">
				<label>City</label>
				<input name="city" type="text" class="form-control" placeholder="<?php echo $tours->city; ?>">
			</div>
			<div class="form-group">
				<label>Country</label>
				<input name="country" type="text" class="form-control" placeholder="<?php echo $tours->country; ?>">
			</div>
			<div class="form-group">
				<label>Amount</label>
				<input name="amount" type="text" class="form-control" placeholder="<?php echo $tours->amount; ?>">
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea name="description" id="myeditablediv" rows="11" cols="70"><?php echo $tours->description; ?></textarea>
			</div>
			<div class="form-group">
				<img style="height: 100px;" src="<?php echo "images/tourPackage/$tours->image"; ?>">
			</div>
			<div class="form-group row">
				<label for="permanent_address" class="col-md-2 col-form-label text-md-right">Profile Image <small style="color: red;">300*200 | Max 1MB</small></label>
				<div class="col-md-8">
					<input type="file" name="image" id="permanent_address" class="form-control" >
				</div>
			</div>
			<button type="update" name="update" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
		</form>
	</div>
	<div class="col-md-3"></div>
</div>
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=wey1ni6s7ndtb73g6647wncn0sqa13tu7c2gs0geo6cbwbc9"></script>
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