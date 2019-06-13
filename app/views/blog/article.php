<div class="container">
    <h1><?= $article['article_name']; ?></h1>
    <h3><?= $article['category']; ?></h3>
    <h5><?= date('d.m.Y', $article['publish_date']); ?></h5>
    <?= $article['article_text']; ?>
</div>

