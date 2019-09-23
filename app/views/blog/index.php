<div class="container mb-5 blog-list content">
    <h1 class="mt-5 text-dark">Блог</h1>
    <p class="mt-3 mb-4 text-dark">Пишем для вас полезные статьи по теме управления, маркетинга, продаж, чтобы повысить
        эффективность вашего
        бизнеса! Кстати, мы можем написать статью о вашем бизнесе - свяжитесь с нами по почте <a
                href="mailto:info@lusy.io" class="text-dark font-weight-bold">info@lusy.io</a> и мы вместе сделаем классный материал!</p>
    <div class="row">
        <!--article list-->
        <?php foreach ($articles as $article): ?>
            <!--article-->
            <div class="col-sm-4">
                <a href="/<?= $article['language']; ?>/blog/<?= $article['url']; ?>">
                    <div class="article mb-3">
                        <img src="/public/<?php if (!empty($article['img_small'])) {
                            echo 'upload/' . $article['img_small'];
                        } else {
                            echo 'images/default_small.jpg';
                        } ?>" title=" <?= $article['article_name']; ?>">
                        <div class="articleinside">
                            <h2 class="blog-text-title">
                                <?= $article['article_name']; ?>
                            </h2>
                            <div class="blog-info">
                                <p><?= $article['description']; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="articlefot text-secondary">
                            <?= $article['category'] . ' | ' . date("d.m.Y", $article['publish_date']); ?>
                        </div>
                    </div>
                </a>
            </div>
            <!--end article-->
        <?php endforeach; ?>
        <!--end articlelist-->
    </div>
    <!--pagination-->
    <div class="d-none" style="text-align: center">
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
