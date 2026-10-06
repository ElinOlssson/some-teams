<?php 
require __DIR__ . '/data.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start_sida</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <header>
         <h1>Some Teams</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
    </nav>
    </header>
    <main>
        <div class='fotball_box'><?php foreach($teams as $name => $team) { ?>
        <article class='fotball_card'>
            <h2><?= $name ?></h2>
            <p><?= $team['league']?></p>
            <p><?= $team['uefa-coefficient-ranking']?></p>
            <p><?= $team['league-position']?></p>
            <p><?= $team['city']?></p>
            <p><?= $team['url']?></p>
        </article>
        <?php } ?>
    </div>
</main>
</body>
</html>