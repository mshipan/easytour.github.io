<?php
session_start();
if ($_SESSION['user']!=1) {
	header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';
$hotel=HotelPackage::all();
?>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Hotel Name</th>
			<th scope="col">Package Name</th>
			<th scope="col">City</th>
			<th scope="col">Country</th>
			<th scope="col">Amount</th>
			<th scope="col">Edit Action</th>
			<th scope="col">Delete Action</th>
		</tr>
	</thead>
	<?php foreach ($hotel as $key => $hotel) { ?>
	<tbody>
		<tr>
			<th scope="row"><?php echo $hotel->id; ?></th>
			<td> <?php echo $hotel->hotel_name; ?></td>
			<td> <?php echo $hotel->package_name; ?></td>
			<td> <?php echo $hotel->city; ?></td>
			<td> <?php echo $hotel->country; ?></td>
			<td> <?php echo $hotel->amount; ?></td>
			<td> <a href="editHotelPackage.php?id=<?php echo $hotel->id; ?>" class="btn btn-info">Edit</a></td>
			<td> <a onclick="return confirm('Are you sure???')"  href="deletehotel.php?id=<?php echo $hotel->id; ?>" class="btn btn-danger"> Delete</a></td>
		</tr>
	</tbody>
	<?php } ?>
</table>
<?php
	require 'master/footer.php';
?>