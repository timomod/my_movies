




	<?php foreach($filmList as $film ) : ?>
		<div class="row">
			<div class="col-sm-2">
				<img src="<?= $film['film_poster'] ?>" width="100">
			</div>
			<div class="col-sm-8">
				<h2><?= $film['film_title'] ?></h2>
				<p><?= $film['film_plot']?></p>
			</div>
			<div class="col-sm-2">
				<p>Details</p> 
				<p>Edit</p>
			</div>
		</div>
	<?php endforeach ; ?>


		
		
	


