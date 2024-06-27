<?php
require('sections/constantes.php');
require('functions.php');
require('clases/nextMovie.php');

$next_movie = NextMovie::fetch_and_create_movie(API_URL);

// require('sections/head.php');
render_template('head', $data);

// require('sections/main.php');



render_template('main', array_merge(
    $data,
    ["until_message" => $until_message]
));





require('sections/styles.php');
