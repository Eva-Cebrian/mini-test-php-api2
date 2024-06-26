<body>
    <main>

        <h1>La proxima peli de Marvel</h1>
        <h2>TITULO: <?php echo $data["title"] ?></h2>
        <h3><?= $data["days_until"] ?> dias hasta el estreno!!</h3>
        <p>La peli va de: <?php echo $data["overview"] ?></p>
        <p>Sabes cuando se estrena la peli??!!: <?php echo $untilMessage ?></p>

        <section> <img src="<?= $data["poster_url"]; ?>" width="300" alt=""></section>
    </main>
</body>