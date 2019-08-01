<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 text-left">
                <h1>Система постановки задач</h1>
                <p class="lead-text">Твой личный помощник<br class="hidden-sm"><span
                            class="visible-sm"> </span>в управлении компанией</p>
                <p class="lead-text-under">Сосредоточься на росте бизнеса и долгосрочных целях,<br
                            class="hidden-sm"><span
                            class="visible-sm"> </span>а рутинные задачи Люси возьмет на себя</p>
                <div class="mt-5">

                    <form method="post" action="/<?= $this->route['language']; ?>/register/">
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
            <div class="col-sm-4">
                <img class="note" src="/public/images/note.jpg">
            </div>
            <div class="col-sm-12">
                <div class="bg-dark card position-relative" id="whatLusy">
                    <div class="card-body p-5">
                        <h2 class="text-white">Что такое Lusy?</h2>
                        <p class="lead-text-under text-white mb-4">Система постановки и контроля задач - простая в
                            применении, с мотивирующими ачивками, полноценным бесплатным тарифом и приятным
                            дизайном.</p>
                        <div class="inblock d-flex text-white">

                            <div>
                                <h3>Сотрудники</h3>
                                <p>Пригласи сотрудников и партнеров в систему</p>
                            </div>

                            <div class="znak"><span>+</span></div>

                            <div>
                                <h3>Задачи</h3>
                                <p>Создай текущие и запланируй будущие</p>
                            </div>

                            <div class="znak"><span>+</span></div>

                            <div>
                                <h3>Достижения</h3>
                                <p>Подкрепи мотивацию нашими крутыми ачивками</p>
                            </div>

                            <div class="znak"><span>=</span></div>

                            <div>
                                <h3>Рост</h3>
                                <p>Ты позаботился о текущих делах, значит освободил место для развития</p>
                            </div>

                        </div>
                    </div>
                    <img src="/public/images/mount.png"/>
                </div>
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
                        <p class="lead-text-under text-center">Ставь задачи, контролируй их выполнение, следи за
                            сроками, не
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
        <div class="d-flex mt-5 counters-topsidebar">
            <a href="#" class="text-decoration-none topsidebar-noty-content topdisebar-margin">
                <div data-toggle="tooltip" data-placement="bottom" title="События"
                     class="topsidebar-noty">
                    <div class="position-relative">
                        <img class="svg-icon" src="/public/svg/alarm.svg">
                        <span class="badge badge-primary badge-topsidebar" id="notificationBadge">
                                    <small class="text-dark" id="notificationCount"></small>1
                                    </span>
                    </div>
                </div>
            </a>
            <a href="#" class="text-decoration-none topsidebar-noty-content topdisebar-margin">
                <div data-toggle="tooltip" data-placement="bottom" title="Просроченные"
                     class="topsidebar-noty">
                    <div class="position-relative">
                        <img class="svg-icon" src="/public/svg/fire.svg">
                        <span class="badge badge-danger badge-topsidebar" id="overdueBadge">
                                    <small class="text-dark" id="overdueCount"></small>2
                                </span>
                    </div>
                </div>
            </a>
            <a href="#"
               class="text-decoration-none topsidebar-noty-content topdisebar-margin">
                <div data-toggle="tooltip" data-placement="bottom" title="Комментарии"
                     class="topsidebar-noty">
                    <div class="position-relative">
                        <img class="svg-icon" src="/public/svg/feedback.svg">
                        <span class="badge text-dark badge-warning badge-topsidebar" id="commentBadge">
                                    <small class="text-dark" id="commentCount"></small>2
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
                                    <small class="text-dark" id="messagesCount"></small>8
                                </span>
                    </div>
                </div>
            </a>
        </div>
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
        <div class="col-sm-7">
            <div class="dialog-container">

                <div class="chat">
                    <div class="card shadow-none">
                        <div class="card-header text-center bg-message border-0">
                            <div class="position-absolute">
                                <span data-toggle="tooltip" data-placement="bottom" title="" class="text-left"
                                   data-original-title="Назад к диалогам"><i class="fas fa-arrow-left icon-invite"></i></span>
                            </div>
                            <div>
                            <span class="mb-0 h5 name-target">
                                Lusy.io
                            </span>
                                <span>
                                    <i class="fas fa-circle mr-1 ml-1 onlineIndicator text-success"></i>
                                </span>
                            </div>
                        </div>
                        <div class="card-body p-0" id="chatBox">
                            <div data-message-id="132" class="rounded-0 message not-my-message ">
                                <div class="row">
                                    <div class="col-2 col-lg-2">
                                        <a class="avatar-chat" href="#"><img src="/public/images/avatar/4-alter.jpg"
                                                                             class="avatar-conversation"></a>
                                    </div>
                                    <div class="col pl-2 message-width">
                                        <span class="date date-target">19.07 в 16:05                    </span>
                                        <p class="m-0 text-target" style="color: #000; font-size: 14px; font-weight: 400">Внимание,
                                            внимание! Сообщаем, что у нас заработала система обратной связи. Если у вас
                                            есть жалобы, предложения, идеи - не держите в себе!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-message">
                        <div class="card-body pb-0 pl-2 pr-2">
                            <form>
                                <div class="d-flex send-mes-block">
                                    <div class="form-group w-100 text-area d-flex mb-0">
                                        <span class="btn btn-light btn-file border d-none">
                                            <i class="fas fa-file-upload custom-date mr-2"></i>
                                            <span class="attach-file text-muted">Выберите файл</span>
                                            <input id="sendFiles" type="file" multiple="">
                                        </span>
                                        <textarea
                                                style="overflow: hidden; display: block; position: absolute; top: 0px; left: -9999px; padding: 80px; height: 54px; width: 809px; line-height: 24px; text-decoration: none solid rgb(73, 80, 87); letter-spacing: 0px;"
                                                class="form-control" rows="1" placeholder="Введите сообщение"
                                                autofocus="" tabindex="-1"></textarea><textarea
                                                style="overflow: hidden; display: block;" class="form-control" id="mes"
                                                name="mes" rows="1" placeholder="Введите сообщение"
                                                autofocus=""></textarea>
                                        <div class="position-relative">
                                            <button type="button" class="btn rounded-circle text-white" id="sendBtn">
                                                <span id="sendMesName"><i class="fas fa-paper-plane"></i></span>
                                                <div class="spinner-border spinner-border-sm text-dark" role="status"
                                                     style="display: none;">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </button>
                                            <div class="send-mes-tooltip">
                                                <div class="card">
                                                    <div class="send-mes-tooltip-body">
                                                        <div style="font-size: 13px">
                                                            <b>Enter</b>
                                                            — Отправить сообщение
                                                            <br>
                                                            <b>Ctrl+Enter</b>
                                                            — Новая строка
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="file-name container-files" style="display: none;padding-left: 34px;"></div>
                        </div>
                    </div>
                </div>

                <div class="text-center position-absolute spinner-mes">
                    <div class="spinner-border" style="width: 3rem; height: 3rem;color: #e4e4e4;margin-top: 35%;"
                         role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div class="chat-2">
                    <div class="card mb-3 dialog-mail" val="1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3 col-lg-2 pl-2">
                                    <div class="user-pic position-relative" style="width:60px">
                                        <img src="/public/images/avatar/4-alter.jpg"
                                             class="avatar-img rounded-circle w-100">
                                        <span class="online-indicator mobile-online-indicator">
                                            <i class="fas fa-circle mr-1 ml-1 onlineIndicator mail text-success"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col text-area-message">
                                    <p class="mb-2 font-weight-bold chat-name">Дмитрий Ричби </p>
                                    <span class="text-message">вот так на портретке айпада делать?</span>
                                </div>
                                <span class="date mr-2">25.07 12:26</span>
                            </div>

                        </div>
                    </div>
                    <div class="card mb-3 dialog-mail" val="2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3 col-lg-2 pl-2">
                                    <div class="user-pic position-relative" style="width:60px">
                                        <img src="/public/images/avatar/4200007-alter.jpg"
                                             class="avatar-img rounded-circle w-100">
                                        <span class="online-indicator mobile-online-indicator">
                                            <i class="fas fa-circle mr-1 ml-1 onlineIndicator mail text-success"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col text-area-message ">
                                    <p class="mb-2 font-weight-bold chat-name">Дельшод Великолепный </p>
                                    <span class="text-message">Прива как дел</span>
                                </div>
                                <span class="date mr-2">25.07 4:20</span>
                            </div>

                        </div>
                    </div>
                    <div class="card mb-3 dialog-mail" val="3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3 col-lg-2  pl-2">
                                    <div class="user-pic position-relative" style="width:60px">
                                        <img src="/public/images/avatar/2-alter.jpg"
                                             class="avatar-img rounded-circle w-100">
                                        <span class="online-indicator mobile-online-indicator">
                                            <i class="fas fa-circle mr-1 ml-1 onlineIndicator mail text-success"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col text-area-message">
                                    <p class="mb-2 font-weight-bold chat-name">Игорь Горыныч </p>
                                    <span class="text-message">test123</span>
                                </div>
                                <span class="date mr-2">24.07 12:35</span>
                            </div>

                        </div>
                    </div>
                    <div class="card mb-3 dialog-mail" val="4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3 col-lg-2  pl-2">
                                <span class="companyAvatar user-pic position-relative"><i
                                            class="fas fa-headset fa-fw"></i></span>
                                </div>
                                <div class="col text-area-message">
                                    <p class="mb-2 font-weight-bold chat-name">Служба поддержки </p>
                                    <span class="text-message">Внимание, внимание! Сообщаем, что у нас заработала система обратной связи. Если у вас есть жалобы, предложения, идеи - не держите в себе!</span>
                                </div>
                                <span class="date mr-2">19.07 16:05</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
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

<script>

    $("#mes").keypress(function (e) {
        var str = $('#mes').val().trim();
        if (str !== '' && typeof str !== undefined) {
            if (e.which == 13 && e.ctrlKey) {
                $('#mes').val($('#mes').val() + "\n");
            } else if (e.which == 13) {
                e.preventDefault();
                $("#sendBtn").click();
                $("#mes").val('');
                setTimeout(function () {
                    $("#mes").css('height', '54px');
                }, 300);
            }
        }
    });

    $('#sendBtn').on('click', function () {
        var text = $('#mes').val();
        $('#chatBox').append('<div data-message-id="171" class="rounded-0 message my-message">\n' +
            '    <div class="row">\n' +
            '        <div class="col-2 col-lg-2">\n' +
            '            <a class="avatar-chat" href=""><img src="/public/images/jopa.jpg" class="avatar-conversation"></a>\n' +
            '        </div>\n' +
            '        <div class="col pl-2 message-width">\n' +
            '                            <span class="date">24.07 в 12:32                    </span>\n' +
            '            <p class="m-0" style="color: #000; font-size: 14px; font-weight: 400">' + text + '</p>\n' +
            '                    </div>\n' +
            '    </div>\n' +
            '</div>');
        $('#chatBox').scrollTop($("#chatBox")[0].scrollHeight);
        var text = $('#mes').val('');
    });

    $('.icon-invite').on('click', function () {
        setTimeout(function () {
            $('.chat').hide();
            $('.chat-2').show();
        }, 500);
    });

    $('.dialog-mail').on('click', function () {
        var name = $(this).find('.chat-name').text();
        var text = $(this).find('.text-message').text();
        var avatar = $(this).find('.avatar-img').attr('src');
        var date = $(this).find('.date').text();
        var val = $(this).attr('val');
        $('.spinner-mes').show();
        setTimeout(function () {
            $('.chat-2').hide();
            $('.spinner-mes').hide();
            $('.name-target').text(name);
            $('.avatar-conversation').attr('src', avatar);
            $('.text-target').text(text);
            $('.date-target').text(date);
            $('.chat').show();
        }, 500);
        // $.ajax({
        //     url: '/ajax.php',
        //     type: 'POST',
        //     data: {
        //         ajax: 'message',
        //         dialog: val
        //     },
        //     success: function (data) {
        //         setTimeout(function () {
        //             $('.dialog-container').html(data);
        //             $('.spinner-mes').hide();
        //         }, 500)
        //     },
        // });
    });
</script>

<div class="container pt-5 pb-5" id="files">
    <div class="row">
        <div class="col-sm-5">
            <p class="lead-text-big mt-2">Делись файлами<br>и документами</p>
            <p class="lead-text-under text-left mt-4">Ни один документ больше не затеряется в глубинах почтового ящика.
                Все самые важные файлы будут оставаться всегда под рукой и на видном месте.</p>
            <p class="lead-text-under text-left mt-4">А также вы можете использовать облачные хранилища Google Drive и
                DropBox </p>
        </div>
        <div class="col-sm-7">
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
                            <a href="/public/images/photoreport.jpg" class="h6 mb-3 file-name">Фотоотчет о 20минутной
                                работе.png</a>
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

<div class="pt-5 pb-5" id="awards">
    <div class="container">
        <p class="lead-text-big text-center">Достижения, мотивация, игра!</p>
        <div class="row mb-3">
            <div class="col-sm-8 offset-sm-2 mt-3 mb-3">
                <p class="lead-text-under">Кто сказал, что работа - это скучно? Встроенная система мотивации вносит в
                    привычный распорядок элементы геймификации. Получай достижения, наблюдай за успехами сотрудников и
                    решай, кому выписать премию</p>
            </div>
        </div>
        <div class="hidden-sm">
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
        </div>

        <div class="row mt-5">
            <div class="col-sm-6 offset-sm-3 mt-3 d-none">
                <div class="d-flex justify-content-center mt-4">
                    <a href="/<?= $this->route['language']; ?>/register/" class="btn btn-primary">Забрать медальку</a>
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
                прямо с телефона, где бы ты не находился</p>
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
            <p class="lead-text-under text-center">В бесплатном тарифе есть всё для эффективной работы всей команды!
                Пользуйся сервисом сколько нужно, приглашай любое количество
                сотрудников, назначайте задачи, общайтесь и делитесь файлами</p>
        </div>
    </div>
    <div class="justify-content-center">
        <form method="post" action="/<?= $this->route['language']; ?>/register/">
            <div class="input-group mb-5 mt-3 formreg m-auto">
                <input type="text" name="email" class="form-control" placeholder="your_mail@domain.com"
                       aria-label="your_mail@domain.com" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="button-addon2">Попробовать</button>
                </div>
            </div>
        </form>
        <p class="text-center text-secondary mt-3">Перейти к <a href="/<?= $this->route['language']; ?>/price/">платным
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