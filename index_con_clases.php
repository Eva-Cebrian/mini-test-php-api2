<?php
require('sections/constantes.php');
require('functions.php');
require('clases/nextMovie.php');
require('sections/styles.php');

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->getData();


render_template('head', $next_movie_data);




render_template('main', array_merge(
    $next_movie_data,
    ["until_message" => $until_message]
));
