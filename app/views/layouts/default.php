<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/custom.css?ver=14">
    <link rel="shortcut icon" href="/public/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title><?=$title;?></title>

    <meta property="og:title" content="Lusy.io - <?=$title;?>">
    <meta property="og:image" content="https://lusy.io/public/images/lusy.jpg" />
    <meta property="og:url" content="https://<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>">
    <meta property="og:description" content="Система постановки и контроля задач">
    <meta name="yandex-verification" content="5329c550c78733c7" />
</head>
<body>
<div class="top-sidebar pt-2 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="navbar-brand text-dark text-uppercase font-weight-bold visible-lg mt-1"
                   href="/<?= $this->route['language']; ?>/"><span class="logo mr-3">L</span>LUSY</a>
                <p class="mt-2 mb-0" style="    font-size: 14px;
    color: #5156d8;
    font-weight: 800;">Система постановки задач</p>
            </div>
            <div class="col-lg-6">
                <nav class="navbar navbar-expand-lg p-0 pt-1">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target=".mainNav" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars text-dark"></i>
                    </button>

                    <div class="collapse navbar-collapse mainNav">
                        <ul class="navbar-nav mr-auto ml-auto">
                            <li class="nav-item">
                                <a class="nav-link firstNav" href="/<?= $this->route['language']; ?>/possibilities/">Возможности</a>
                            </li>
                            <li class="nav-item d-none">
                                <a class="nav-link" href="/<?= $this->route['language']; ?>/chart/">Чарт компаний</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/<?= $this->route['language']; ?>/price/">Стоимость</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/<?= $this->route['language']; ?>/help/">Помощь</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-sm-5 col-lg-3 offset-sm-7 offset-lg-0 navbar-expand-lg">
                <div class="collapse navbar-collapse float-right mainNav">
                    <nav class="navbar navbar-expand-lg">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link login" href="https://s.lusy.io/login/">Войти</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link btn btn-primary text-white font-weight-bold"
                                   href="/<?= $this->route['language']; ?>/register/">Регистрация</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--body-->
<div class="position-relative">
        <?php echo $content; ?>


    <div class="footer">
        <div class="container">
            <div class="text-dark">
                <p class="lead-text-big mb-1">Lusy.io</p>
                <h2 class="small mb-5">система постановки и контроля задач</h2>
                <p><a
                            href="/<?= $this->route['language']; ?>/history/"
                            class="btn-link text-secondary">История версий</a></p>
                <p><a
                            href="/<?= $this->route['language']; ?>/partners/"
                            class="btn-link text-secondary">Партнерская программа</a></p>
                <p><a
                            href="https://lusy.io/licenzionnoe-soglashenie-dogovor-publichnoj-oferty.pdf"
                            class="btn-link text-secondary" target="_blank">Оферта
                        рекуррентных
                        платежей</a></p>
            </div>
        </div>
    </div>
    <div class="underFooter">
        <div class="container">
            <div class="text-secondary">
                <p class="small pt-3 pb-3 mb-0"><a href="https://richbee.ru/" target="_blank">Разработано командой RichBee</a> <i class="far fa-copyright"></i>
                    2019</p>
            </div>
        </div>
    </div>
</div>
<!--end body-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(53097463, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53097463" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
