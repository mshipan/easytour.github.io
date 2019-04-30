<?php
session_start();
if ($_SESSION['user']!=1) {
	header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';
$booking=Booking::all();
?>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col"> Name</th>
			<th scope="col">Email</th>
			<th scope="col">Phone</th>
			<th scope="col">Package Id</th>
			<th scope="col">Hotel Id</th>
			<th scope="col">Total Member</th>
			<th scope="col">National ID</th>
			<th scope="col">Delete Action </th>
			<th scope="col">Confirm Action </th>
		</tr>
	</thead>
	<?php foreach ($booking as $key => $booking) { ?>
	<tbody>
		<tr>
			<th scope="row"><?php echo $booking->id; ?></th>
			<td> <?php echo $booking->full_name; ?></td>
			<td> <?php echo $booking->email; ?></td>
			<td> <?php echo $booking->phone; ?></td>
			<td> <?php echo $booking->p_id; ?></td>
			<td> <?php echo $booking->hotel_id; ?></td>
			<td> <?php echo $booking->male+$booking->female+$booking->children; ?></td>
			<td> <?php echo $booking->nid; ?></td>
			<td> <a onclick="return confirm('Are you sure???')" href="deleteBooking.php?id=<?php echo $booking->id; ?>" class="btn btn-danger"> Delete</a></td>
			<td> <a onclick="return confirm('Are you sure???')" href="confirmBooking.php?id=<?php echo $booking->id; ?>" class="btn btn-info"> Confirm</a></td>
		</tr>
	</tbody>
	<?php } ?>
</table>
<?php
	require 'master/footer.php';
?>