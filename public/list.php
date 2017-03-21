<?php 

//Include config.php
require dirname(dirname(__FILE__)).'/inc/config.php';

//Include other data
$headerH1 = 'My Movies List';




$sql = "

SELECT *
FROM films

";

//execute the query and save it in a variable
$films = $pdo->query($sql);

//fetchall results - without numbered index
$filmList = $films->fetchAll(PDO::FETCH_ASSOC);




//Include the views

include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/list.php';
include dirname(dirname(__FILE__)).'/view/footer.php';
