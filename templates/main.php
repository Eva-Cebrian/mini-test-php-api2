<body>
    <main>

        <h1>La proxima peli de Marvel</h1>
        <h2>TITULO: <?php echo $title ?></h2>
        <h3><?= $days_until ?> dias hasta el estreno!!</h3>
        <p>La peli va de: <?php echo $data["overview"] ?></p>
        <p>Sabes cuando se estrena la peli??!!: <?php echo $until_message ?></p>
        <br>
        <p>La siguiente pelicula es: <?php echo $following_production ?> y quedan <?php echo $dias_hasta_la_proxima_peli ?> dias para que se estrene</p>

        <section> <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de la peli"></section>
    </main>
</body>