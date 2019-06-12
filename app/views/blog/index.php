<h1>Блог</h1>
<?php foreach ($articles as $article): ?>
<h3><?= $article['article_name']; ?></h3>
<p><?= $article['description']; ?></p>
<a href="blog/<?= $article['article_id']; ?>">Читать далее</a>
<?php endforeach; ?>
