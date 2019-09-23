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
        <p>
            Участвуйте также в нашей партнерской программе
            Ваше вознаграждение выплачивается с каждой оплаты хостинга клиентом, которого вы привели, в том числе с
            оплаты продлений.
        </p>
    </div>
    <div class="tab-pane" id="rules" role="tabpanel" aria-labelledby="rulesTab">
        <p>
            Участвуйте также в нашей партнерской программе
            Участвуйте также в нашей партнерской программе
            Ваше вознаграждение выплачивается с каждой оплаты хостинга клиентом, которого вы привели, в том числе с
            оплаты продлений.
        </p>
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
