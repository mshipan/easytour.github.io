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
			<th scope="col">Package Name</th>
			<th scope="col">Hotel</th>
			<th scope="col">Tour Id</th>
			<th scope="col">Transaction ID</th>
			<th scope="col">Delete Action </th>
		</tr>
	</thead>
	<?php foreach ($booking as $key => $booking) { ?>
	<tbody>
		<tr>
			<th scope="row"><?php echo $booking->id; ?></th>
			<td> <?php echo $booking->full_name; ?></td>
			<td> <?php echo $booking->email; ?></td>
			<td> <?php echo $booking->phone; ?></td>
			<td> <?php echo $booking->package; ?></td>
			<td> <?php echo $booking->hotel_name; ?></td>
			<td> <?php echo $booking->tour_id; ?></td>
			<td> <?php echo $booking->txnid; ?></td>
			<td> <a href="all_booking.php?id=<?php echo $booking->id; ?>" class="btn btn-danger"> Delete</a></td>

		</tr>
	</tbody>
	<?php } ?>
</table>
<?php
	require 'master/footer.php';
?>