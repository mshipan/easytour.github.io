<?php
session_start();
if ($_SESSION['user']!=1) {
	header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';
$users=User::all();
foreach ($users as $key => $user) {
	
?>
<div class="col-md-4" style="float: left;">
	<aside class="profile-nav alt">
		<section class="card">
			<div class="card-header user-header alt bg-dark">
				<div class="media">
					<a href="#">
						<img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="<?php echo 'admin/images/users/'.$user->image; ?>">
					</a>
					<div class="media-body">
						<p class="lead text-success" ><?php echo $user->name; ?></p>
						<p><?php $role_name=Role::where('id','=',$user->role_id)->value('name');echo $role_name; ?></p>
					</div>
				</div>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<a href="#"> <i class="fa fa-envelope-o"></i> <?php echo $user->email; ?>
					</li>
					<li class="list-group-item">
						<a href="#"> <i class="fa fa-phone"></i> <?php echo $user->phone; ?>
						</li>
						<li class="list-group-item">
							<a href="#"> <i class="fa fa-info"> </i> <?php echo $user->village; ?> ,<?php echo $user->village; ?> ,<?php echo $user->upozila; ?>-<?php echo $user->zip_code; ?> ,<?php echo $user->district; ?>
							</li>
						</ul>
					</section>
				</aside>
			</div>
			<?php
			}
			require 'master/footer.php';
			?>