<?php

require_once __DIR__ .'/movie.php';

$movie1 = new movie ("Avatar", "Fantasy", "2922917914");

try {
    $movie1->setYear(208);
}catch (Exception $e) {
    echo "Eccezione:". $e->getMessage(). "<br>";
};


$movie1->setDuration(130);

echo $movie1->getMovieInfo();

$movie2 = new movie ("Avatar2","Fantasy", "1700000000");
$movie2->setYear(2022);
$movie2->setDuration(180);

echo $movie2->getMovieInfo();





?>