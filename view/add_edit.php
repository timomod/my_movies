

<!-- Foem uses "enctype="multipart/form-data" for image uploads -->
<div class="row">
	<!-- OMDb search-->
	<div class="col-sm-8 col-sm-offset-2 " >

		<form class="form-inline" method="get" >
			<div class="form-group">
				<label for="exampleInputName2">OMDb Search:</label>
				<input type="text" class="form-control" id="ombd" placeholder="Search movie database">
			</div>
			<button type="submit" class="btn btn-success">Search</button>
		</form><br>

	</div>
	<div class="col-sm-8 col-sm-offset-2 " >
	<hr>
	</div>
	<!-- MAIN FORM-->
	<div class="col-md-6 col-md-offset-2">
		<form id="movie_form" action="" method="post">		
			<input  class="form-control" type="text" name="title" placeholder="Movie Title" value="<?= $title ?>"><br>
			<select class="form-control" name="genre" value="<?= $genre ?>" >
				<option value="">--Genre--</option>
				<?php foreach ($genreList as  $genre) : ?>
					<option value="<?= $genre['gen_id'] ?>"> <?= $genre['gen_name'] ?> </option>
				<?php endforeach ; ?>
			</select><br>


			<textarea class="form-control" name="plot" form="movie_form" placeholder="Movie plot/description" rows="5" ><?= $plot ?></textarea>
			 <div class="form-group">
			 	<div class="row">
			 		<div class="col-sm-12"><h4>Release Date:</h4></div>
					
					<div class="col-sm-2">
						<select class="form-control" name="relDay" value="<?= $relDay ?>">
							<option value="">--Day--</option>
							<?php foreach (range(1, 31) as $day) : ?>
								<option value="<?= $day ?>"> <?= $day ?> </option>
							<?php endforeach ; ?>
						</select>
					</div>

					<div class="col-sm-2">
						<select class="form-control" name="relMonth" value="<?= $relMonth ?>">
							<option value="">--Month--</option>
							<?php foreach (range(1, 12) as $month) : ?>
								<option value="<?= $month ?>"> <?= $month ?> </option>
							<?php endforeach ; ?>
						</select>
					</div>

					<div class="col-sm-2">
						<select class="form-control" name="relYear" value="<?= $relYear ?>">
							<option value="">--Year--</option>
							<?php foreach (range(2017, 1900) as $year) : ?>
								<option value="<?= $year ?>"> <?= $year ?> </option>
							<?php endforeach ; ?>
						</select>
					</div>

				</div>
			</div>
			<input  class="form-control" type="number" name="runtime" placeholder="Runtime: in minutes." min="1" max="600" value="<?= $runtime ?>"><br>
			<input  class="form-control" type="text" name="director" placeholder="Director" value="<?= $director ?>"><br>
			<input  class="form-control" type="text" name="actors" placeholder="Actors. Separated by comma ','" value="<?= $actors ?>"><br>
			<input  class="form-control" type="text" name="country" placeholder="Country" value="<?= $country ?>"><br>
			<input  class="form-control" type="text" name="languages" placeholder="Language(s)" value="<?= $languages ?>"><br>
			<input  class="form-control" type="text" name="poster" placeholder="Poster. Link to movie poster" value="<?= $poster ?>"><br>
			<!-- SUBMIT -->
			<input type="submit" class="btn btn-success btn-block"  value="Submit">	
		</form>
	</div>
	<!-- POSTER IMAGE-->
	<div class=" col-md-2">
		<?php if(empty($poster)) : ?>
			<img src="http://placehold.it/200x300">
		<?php else : ?>
			<img src="<?= $poster ?>" width="200px" >
		<?php endif ; ?>

	</div>
</div>