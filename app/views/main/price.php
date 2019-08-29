<div class="container pb-5 content">
    <h1 class="text-center mb-5">Стоимость</h1>

    <div class="row payBack">
        <div class="col-sm-10 col-10 offset-1 offset-right-1 col-lg-4 col-md-5 offset-lg-2 offset-md-1">
            <div class="card Card freeCard text-center mb-3 mt-5">
                <div class="card-body">
                    <p class="tariff">Бесплатный тариф</p>
                    <p class="priceTariff">0 руб.</p>
                    <div class="mt-5">
                        <ul class="checkUl">
                            <li>Неограниченное число сотрудников</li>
                            <li>Система достижений</li>
                            <li>Система диалогов</li>
                            <li class="minus">Файловый менеджер (100 мб)</li>
                            <li class="minus">Детальные отчеты (3 отчета в месяц)</li>
                            <li class="minus">Максимум 150 задач в месяц</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-10 offset-1 offset-right-1 col-lg-4 col-md-5 offset-md-0">
            <div class="card Card premiumCard text-center mb-3">
                <div class="card-body">
                    <p class="tariff text-gold font-weight-bold">Premium тариф</p>
                    <p class="priceTariff mb-0">249 руб.</p>
                    <p class="small">в месяц</p>
                    <div class="mt-5">
                        <ul class="checkUl">
                            <li>Все, что есть в бесплатном тарифе</li>
                            <li>Неограниченное количество задач</li>
                            <li>Неограниченное количество отчетов</li>
                            <li>Файловый менеджер (1024 мб)</li>
                            <li>Интеграция с Google Drive и DropBox</li>
                            <li>Расширенные настройки задач (отложенный старт, подзадачи, чек-листы, редактирование
                                существующих
                                задач)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-10 col-10 offset-1 offset-sm-1 col-md-4 offset-md-1 col-lg-4 offset-lg-2">
            <p class="lead-text-under text-left">Перед нами были задача сделать полноценный бесплатный тариф и это
                удалось</p>
        </div>
        <div class="col-sm-10 col-10 offset-1 offset-sm-1 col-md-4 offset-md-1 col-lg-4 offset-lg-0">
            <p class="lead-text-under text-left">Но, когда вы перерастете бесплатный тариф, то переход на Premium тариф
                будет легким</p>
        </div>
    </div>

    <div class="justify-content-center mt-5">
        <form id="regForm2" method="post" action="https://s.lusy.io/reg/">
            <div class="input-group mb-5 mt-3 formreg m-auto">
                <input type="text" name="email" class="form-control" placeholder="your_mail@domain.com"
                       aria-label="your_mail@domain.com" aria-describedby="button-addon2" data-toggle="tooltip" data-placement="bottom" title="Введен неверный email">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="button-addon2">Попробовать бесплатно</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row mt-5">
        <div class="mt-5 col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-10 col-10 offset-1 offset-sm-1">
            <hr>
            <p class="small text-secondary">Оплата тарифного плана происходит путем автоплатежа - автоматического
                списания
                суммы средств с периодичностью,
                соответствующей выбранному тарифу. Подписку можно отменить в любой момент. Более подробнее читайте в <a
                        href="https://lusy.io/licenzionnoe-soglashenie-dogovor-publichnoj-oferty.pdf"
                        class="btn-link" target="_blank">Оферте
                    рекуррентных
                    платежей</a>.</p>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var securityMail = 0;

        $('[name=email]').tooltip('disable');

        $('[name=email]').on('keyup', function () {
            var $this = $(this);

            var email = $this.val();
            var regMail = /^[0-9a-z-\.]+\@[0-9a-z-]{1,}\.[a-z]{2,}$/i;
            var checkMail = regMail.exec(email);

            if (checkMail == null) {
                $this.css({
                    'border': '1px solid #fbc2c4',
                    'color': '#8a1f11'
                });
                securityMail = 0;
            } else {
                $this.css({
                    'border': '1px solid #ccc',
                    'color': '#495057'
                });
                securityMail = 1;
            }
        });

        $('#button-addon2').on('click', function (e) {
            e.preventDefault();
            if (securityMail == 1) {
                $('#spinnerRegModal').modal('show');
                $('#regForm2').submit();
            } else {
                e.preventDefault();
                $(this).parents('form').find('[name=email]').tooltip('enable').tooltip('show');
                $(this).parents('form').find('[name=email]').css({
                    'border': '1px solid #fbc2c4',
                    'color': '#8a1f11'
                });
                setTimeout(function () {
                    $('[name=email]').tooltip('disable').tooltip('hide');
                }, 2000);
            }
        });
    });

</script>