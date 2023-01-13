<?php

require_once __DIR__ .'/movie.php';

$movie1 = new movie ("Avatar", "Fantasy", "2922917914");
$movie1->setYear(2010);
$movie1->setDuration(130);

echo $movie1->getMovieInfo();

$movie2 = new movie ("Avatar2","Fantasy", "1700000000");
$movie2->setYear(2022);
$movie2->setDuration(180);

echo $movie2->getMovieInfo();





?>