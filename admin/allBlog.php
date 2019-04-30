<?php
session_start();
if ($_SESSION['user']!=1) {
	header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';
$blog=Blog::all();
?>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Image</th>
			<th scope="col">Edit Action</th>
			<th scope="col">Delete Action</th>
		</tr>
	</thead>
	<?php foreach ($blog as $key => $blog) { ?>
	<tbody>
		<tr>
			<th scope="row"><?php echo $blog->id; ?></th>
			<td> <?php echo $blog->blog_name; ?></td>
			<td><div class="form-group">
					<img style="height: 100px;" src="<?php echo "images/blog/$blog->image"; ?>">
				</div>
			</td>
			<td> <a href="editblog.php?id=<?php echo $blog->id; ?>" class="btn btn-info">Edit</a></td>
			<td> <a onclick="return confirm('Are you sure???')" href="deleteblog.php?id=<?php echo $blog->id; ?>" class="btn btn-danger"> Delete</a></td>
		</tr>
	</tbody>
	<?php } ?>
</table>
<?php
	require 'master/footer.php';
?>