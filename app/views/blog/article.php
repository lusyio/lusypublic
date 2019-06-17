<div class="container article-text">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="font-weight-bold mt-5 mb-3"><?= $article['article_name']; ?></h1>
            <small><?= $article['category']; ?> | <?= date('d.m.Y', $article['publish_date']); ?></small>
        </div>
    </div>
    <img src="/public/<?php if (!empty($article['img_full'])) {
        echo 'upload/' . $article['img_full'];
    } else {
        echo 'images/default_full.jpg';
    } ?>" class="w-100 mt-3 mb-4" title="<?= $article['article_name']; ?>">

    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <?= $article['article_text']; ?>
        </div>
    </div>
</div>

