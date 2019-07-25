<style>.bg {
        top: 0
    }</style>
<div class="main">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-sm-8 text-center">
                <h1>Система постановки задач</h1>
                <p class="lead-text text-white">Твой личный помощник<br class="hidden-sm"><span
                            class="visible-sm"> </span>в управлении компанией</p>
                <p class="lead-text-under">Сосредоточься на росте бизнеса и долгосрочных целях,<br
                            class="hidden-sm"><span
                            class="visible-sm"> </span>а рутинные задачи Люси возьмет на себя</p>
                <div class="justify-content-center mt-5">

                    <form method="post" action="https://s.lusy.io/reg/">
                        <div class="input-group mb-3 mt-3 formreg">
                            <input type="text" name="email" class="form-control" placeholder="your_mail@domain.com"
                                   aria-label="your_mail@domain.com" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" id="button-addon2">Попробовать</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12">
                <img class="w-100" src="/public/images/lusy.jpg">
            </div>
        </div>
    </div>
</div>
<div class="pt-5 pb-5 mt-3" id="steps">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mb-5">
                <p class="lead-text-big text-center">Все задачи как на ладони</p>
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <p class="lead-text-under">Ставь задачи, контролируй их выполнение, следи за сроками, не
                            прилагая
                            каких-либо усилий! Начать очень просто!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="blockExcellence position-relative">
                    <span class="number">1</span>
                    <img class="rounded-circle" src="/public/images/land1.jpg"/>
                </div>
                <h5 class="mt-4 font-weight-bold">Пригласи сотрудников</h5>
                <p class="mt-3 lead-text-small2">Разошли приглашения всем своим
                    сотрудникам и уже через минуту
                    они все вместе начнут работать
                    внутри системы Lusy.io</p>
            </div>
            <div class="col-sm-4 text-center">
                <div class="blockExcellence position-relative">
                    <span class="number">2</span>
                    <img class="rounded-circle" src="/public/images/land2.jpg"/>
                </div>
                <h5 class="mt-4 font-weight-bold">Назначь задачи</h5>
                <p class="mt-3 lead-text-small2">Разгрузи свою голову, e-mail
                    и мессенджеры - поставь задачи,
                    назначь исполнителей и сроки.
                    Теперь все поручения будут
                    выполнятся вовремя</p>
            </div>
            <div class="col-sm-4 text-center">
                <div class="blockExcellence position-relative">
                    <span class="number">3</span>
                    <img class="rounded-circle" src="/public/images/land3.jpg"/>
                </div>
                <h5 class="mt-4 font-weight-bold">Кайфуй! Всё под контролем!</h5>
                <p class="mt-3 lead-text-small2">Все твои идеи реализуются в срок
                    и находятся под полным контролем,
                    Люси следит за их исполнением!
                    Теперь ты - супер<i>бизнес</i>мен
                </p>
            </div>
        </div>
    </div>
</div>
</div>


<div class="container pt-5 pb-5" id="noty">
    <div class="text-center">
        <p class="lead-text-big">Вовремя узнавай обо всех событиях</p>
        <div class="d-flex counters-topsidebar">
            <a href="#" class="text-decoration-none topsidebar-noty-content mr-5">
                <div data-toggle="tooltip" data-placement="bottom" title="События"
                     class="topsidebar-noty">
                    <div class="position-relative">
                        <img class="svg-icon" src="/public/svg/alarm.svg">
                        <span class="badge badge-primary badge-topsidebar" id="notificationBadge">
                                    <small class="text-white" id="notificationCount"></small>1
                                    </span>
                    </div>
                </div>
            </a>
            <a href="#" class="text-decoration-none topsidebar-noty-content mr-5">
                <div data-toggle="tooltip" data-placement="bottom" title="Просроченные"
                     class="topsidebar-noty">
                    <div class="position-relative">
                        <img class="svg-icon" src="/public/svg/fire.svg">
                        <span class="badge badge-danger badge-topsidebar" id="overdueBadge">
                                    <small class="text-white" id="overdueCount"></small>2
                                </span>
                    </div>
                </div>
            </a>
            <a href="#"
               class="text-decoration-none topsidebar-noty-content mr-5">
                <div data-toggle="tooltip" data-placement="bottom" title="Комментарии"
                     class="topsidebar-noty">
                    <div class="position-relative">
                        <img class="svg-icon" src="/public/svg/feedback.svg">
                        <span class="badge text-white badge-warning badge-topsidebar" id="commentBadge">
                                    <small class="text-white" id="commentCount"></small>2
                                </span>
                    </div>
                </div>
            </a>
            <a href="#" class="text-decoration-none topsidebar-noty-content">
                <div data-toggle="tooltip" data-placement="bottom" title="Сообщения"
                     class="topsidebar-noty">
                    <div class="position-relative">
                        <img class="svg-icon" src="/public/svg/paper-plane.svg">
                        <span class="badge badge-success badge-topsidebar" id="messagesBadge">
                                    <small class="text-white" id="messagesCount"></small>8
                                </span>
                    </div>
                </div>
            </a>
        </div>
<!--        <div class="d-flex mt-5 justify-content-center">-->
<!--            <div class="mr-4 notyBlock">-->
<!--                <div class="text-primary font-weight-bold noty">-->
<!--                    <i class="far fa-bell"></i> 12-->
<!--                </div>-->
<!--                <small class="text-secondary">Задачи</small>-->
<!--            </div>-->
<!--            <div class="mr-4 ml-4 notyBlock">-->
<!--                <div class="text-danger font-weight-bold noty">-->
<!--                    <i class="fas fa-fire-alt"></i> 3-->
<!--                </div>-->
<!--                <small class="text-secondary">Просроченные</small>-->
<!--            </div>-->
<!--            <div class="mr-4 ml-4 notyBlock">-->
<!--                <div class="text-warning font-weight-bold noty">-->
<!--                    <i class="far fa-comment"></i> 1-->
<!--                </div>-->
<!--                <small class="text-secondary">Комментарии</small>-->
<!--            </div>-->
<!--            <div class="ml-4 mr-4 notyBlock">-->
<!--                <div class="text-success font-weight-bold noty">-->
<!--                    <i class="far fa-envelope"></i> 5-->
<!--                </div>-->
<!--                <small class="text-secondary">Сообщения</small>-->
<!--            </div>-->
<!--        </div>-->
    </div>
    <div class="row mt-5">
        <div class="col-sm-4 offset-sm-2">
            <p class="lead-text-under text-left">Появилась новая задача, сотрудник
                не успевает закончить работу в срок, вам поступило
                новое сообщение или комментарий?</p>
        </div>
        <div class="col-sm-4">
            <p class="lead-text-under text-left">Все события отображаются в режиме онлайн + дублируются на электронную
                почту, если это необходимо</p>
        </div>
    </div>
</div>

<div class="container pt-5 pb-5 d-none">
    <div class="row">
        <div class="col-sm-6">
            sdf
        </div>
        <div class="col-sm-4">
            sdf
        </div>
    </div>
</div>

<div class="container pt-5 pb-5" id="messages">
    <div class="row">
        <div class="col-sm-6 offset-sm-1">

            <a class="text-decoration-none text-dark" href="#">
                <div class="card mb-3 dialog-mail">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 pl-2">
                                <div class="user-pic position-relative" style="width:60px">
                                    <img src="/public/images/avatar/4-alter.jpg"
                                         class="avatar-img rounded-circle w-100">
                                    <span class="online-indicator mobile-online-indicator">
                                            <i class="fas fa-circle mr-1 ml-1 onlineIndicator mail text-success"></i>
                                        </span>
                                </div>
                            </div>
                            <div class="col text-area-message">
                                <p class="mb-2 font-weight-bold ">Дмитрий Ричби </p>
                                <span>Вы:  вот так на портретке айпада делать?</span>
                            </div>
                            <span class="date mr-2">25.07 12:26</span>
                        </div>

                    </div>
                </div>
            </a>
            <a class="text-decoration-none text-dark" href="#">
                <div class="card mb-3 dialog-mail">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 pl-2">
                                <div class="user-pic position-relative" style="width:60px">
                                    <img src="/public/images/avatar/4200007-alter.jpg"
                                         class="avatar-img rounded-circle w-100">
                                    <span class="online-indicator mobile-online-indicator">
                                            <i class="fas fa-circle mr-1 ml-1 onlineIndicator mail text-success"></i>
                                        </span>
                                </div>
                            </div>
                            <div class="col text-area-message">
                                <p class="mb-2 font-weight-bold ">Дельшод Великолепный </p>
                                <span>Вы:  Прива как дел</span>
                            </div>
                            <span class="date mr-2">25.07 4:20</span>
                        </div>

                    </div>
                </div>
            </a>
            <a class="text-decoration-none text-dark" href="#">
                <div class="card mb-3 dialog-mail">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 pl-2">
                                <div class="user-pic position-relative" style="width:60px">
                                    <img src="/public/images/avatar/2-alter.jpg"
                                         class="avatar-img rounded-circle w-100">
                                    <span class="online-indicator mobile-online-indicator">
                                            <i class="fas fa-circle mr-1 ml-1 onlineIndicator mail text-success"></i>
                                        </span>
                                </div>
                            </div>
                            <div class="col text-area-message">
                                <p class="mb-2 font-weight-bold ">Игорь Горыныч </p>
                                <span>Вы:  test123</span>
                            </div>
                            <span class="date mr-2">24.07 12:35</span>
                        </div>

                    </div>
                </div>
            </a>
            <a class="text-decoration-none text-dark" href="#">
                <div class="card mb-3 dialog-mail">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 pl-2">
                                <span class="companyAvatar user-pic position-relative"><i
                                            class="fas fa-headset fa-fw"></i></span>
                            </div>
                            <div class="col text-area-message">
                                <p class="mb-2 font-weight-bold ">Служба поддержки </p>
                                <span> Внимание, внимание! Сообщаем, что у нас заработала система обратной связи. Если у вас есть жалобы, предложения, идеи - не держите в себе!</span>
                            </div>
                            <span class="date mr-2">19.07 16:05</span>
                        </div>

                    </div>
                </div>
            </a>

        </div>
        <div class="col-sm-5">
            <p class="lead-text-big mt-5">Общайся<br>внутри системы</p>
            <p class="lead-text-under text-left mt-4">Веди переписки по задачам внутри системы, не боясть потерять
                важную информацию. </p>
            <p class="lead-text-under text-left mt-4">Система комментариев под задачами и внутренний чат компаний
                позваляют держать руку на пульсе событий</p>
        </div>
    </div>
</div>

<div class="container pt-5 pb-5" id="files">
    <div class="row">
        <div class="col-sm-5 offset-sm-1">
            <p class="lead-text-big mt-5">Делись файлами<br>и документами</p>
            <p class="lead-text-under text-left mt-4">Ни один документ больше не затеряется в глубинах почтового ящика.
                Все самые важные файлы будут оставаться всегда под рукой и на видном месте.</p>
            <p class="lead-text-under text-left mt-4">А также вы можете использовать облачные хранилища Google Drive и DropBox </p>
        </div>
        <div class="col-sm-6">
            <div class="card files">
                <div class="card-body file-list">
                <span data-toggle="tooltip" data-placement="bottom" title=""
                      class="text-ligther deleteFile float-right position-absolute"
                      style="right: 5px; top: 0;z-index: 10;" data-original-title="Удалить файл">
                    <i val="66" class="fas fa-times-circle delete-file-icon"></i>
                </span>
                    <div class="row">
                        <div class="col-2 col-lg-1 iconFiles">
                            <i class="far fa-file-image custom-file"></i>
                        </div>
                        <div class="col file-width-storage">
                            <a href="#" class="h6 mb-3 file-name">Снимок экрана 2019-07-10 в 12.06.16.png</a>
                            <span class="text-ligther ml-1"> <i class="fas fa-hdd mr-1 ml-1"></i> 20 КБ</span>
                            <span class="text-ligther ml-1"> <i class="fas fa-circle mr-1 ml-1"></i> 10.07.2019</span>
                            <a href="#" class="text-ligther">
                                Дмитрий Ричби прикрепил к комментарию к задаче 'Новый чарт на dashboard' </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card files">
                <div class="card-body file-list">
                <span data-toggle="tooltip" data-placement="bottom" title=""
                      class="text-ligther deleteFile float-right position-absolute"
                      style="right: 5px; top: 0;z-index: 10;" data-original-title="Удалить файл">
                    <i val="95" class="fas fa-times-circle delete-file-icon"></i>
                </span>
                    <div class="row">
                        <div class="col-2 col-lg-1 iconFiles">
                            <i class="far fa-file-image custom-file"></i>
                        </div>
                        <div class="col file-width-storage">
                            <a href="/public/images/jopa.jpg"
                               class="h6 mb-3 file-name">бэкэнд.jpg</a>
                            <span class="text-ligther ml-1"> <i class="fas fa-hdd mr-1 ml-1"></i> 193 КБ</span>
                            <span class="text-ligther ml-1"> <i class="fas fa-circle mr-1 ml-1"></i> 25.07.2019</span>
                            <span class="text-ligther">
                                Дельшод Великолепный прикрепил к диалогу                             </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card files">
                <div class="card-body file-list">
                <span data-toggle="tooltip" data-placement="bottom" title=""
                      class="text-ligther deleteFile float-right position-absolute"
                      style="right: 5px; top: 0;z-index: 10;" data-original-title="Удалить файл">
                    <i val="66" class="fas fa-times-circle delete-file-icon"></i>
                </span>
                    <div class="row">
                        <div class="col-2 col-lg-1 iconFiles">
                            <i class="far fa-file-image custom-file"></i>
                        </div>
                        <div class="col file-width-storage">
                            <a href="#" class="h6 mb-3 file-name">Снимок экрана 2019-07-10 в 12.06.16.png</a>
                            <span class="text-ligther ml-1"> <i class="fab fa-dropbox mr-1 ml-1"></i> 20 КБ</span>
                            <span class="text-ligther ml-1"> <i class="fas fa-circle mr-1 ml-1"></i> 10.07.2019</span>
                            <a href="#" class="text-ligther">
                                Максим Уважаемый прикрепил к комментарию к задаче 'Новый чарт на dashboard' </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card files">
                <div class="card-body file-list">
                <span data-toggle="tooltip" data-placement="bottom" title=""
                      class="text-ligther deleteFile float-right position-absolute"
                      style="right: 5px; top: 0;z-index: 10;" data-original-title="Удалить файл">
                    <i val="66" class="fas fa-times-circle delete-file-icon"></i>
                </span>
                    <div class="row">
                        <div class="col-2 col-lg-1 iconFiles">
                            <i class="far fa-file-image custom-file"></i>
                        </div>
                        <div class="col file-width-storage">
                            <a href="/public/images/photoreport.jpg" class="h6 mb-3 file-name">Фотоотчет о 20минутной работе.png</a>
                            <span class="text-ligther ml-1"> <i class="fab fa-google-drive mr-1 ml-1"></i> 20 КБ</span>
                            <span class="text-ligther ml-1"> <i class="fas fa-circle mr-1 ml-1"></i> 10.07.2019</span>
                            <a href="#" class="text-ligther">
                                Игорь Горыныч прикрепил к комментарию к задаче 'Новый чарт на dashboard' </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pt-5 pb-5 hidden-sm" id="awards">
    <div class="container">
        <p class="lead-text-big text-center">Достижения, мотивация, игра!</p>
        <div class="row mb-3">
            <div class="col-sm-8 offset-sm-2 mt-3 mb-3">
                <p class="lead-text-under">Кто сказал, что работа - это скучно? Встроенная система мотивации вносит в
                    привычный распорядок элементы геймификации. Получай достижения, наблюдай за успехами сотрудников и
                    решай, кому выписать премию</p>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="award text-center aw1">
                <div>
                    <div class="circle" data-value="0.00"></div>
                    <div class="award-star bg-secondary">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
                <h5>Знакомство</h5>
                <small class="mt-3">Заполнил профиль</small>
                <hr>
                <span class="badge badge-secondary">не достигнуто</span>
            </div>
            <div class="award text-center aw2">
                <div>
                    <div class="circle" data-fill="{ &quot;color&quot;: &quot;rgba(0, 0, 0, .3)&quot;}"
                         data-value="0.20"></div>
                    <div class="award-star bg-secondary">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
                <h5>Акула бизнеса</h5>
                <small class="mt-3">Назначил 50 задач</small>
                <hr>
                <span class="badge badge-secondary">10/50</span>
            </div>
            <div class="award text-center aw3">
                <div>
                    <div class="circle" data-fill="{ &quot;color&quot;: &quot;rgba(40, 167, 69, 1)&quot;}"
                         data-value="1.00"></div>
                    <div class="award-star bg-success">
                        <i class="fas fas fa-medal"></i>
                    </div>
                </div>
                <h5>Красавчик</h5>
                <small class="mt-3">Месяц без просрочек</small>
                <hr>
                <span class="badge badge-success">Достигнуто</span>
            </div>
            <div class="award text-center aw2">
                <div>
                    <div class="circle" data-fill="{ &quot;color&quot;: &quot;rgba(0, 0, 0, .3)&quot;}"
                         data-value="0.10"></div>
                    <div class="award-star bg-secondary">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
                <h5>LVL100 B0$$</h5>
                <small class="mt-3">Назначил 100 задач</small>
                <hr>
                <span class="badge badge-secondary">10/100</span>
            </div>
            <div class="award text-center mr-0 aw1">
                <div>
                    <div class="circle" data-fill="{ &quot;color&quot;: &quot;rgba(0, 0, 0, .3)&quot;}"
                         data-value="0.26"></div>
                    <div class="award-star bg-secondary">
                        <i class="fas fas fa-star"></i>
                    </div>
                </div>
                <h5>Гуру</h5>
                <small class="mt-3">Завершил 500 задач</small>
                <hr>
                <span class="badge badge-secondary">130/500</span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-6 offset-sm-3 mt-3 d-none">
                <div class="d-flex justify-content-center mt-4">
                    <a href="https://s.lusy.io/reg/" class="btn btn-primary">Забрать медальку</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://s.lusy.io/assets/css/swiper.min.css">
<style>
    .swiper-container {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 210px;
        height: 340px;
    }
</style>
<!-- Swiper -->
<div class="visible-sm">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="award text-center">
                    <div>
                        <div class="circle" data-value="0.00"></div>
                        <div class="award-star bg-secondary">
                            <i class="fas fa-handshake"></i>
                        </div>
                    </div>
                    <h5>Знакомство</h5>
                    <small class="mt-3">Заполнил профиль</small>
                    <hr>
                    <span class="badge badge-secondary">не достигнуто</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="award text-center">
                    <div>
                        <div class="circle" data-fill="{ &quot;color&quot;: &quot;rgba(0, 0, 0, .3)&quot;}"
                             data-value="0.20"></div>
                        <div class="award-star bg-secondary">
                            <i class="fas fa-handshake"></i>
                        </div>
                    </div>
                    <h5>Акула бизнеса</h5>
                    <small class="mt-3">Назначил 50 задач</small>
                    <hr>
                    <span class="badge badge-secondary">10/50</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="award text-center">
                    <div>
                        <div class="circle" data-fill="{ &quot;color&quot;: &quot;rgba(40, 167, 69, 1)&quot;}"
                             data-value="1.00"></div>
                        <div class="award-star bg-success">
                            <i class="fas fas fa-medal"></i>
                        </div>
                    </div>
                    <h5>Красавчик</h5>
                    <small class="mt-3">Месяц без просрочек</small>
                    <hr>
                    <span class="badge badge-success">Достигнуто</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="award text-center">
                    <div>
                        <div class="circle" data-fill="{ &quot;color&quot;: &quot;rgba(0, 0, 0, .3)&quot;}"
                             data-value="0.10"></div>
                        <div class="award-star bg-secondary">
                            <i class="fas fa-handshake"></i>
                        </div>
                    </div>
                    <h5>LVL100 B0$$</h5>
                    <small class="mt-3">Назначил 100 задач</small>
                    <hr>
                    <span class="badge badge-secondary">10/100</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="award text-center">
                    <div>
                        <div class="circle" data-fill="{ &quot;color&quot;: &quot;rgba(0, 0, 0, .3)&quot;}"
                             data-value="0.26"></div>
                        <div class="award-star bg-secondary">
                            <i class="fas fas fa-star"></i>
                        </div>
                    </div>
                    <h5>Гуру</h5>
                    <small class="mt-3">Завершил 500 задач</small>
                    <hr>
                    <span class="badge badge-secondary">130/500</span>
                </div>
            </div>


        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- Swiper JS -->
<script src="https://s.lusy.io/assets/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
    swiper.slideTo(2, false, false);
</script>
<div class="container pt-5 pb-5" id="mobile">
    <div class="row">
        <div class="col-sm-5 offset-sm-1">
            <p class="lead-text-big mt-5">Полный контроль<br>в любом месте</p>
            <p class="lead-text-under text-left mt-4">Застрял в пробке или срочно захотелось
                на море? Контролируй рабочие процессы
                прямо с телефона где бы ты не находился</p>
        </div>
        <div class="col-sm-6">
            <img src="/public/images/mobile.jpg">
        </div>
    </div>
</div>

<div class="container pt-5 pb-5">
    <p class="lead-text-big text-center">Сколько это стоит? Бесплатно!</p>
    <div class="row mb-3">
        <div class="col-sm-8 offset-sm-2 mt-3 mb-3">
            <p class="lead-text-under">В бесплатном тарифе есть всё для эффективной работы всей команды!
                Пользуйся сервисом сколько нужно, приглашай любое количество
                сотрудников, ставь неограниченное число задач</p>
        </div>
    </div>
    <div class="justify-content-center">
        <form method="post" action="https://s.lusy.io/reg/">
            <div class="input-group mb-3 mt-3 formreg">
                <input type="text" name="email" class="form-control" placeholder="your_mail@domain.com"
                       aria-label="your_mail@domain.com" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="button-addon2">Попробовать</button>
                </div>
            </div>
        </form>
        <p class="text-center text-secondary">Перейти к <a href="/<?= $this->route['language']; ?>/price/">платным
                тарифам</a></p>
    </div>
</div>

<script src="https://s.lusy.io/assets/js/circle-progress.min.js"></script>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script>
    $('.circle').circleProgress({
        size: 75,
        thickness: 2
    });
</script>