<?php
session_start();
if ($_SESSION['user']!=1) {
	header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';
$tours=TourPackage::all();
?>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Tour Name</th>
			<th scope="col">City</th>
			<th scope="col">Country</th>
			<th scope="col">Amount</th>
			<th scope="col">Edit Action</th>
			<th scope="col">Delete Action</th>
		</tr>
	</thead>
	<?php foreach ($tours as $key => $tour) { ?>
	<tbody>
		<tr>
			<th scope="row"><?php echo $tour->id; ?></th>
			<td> <?php echo $tour->tour_name; ?></td>
			<td> <?php echo $tour->city; ?></td>
			<td> <?php echo $tour->country; ?></td>
			<td> <?php echo $tour->amount; ?></td>
			<td> <a href="editTourPackage.php?id=<?php echo $tour->id; ?>" class="btn btn-info">Edit</a></td>
			<td> <a href="allTourlPackage.php?id=<?php echo $tour->id; ?>" class="btn btn-danger"> Delete</a></td>
		</tr>
	</tbody>
	<?php } ?>
</table>
<?php
	require 'master/footer.php';
?>