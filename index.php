<?php 
require __DIR__ . '/data.php';
require_once __DIR__ . '/header.php';
?>


    <main>
        <div class='fotball_box'><?php foreach($teams as $name => $team) { ?>
        <article class='fotball_card'>
            <h2><?= $name ?></h2>
            <p><?= $team['league']?></p>
            <p><?= $team['uefa-coefficient-ranking']?></p>
            <p><?= $team['league-position']?></p>
            <p><?= $team['city']?></p>
            <p><?= $team['url']?></p>
            <img src="<?= $team['logo'] ?>" alt="<?= $name ?>">
        </article>
        <?php } ?>
    </div>
</main>
</body>
</html>