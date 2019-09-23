<div class="container content">
    <div class="row">
        <div class="col-10 offset-1">
            <h1 class="text-center pb-3">
                Партнерская программа
            </h1>
            <ul class="nav nav-pills navs-lusy nav-fill mt-5" id="tabLusy" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="infoTab" data-toggle="tab" href="#info" role="tab"
                       aria-controls="info" aria-selected="true">Информация о программе</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="waysTab" data-toggle="tab" href="#ways" role="tab" aria-controls="ways"
                       aria-selected="true">Способы продвижения</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="rulesTab" data-toggle="tab" href="#rules" role="tab" aria-controls="rules"
                       aria-selected="true">Правила</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="marketingTab" data-toggle="tab" href="#marketing" role="tab"
                       aria-controls="marketing" aria-selected="true">Маркетинговые материалы</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="tab-content" id="tabLusyContent">
    <div class="tab-pane show active" id="info" role="tabpanel" aria-labelledby="infoTab">
        <p>
            Участвуйте также в нашей партнерской программе
            Ваше вознаграждение выплачивается с каждой оплаты хостинга клиентом, которого вы привели, в том числе с
            оплаты продлений.
            Ваше вознаграждение выплачивается с каждой оплаты хостинга клиентом, которого вы привели, в том числе с
            оплаты продлений.
        </p>
    </div>
    <div class="tab-pane" id="ways" role="tabpanel" aria-labelledby="waysTab">
        <img src="/public/images/partners-ways.jpg" alt="">
        <h5 class="mt-5">
            Всё просто:
        </h5>
        <p>
            Вы рассказываете о Lusy.io, ставите ссылки, размещаете кнопки, пишете в блогах, и Lusy.io делится с вами
            premium-доступом от каждой проверенной компании. На странице партнерство вы найдете всю информацию по
            вознаграждению.
        </p>
        <p>
            Вы получаете ссылку со специальным кодом и промокод. Используйте ее в ваших рекомендациях. Когда человек
            регистрируется по
            этой ссылке, мы знаем — этот пользователь от вас.
        </p>
        <p>
            Вы также можете самостоятельно создать промокод на 10% скидку в нашей веб-студии. Скидка действует при
            определенных условиях.
        </p>
    </div>
    <div class="tab-pane" id="rules" role="tabpanel" aria-labelledby="rulesTab">
        <img src="/public/images/partners-rules.jpg" style="max-width: 74.5%;display: block;margin: auto" alt="">
        <div>
            <div class="partners-li">
                1
            </div>
            <span>
                Premium-доступ дается только за ту компанию, которая прошла специальноую проверку на активность
            </span>
        </div>
        <div class="mt-3">
            <div class="partners-li">
                2
            </div>
            <span>
                Premium-доступ дается только за ту компанию, которая прошла специальноую проверку на активность
            </span>
        </div>
        <div class="mt-3">
            <div class="partners-li">
                3
            </div>
            <span>
                Premium-доступ дается только за ту компанию, которая прошла специальноую проверку на активность
            </span>
        </div>
    </div>
    <div class="tab-pane" id="marketing" role="tabpanel" aria-labelledby="marketingTab">
        <p>
            Участвуйте также в нашей партнерской программе
            Участвуйте также в нашей партнерской программе
            Ваше вознаграждение выплачивается с каждой оплаты хостинга клиентом, которого вы привели, в том числе с
            оплаты продлений.
            Ваше вознаграждение выплачивается с каждой оплаты хостинга клиентом, которого вы привели, в том числе с
            оплаты продлений.
        </p>
    </div>
</div>

<script>
    $(document).ready(function () {
        var pathname = window.location.href;
        if (pathname.indexOf('waystab') > -1) {
            $('#waysTab').trigger('click');
        }
        if (pathname.indexOf('marketingtab') > -1) {
            $('#marketingTab').trigger('click');
        }
        if (pathname.indexOf('rulestab') > -1) {
            $('#rulesTab').trigger('click');
        }
    })
</script>
