<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php include_once('header.php') ?>
<div class="container">
	<h3>View All Post</h3>
	<?php if ($msg = $this->session->flashdata('msg')) : ?>
		<?php echo $msg; ?>
	<?php endif; ?>
	<?php echo anchor('welcome/create', 'Add post', ['class' => 'btn btn-primary']); ?>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Title</th>
				<th>Description</th>
				<th>Creation Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php if (count($posts)) : ?>
				<?php foreach ($posts as $post) : ?>
					<tr>
						<th><?php echo $post->title; ?></th>
						<td><?php echo $post->descriptions; ?></td>
						<td><?php echo $post->date_created; ?></td>
						<td><?php echo anchor("welcome/view/{$post->id}", 'View', ['class' => 'badge bg-primary']); ?>
							<?php echo anchor("welcome/update/{$post->id}", 'Update', ['class' => 'badge rounded-pill bg-success']); ?>
							<?php echo anchor("welcome/delete/{$post->id}", 'Delete', ['class' => 'badge rounded-pill bg-danger']); ?>
						</td>
					</tr>

				<?php endforeach; ?>

			<?php else : ?>
				<td>No Records Found!</td>
			<?php endif; ?>
		</tbody>
	</table>
</div>

<?php include_once('footer.php') ?>