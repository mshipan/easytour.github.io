<?php
session_start();
if ($_SESSION['user']!=1) {
	header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';
$payment=Payment::all();
?>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Operator</th>
			<th scope="col">Amount</th>
			<th scope="col">txnid</th>
		</tr>
	</thead>
	<?php foreach ($payment as $key => $payment) { ?>
	<tbody>
		<tr>
			<th scope="row"><?php echo $payment->id; ?></th>
			<td> <?php echo $payment->operator; ?></td>
			<td> <?php echo $payment->amount; ?></td>
			<td> <?php echo $payment->txnid; ?></td>
		</tr>
	</tbody>
	<?php } ?>
</table>
<?php
	require 'master/footer.php';
?>