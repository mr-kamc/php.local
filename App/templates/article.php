<?php
require __DIR__ . '/../../autoload.php';
include __DIR__ . '/header.php';
?>
<body>
<header>
    <h1>Новости из малых Васюков.</h1>
</header>
<div id="sidebar">
    <ul>
        <a href="/">
            <li>Главная</li>
        </a>
        <a href="#">
            <li>Контакты</li>
        </a>
    </ul>
</div>
<div id="content">
    <?php
    $id = $_GET['id'];
    $article = \App\Models\News::findById($id);
    ?>
    <div class="article">
        <h2><?php echo $article[0]->caption; ?></h2>
        <p><?php echo $article[0]->text; ?></p>
        <h3><?php echo $article[0]->author; ?></h3>
    </div>
</div>
</body>
<?php
include __DIR__ . '/footer.php';
?>