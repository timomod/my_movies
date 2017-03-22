
<?php 

//Include config.php
require dirname(dirname(__FILE__)).'/inc/config.php';

//Include other data
$headerH1 = '';

//GET Genres

$sql = "
SELECT * 
FROM  genres

";

//execute the query and save it in a variable
$genres = $pdo->query($sql);

//fetchall results - without numbered index
$genreList = $genres->fetchAll(PDO::FETCH_ASSOC);


//print_r($_POST);



/***********************************************************/
//Content check


//WARNING variables
$warningTitle = '';
$warningFirstname = '';
$warningDob = '';
$warningEmail = '';
$warningFriendliness = '';
$warningSessions = '';




//FILM VARIABLES

$title = '';
$genre =  '';
$plot =  '';
$relYear =  '';
$relMonth = ''; 
$relDay =  '';
$release =  '';
$runtime =  '';
$director =  '';
$actors =  ''; 
$country =  '';
$languages = ''; 
$poster =  '';






if(!empty($_POST)) {

 	//Form content for DB
 	$title = ucwords(strtolower($_POST['title']));
 	$genre = $_POST['genre'];
 	$plot = $_POST['plot'];
 	$release = $_POST['relYear'];
 	$runtime = $_POST['runtime'];
	$director =  $_POST['director'];
	$actors =  $_POST['actors'];
	$country = $_POST['country'];
	$languages = $_POST['languages'];
	$poster = $_POST['poster'];
	$formOk = true;


	//VERIFICATION
	// verifications here





	if ($formOk) {


		//ADD to DB.
		$sql = "
		INSERT INTO films (
		film_title, film_plot, film_release, film_runtime, film_director, film_actors, film_country, film_languages, film_poster) 

		VALUES (:title, :plot, :release, :runtime, :director, :actors, :country, :languages, :poster)

		";
		

		$filmData = $pdo->prepare($sql);

			$filmData->bindValue(':title', $title);
			$filmData->bindValue(':plot', $plot);
			$filmData->bindValue(':release', $release);
			$filmData->bindValue(':runtime', $runtime);
			$filmData->bindValue(':director', $director);
			$filmData->bindValue(':actors', $actors);
			$filmData->bindValue(':country', $country);
			$filmData->bindValue(':languages', $languages);
			$filmData->bindValue(':poster', $poster);
	

		$filmData->execute();
		


		//exit;
	}//if ($formOk)


};//if(!empty($_POST))




//Include the views

include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/add_edit.php';
include dirname(dirname(__FILE__)).'/view/footer.php';
