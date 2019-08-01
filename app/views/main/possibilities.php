<div class="container content">
    <h1>Возможности</h1>
    <img class="w-100 main-img mb-3" src="/public/images/lusy.jpg" alt="Lusy" title="Lusy">
    <div class="possibli mt-5">
        <div class="row mb-3">
<?php foreach ($possibilities as $item): ?>
            <div class="col-sm-4">
                <div class="d-flex">
                    <i class="<?= $item['icon']; ?>"></i>
                    <p><?= $item['text']; ?></p>
                </div>
            </div>
<?php endforeach; ?>
        </div>

    </div>
</div>