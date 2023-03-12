<?php


	require APProot.'/views/partials/header.php'; ?>
<?php
	flash('post_message'); ?>
<div class="row mb-3">
	<div class="col-md-6">
		<h1>Posts</h1>

	</div>
	<div class="col-md-6">
		<a href="<?php
			echo URLroot; ?>/posts/add" class="btn btn-primary float-end">
			<i class="fa-solid fa-plus"></i> Add Post
		</a>
	</div>
</div>
<?php
	foreach ($data['posts'] as $post) : ?>
		<div class="card card-body mb-3">
			<h4 class="card-title"><?php
					echo $post->title; ?></h4>

			<div class="bg-light p-2 mb-3">
				<small><em>Written by <?php
							echo $post->name; ?> on <?php
							echo $post->postCreated; ?></em></small>
			</div>
			<p class="card-text"><?php
					echo $post->body; ?></p>
			<a href="<?php
				echo URLroot; ?>/posts/show/<?php
				echo $post->postId; ?>" class="btn btn-dark col-md-3
			float-end">More</a>
		</div>
	<?php
	endforeach; ?>

<?php
	require APProot.'/views/partials/footer.php'; ?>
