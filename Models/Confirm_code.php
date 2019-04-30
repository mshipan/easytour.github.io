<?php
session_start();
if ($_SESSION['user']!=1) {
	header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';

	if (isset($_POST['submit'])) {
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$confirm_code=validator($_POST['confirm_code']);
	$blog=Confirm_code::create([
	'confirm_code' => $confirm_code,
	]);
	// $msg="Tour Package insert successfully!";
	echo '<script type="text/javascript">
	window.location = "security_code.php"
	</script >';
	}
}
?>
<form method="POST" action="">
	<td>
		<input type="text" name="confirm_code" placeholder="Enter Confirmation Code">
	</td>
	<td><button type="submit" name="submit" class="btn btn-info">Send Confirm Code</button></td>
</form>
<?php
	require 'master/footer.php';
?>