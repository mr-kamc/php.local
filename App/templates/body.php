<body>
<header>
<h1>Новости из малых Васюков.</h1>
</header>
<div id="sidebar">
    <ul>
        <a href="#"><li>Главная</li></a>
        <a href="#"><li>Контакты</li></a>
    </ul>
</div>
<div id="content">
    <?php foreach ($news as $article): ?>
        <div class="article">
            <h2><?php echo $article->caption; ?></h2>
            <p><?php echo $article->text; ?></p>
            <h3><?php echo $article->author; ?></h3>
        </div>
    <?php endforeach; ?>

</div>
</body>
