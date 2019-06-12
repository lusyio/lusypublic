<h1>Блог</h1>
<?php foreach ($articles as $article): ?>
    <h3><?= $article['article_name']; ?></h3>
    <h4><?= $article['category']; ?></h4>
    <h5><?= date('d.m.Y', $article['publish_date']); ?></h5>
    <p><?= $article['description']; ?></p>
    <a href="../article/<?= $article['article_id']; ?>">Читать далее</a>
<?php endforeach; ?>
<br>
<center>
    <?php for ($i = 1; $i <= $pages; $i++): ?>
        <?php if ($i == $page): ?>
            <b><?= $i; ?></b>
        <?php else: ?>
            <a href="./<?= $i ?>"><?= $i ?></a>
        <?php endif; ?>
    <?php endfor; ?>
</center>