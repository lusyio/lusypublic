<div class="container">
    <h1>Блог</h1>
    <!--article list-->
    <?php foreach ($articles as $article): ?>
        <!--article-->
        <div>
            <h3><?= $article['article_name']; ?></h3>
            <h4><?= $article['category']; ?></h4>
            <h5><?= date('d.m.Y', $article['publish_date']); ?></h5>
            <p><?= $article['description']; ?></p>
            <a href="/<?= $article['language']; ?>/article/<?= $article['url']; ?>">Читать далее</a>
        </div>
        <!--end article-->
    <?php endforeach; ?>
    <!--end articlelist-->
    <!--pagination-->
    <div style="text-align: center">
        <?php for ($i = 1; $i <= $pages; $i++): ?>
            <?php if ($i == $page): ?>
                <b><?= $i; ?></b>
            <?php else: ?>
                <a href="./<?= $i ?>"><?= $i ?></a>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
    <!--end pagination-->
</div>
