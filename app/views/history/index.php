<div class="container content">
    <div class="row">
        <div class="col-12 col-lg-5">
            <h1>История версий</h1>
            <p>
                Тут хранятся старые версии системы. Можно своими глазами увидеть преображение Lusy.io
            </p>
        </div>
        <div class="col text-right">
            <img class="img-history" src="/public/images/history.jpg" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1 col-3 pr-0">
        </div>
        <div class="col-lg-11 col-12">
            <div class="vertical-line">
                <?php foreach ($versions as $item): ?>
                    <div class="row mb-3">
                        <div class="col-sm-7">
                            <span class="position-absolute" style="left: 3.5px;top: 11px;background-color: #ffffff;padding-bottom: 2px;padding-top: 2px;">
                                <i class="<?= $item['icon'] ?> fa-dot-circle <?= $item['iconColor'] ?>"></i>
                            </span>
                            <h2 class="d-inline-block ml-3"><span
                                        class="badge badge-soft-primary mt-n1">Lusy <?= $item['version']; ?></span>
                            </h2>
                            <span class="text-muted small date-history" ><?= $item['date']; ?></span>
                            <ul class="mt-2">
                                <?php
                                $news = explode("!", $item['news']);
                                $changes = explode("!", $item['changes']);
                                foreach ($news as $n) : ?>
                                    <li>
                                        <?= $n; ?><div class="badge badge-small badge-history text-white ml-2">Новое</div>
                                    </li>
                                <?php endforeach; ?>

                                <?php foreach ($changes as $n) : ?>
                                    <li><?= $n; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php if (!empty($item['img'])) : ?>
                            <div class="col-sm-5">
                                <img class="historyImg mb-5" src="/public/images/<?= $item['img']; ?>"/>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
