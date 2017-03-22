

<!-- Foem uses "enctype="multipart/form-data" for image uploads -->
<div class="row">
	<!-- OMDb SEARCH-->
	<div class="col-sm-8 col-sm-offset-2 " >

		<form id="ombd" class="form-inline" method="get" >
			<div class="form-group">
				<label for="exampleInputName2">OMDb Search:</label>
				<input type="text" name="movieSearch" id="movieSearch" class="form-control"  placeholder="Movie name here...">
			</div>
			<button type="submit" class="btn btn-success">Search OMBd databse</button>
		</form><br>

	</div>
	<div class="col-sm-8 col-sm-offset-2 " >
	<hr>
	</div>
	<!-- MAIN FORM-->
	<div class="col-md-6 col-md-offset-2">
		<form id="movie_form" action="" method="post">
			<!-- TITLE -->		
			<input id="title" class="form-control" type="text" name="title" placeholder="Movie Title" value="<?= $title ?>"><br>
			<!-- GENRE -->	
			<select class="form-control" name="genre" value="<?= $genre ?>" >
				<option value="">--Genre--</option>
				<?php foreach ($genreList as  $genre) : ?>
					<option value="<?= $genre['gen_id'] ?>"> <?= $genre['gen_name'] ?> </option>
				<?php endforeach ; ?>
			</select>
			<!-- display Suggested genres -->
			<span id="genre"></span>
			<br>

			<!-- PLOT -->	
			<textarea id="plot" class="form-control" name="plot" form="movie_form" placeholder="Movie plot/description" rows="5" ><?= $plot ?></textarea>
			<!-- RELEASE DATE -->	
			 <div class="form-group">
			 	<div class="row">
			 		<div class="col-sm-12"><h4>Release Date:</h4></div>
					
					<!-- YEAR -->	
					<div class="col-sm-6">
						<select id="release" class="form-control" name="relYear" value="<?= $relYear ?>">
							<option value="">--Year--</option>
							<?php foreach (range(2017, 1900) as $year) : ?>
								<option value="<?= $year ?>"> <?= $year ?> </option>
							<?php endforeach ; ?>
						</select>
					</div>

				</div>
			</div>
			<!-- RUNTIME -->	
			<input id="runtime" class="form-control" type="text" name="runtime" placeholder="Runtime: in minutes."" value="<?= $runtime ?>"><br>
			<!-- DIRECTOR -->	
			<input id="director" class="form-control" type="text" name="director" placeholder="Director" value="<?= $director ?>"><br>
			<!-- ACTORS -->	
			<input id="actors"  class="form-control" type="text" name="actors" placeholder="Actors. Separated by comma ','" value="<?= $actors ?>"><br>
			<!-- COUNTRY -->	
			<input id="country" class="form-control" type="text" name="country" placeholder="Country" value="<?= $country ?>"><br>
			<!-- LANGUAGES -->	
			<input id="language" class="form-control" type="text" name="languages" placeholder="Language(s)" value="<?= $languages ?>"><br>
			<!-- POSTER -->	
			<input id="poster" class="form-control" type="text" name="poster" placeholder="Poster. Link to movie poster" value="<?= $poster ?>"><br>
			<!-- SUBMIT -->
			<input type="submit" class="btn btn-success btn-block"  value="Submit">	
		</form>
	</div>
	<!-- POSTER IMAGE-->
	<div id="omdb_poster" class=" col-md-2">
		<?php if(empty($poster)) : ?>
			<img  src="http://placehold.it/200x300">
		<?php else : ?>
			<img src="<?= $poster ?>" width="200px" >
		<?php endif ; ?>

	</div>
</div>