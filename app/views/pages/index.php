<?php
	require APProot.'/views/partials/header.php'; ?>
<h3>  <?php
		echo "welkom to: ".$data['title'] ?> Homepage </h3>
<ul>
	<?php foreach($data['posts'] as $posts) : ?>
	<li><h3><?php echo $posts->title .'<br/>'?></h3></li>
		<li><p><strong><?php echo $posts->content .'<br/>'?></p></li>
		<li><small><em><?php echo $posts->post_date .'<br/>'?></em></small></li>

	<?php endforeach; ?>
</ul>


<?php
	require APProot.'/views/partials/footer.php'; ?>

