<?php


function render_template($template, $data = [])
{
    extract($data);
    require("templates/$template.php");
}

function get_data($url): array // le indicamos que la funciona debe devolver un array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string
{

    return match (true) {
        $days == 0 => "Hoy se estrena!",
        $days == 1 => "Mañana es el extreno",
        $days < 7  => "Esta semana se estrena!",
        $days < 30 => "Este mes se estrena!",
        default    => "Faltatn $days hasta el estreno!"
    };
}



$data = get_data(API_URL);
$until_message = get_until_message($data["days_until"]);


?>
<!-- <pre> <?php var_dump($data); ?> </pre> -->