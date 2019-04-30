<?php
session_start();
if ($_SESSION['user']!=1) {
	header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';
$confirm=Confirm_code::all();
?>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Code</th>
		</tr>
	</thead>
	<?php foreach ($confirm as $key => $confirm) { ?>
	<tbody>
		<tr>
			<th scope="row"><?php echo $confirm->id; ?></th>
			<td> <?php echo $confirm->Confirm_code; ?></td>
		</tr>
	</tbody>
	<?php } ?>
</table>
<?php
	require 'master/footer.php';
?>