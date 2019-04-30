<?php
session_start();
if ($_SESSION['user']!=1) {
	header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';
include '../function.php';

$id = $_GET['id'];
$hotel=HotelPackage::find($id);
if (isset($_POST['update'])) {
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		
		$hotelPackage=HotelPackage::find($id);
		
		echo $image=$hotelPackage->image;
		if (isset($_FILES['image'])) {
			$image = $_FILES['image']['name'];
			$temp_name = $_FILES['image']['tmp_name'];
			move_uploaded_file($temp_name, "images/hotelPackage/$image");
		}
		

		$hotelPackage->update([
		'hotel_name' => $_POST['hotel_name'],
		'package_name' => $_POST['package_name'],
		'days' =>$_POST['days'] ,
		'night' => $_POST['night'] ,
		'city' => $_POST['city'] ,
		'country' => $_POST['country'] ,
		'amount' => $_POST['amount'] ,
		'description' => $_POST['description'] ,
		'image' => $image,
		]);
		$msg="Hotel Package insert successfully!";
		echo '<script type="text/javascript">
		window.location = "allHotelPackage.php"
		</script>';
	}
}

?>
<div class="row" style="padding-top: 20px;">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h2> Here Add Hotel Details</h2>
			<hr>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input name="id" type="hidden" class="form-control" value="<?php echo $hotel->id; ?>">
				</div>
				<div class="form-group">
					<label>Hotel Name</label>
					<input name="hotel_name" type="text" class="form-control" value="<?php echo $hotel->hotel_name; ?>">
				</div>
				<div class="form-group">
					<label>Package Name</label>
					<input name="package_name" type="text" class="form-control" value="<?php echo $hotel->package_name; ?>">
				</div>
				<div class="form-group">
					<label>City</label>
					<input name="city" type="text" class="form-control" value="<?php echo $hotel->city; ?>">
				</div>
				<div class="form-group">
					<label>Country</label>
					<input name="country" type="text" class="form-control" value="<?php echo $hotel->country; ?>">
				</div>
				<div class="form-group">
					<label>Days</label>
					<input name="days" type="text" class="form-control" value="<?php echo $hotel->days; ?>">
				</div>
				<div class="form-group">
					<label>Night</label>
					<input name="night" type="text" class="form-control" value="<?php echo $hotel->night; ?>">
				</div>
				<div class="form-group">
					<label>Amount</label>
					<input name="amount" type="text" class="form-control" value="<?php echo $hotel->amount; ?>">
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea name="description" rows="11" cols="70"><?php echo $hotel->description; ?></textarea>
				</div>
				<div class="form-group">
					<img style="height: 100px;" src="<?php echo "images/hotelPackage/$hotel->image"; ?>">
				</div>
				<div class="form-group row">
					<label for="permanent_address" class="col-md-2 col-form-label text-md-right">Profile Image <small style="color: red;">300*200 | Max 1MB</small></label>
					<div class="col-md-8">
						<input type="file" name="image" id="permanent_address" class="form-control" >
					</div>
				</div>
				<button type="submit" name="update" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>

	<?php require 'master/footer.php'; ?>