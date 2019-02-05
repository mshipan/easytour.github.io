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
			<form action="" method="post">
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
					<textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"></textarea>
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
<?php require 'master/footer.php'; ?>