<div class="container mb-5 article-text content" itemscope itemtype="https://schema.org/Article">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 itemprop="name"><?= $article['article_name']; ?></h1>
            <small class="text-dark"><span itemprop="articleSection"><?= $article['category']; ?></span> | <?= date('d.m.Y', $article['publish_date']); ?><span itemprop="datePublished" class="d-none"><?= date('Y-m-d', $article['publish_date']); ?></span></small>
        </div>
    </div>
    <img src="/public/<?php if (!empty($article['img_full'])) {
        echo 'upload/' . $article['img_full'];
    } else {
        echo 'images/default_full.jpg';
    } ?>" class="w-100 mt-3 mb-4" title="<?= $article['article_name']; ?>" itemprop="image">

    <div class="row">
        <div class="col-sm-8 offset-sm-2" itemprop="articleBody">
            <?= $article['article_text']; ?>
        </div>
    </div>
</div>

