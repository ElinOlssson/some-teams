<?php 
require __DIR__ . '/data.php';
require_once __DIR__ . '/header.php';
?>


    <main>
        <div class='fotball_box'><?php foreach($teams as $name => $team) { ?>
        <article class='fotball_card'>
            <h2><?= $name ?></h2>
            <p>Team: <?= $team['league']?></p>
            <p>Ranking: <?= $team['uefa-coefficient-ranking']?></p>
            <p>Position: <?= $team['league-position']?></p>
            <p>City: <?= $team['city']?></p>
            <a href="<?= $team['url']?>">Teampage</a>
            <img src="<?= $team['logo'] ?>" alt="<?= $name ?>">
        </article>
        <?php } ?>
    </div>
</main>
</body>
</html>