<?php require_once('../init.php'); ?>
<?php include_once('admin_nav.php'); ?>

<?php

$article = Database::getInstance()->query("SELECT * FROM article ORDER BY id DESC");

?>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<body>

<section class="admin">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>Админ панель</h2>
                <a href="create_news.php" class="btn btn-success create">Добавить новость</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Дата</th>
                        <th>Фото</th>
                        <th>Заголовок</th>
                        <th>Анонс</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <?php foreach($article->results() as $art):?>
                        <tbody>
                        <tr>
                            <td><?= $art->id;?></td>
                            <td><?= $art->time;?></td>
                            <td class="mini_img"><img src="../<?= $art->images;?>" alt="picture"></td>
                            <td><?= $art->title;?></td>
                            <td><?= $art->preview;?></td>
                            <td>
                                <a href="show_news.php?id=<?= $art->id;?>" class="btn btn-info">show</a>
                                <a href="edit_news.php?id=<?= $art->id;?>" class="btn btn-warning">edit</a>
                                <a href="delete_news.php?id=<?= $art->id;?>" class="btn btn-danger" onclick="return confirm('Вы уверены?');">del</a>
                            </td>
                        </tr>
                        </tbody>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>

</section>
</body>
