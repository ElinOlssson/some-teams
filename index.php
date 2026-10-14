<?php
require __DIR__ . '/data.php';
require_once __DIR__ . '/header.php';
?>


<main>
    <div class='card_structure'><?php foreach ($teams as $name => $team) : ?>
            <article class='card_body'>
                <h2><?= $name ?></h2>
                <img src="<?= $team['logo'] ?>" alt="<?= $name ?>">
                <div class="card_background">
                    <p>
                        <span>Liga: </span>
                        <strong><?= $team['league'] ?></strong>
                    </p>

                    <p>
                        <span>Ranking: </span>
                        <strong><?= $team['uefa-coefficient-ranking'] ?></strong>
                    </p>

                    <p>
                        <span>Position: </span>
                        <strong><?= $team['league-position'] ?></strong>
                    </p>

                    <p>
                        <span>City: </span>
                        <strong><?= $team['city'] ?></strong>
                    </p>
                    </br>
                    <a href="<?= $team['url'] ?>">Teampage</a>
                </div>
            </article>
        <?php endforeach ?>
    </div>
</main>
</body>

</html>