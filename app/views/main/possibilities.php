<div class="container content">
    <h1>Возможности</h1>
    <img class="w-100 main-img mb-3" src="/public/images/lusy.jpg" alt="Lusy" title="Lusy">
    <div class="possibli mt-5">
<?php $itemCounter = 0; // Счетчик элементов?>
<?php foreach ($possibilities as $item): ?>
    <?php if ($itemCounter % 3 == 0): // Открывающий row-див, перед элементами, кратными 3?>
        <div class="row mb-4">
    <?php endif; ?>
            <div class="col-sm-4">
                <div class="d-flex">
                    <i class="<?= $item['icon']; ?> fa-fw"></i>
                    <p><?= $item['text']; ?></p>
                </div>
            </div>
    <?php if (($itemCounter + 1) % 3 == 0 || $itemCounter == count($possibilities)): // Закрывающий row-див если в ряду есть 3 или сейчас последний элемент?>
        </div>
    <?php endif; ?>
    <?php $itemCounter++; ?>
<?php endforeach; ?>

    </div>

    </div>
</div>