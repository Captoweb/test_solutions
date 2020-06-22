<?php require_once('init.php'); ?>
<?php include_once('nav.php'); ?>


<?php

$article = Database::getInstance()->query("SELECT * FROM article ORDER BY id DESC"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News feed</title>
</head>
<body>
<div class="header">
    <h1>Лента новостей</h1>
</div>
<div class="container main_news_container">
    <div class="row">

        <?php foreach($article->results() as $art):?>
        <div class="col-md-6">
            <div class="news">
                <a href="one_news.php?id=<?= $art->id;?>"><h2><?= $art->title;?></h2></a>
                <p><?= $art->time;?></p>
                <div><img src="<?= $art->images;?>" alt="picture"></div>
                <p class="preview"><?= $art->preview;?></p>
            </div>
        </div>
        <?php endforeach;?>

    </div>
</div>
</body>

</html>


