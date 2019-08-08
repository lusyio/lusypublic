<div class="container content">
    <h1>История версий</h1>

    <?php foreach ($versions as $item): ?>
        <div class="row mb-3">
            <div class="col-sm-7">
                <h2 class="d-inline-block"><span class="badge badge-soft-primary mt-n1"><?= $item['version']; ?></span>
                </h2>
                <span class="text-muted">– <?= $item['date']; ?></span>
                <ul>
                    <?php $changes = explode("!", $item['changes']);
                    foreach ($changes as $n) : ?>
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
