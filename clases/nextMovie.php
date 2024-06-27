<?php
class NextMovie
{
    public function __construct(
        public $title,
        public $days_until,
        public $following_production,
        public $dias_hasta_la_proxima_peli,
        public $release_date,
        public $poster_url,
        public $overview
    ) {
    }

    public function get_until_message()
    {
        $days = $this->days_until;
        return match (true) {
            $days == 0 => "Hoy se estrena!",
            $days == 1 => "Mañana es el extreno",
            $days < 7  => "Esta semana se estrena!",
            $days < 30 => "Este mes se estrena!",
            default    => "Faltatn $days hasta el estreno!"
        };
    }

    public static function fetch_and_create_movie($api_url): NextMovie // devuelve una instancia de la propia clase de la pelicula
    {
        $result = file_get_contents($api_url);
        $data = json_decode($result, true);

        return new self(
            $data["title"],
            $data["days_until"],
            $data["following_production"]["title"] ?? "Desconocido",
            $data["following_production"]["days_until"],
            $data["release_date"],
            $data["poster_url"],
            $data["overview"]
        );
    }
    public function getData()
    {
        return get_object_vars($this);
    }
}
