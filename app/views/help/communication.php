<div class="container pb-5 mb-5 content position-relative">
    <h1 class="text-center mb-5">Общение</h1>
    <div class="row">
        <div class="col-lg-3 d-lg-block d-none">
            <a class="help-back-btn" href="/ru/help/"><i class="fas fa-arrow-left"></i></a>
            <div id="tocBar" class="pl-3 toc-bar position-absolute"></div>
        </div>
        <div class="col-12 col-lg-9 toc-content">
            <div>
                <p>В чатах работает прикрепление файлов из облачных хранилищ или с устройства, для этого необходимо нажать на “скрепку” немного левее окна ввода сообщения и выбрать интересующий пункт меню. Для отправки сообщений достаточно ввести его и подтвердить действие клавишей “enter”. Для перехода на новую строку работает комбинация “ctrl” + “enter”.</p>
                <h3 id="companyChat">Чат компании</h3>
                <p>Сюда входят все сотрудники вашей компании. В нем автоматически опубликовываются дни рождения и полученные достижения сотрудников. Сео способен удалять любые сообщения по нажатию на “крестик” рядом с ним.</p>
                <h3 id="conversations">Личная переписка</h3>
                <p>Личная переписка возможна только с сотрудниками вашей компании. Чтобы начать переписку необходимо выбрать собеседника в списке сотрудников по нажатию на кнопку “+” на странице “Сообщения”.</p>
                <h3 id="support">Служба поддержки</h3>
                <p>Если у вас появились жалобы, предложения или идеи достаточно написать в чате службы поддержки, и в скором времени мы ответим вам и поможем. Также можно перейти в диалог со службой поддержки, нажав в самом низу страницы “Обратная связь”.	</p>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.4.2/tocbot.min.js"></script>
<link rel="stylesheet" href="/public/css/tocbot.css">
<script>
    tocbot.init({

        // Where to render the table of contents.
        tocSelector: '.toc-bar',
        // Where to grab the headings to build the table of contents.
        contentSelector: '.toc-content',
        // Which headings to grab inside of the contentSelector element.
        headingSelector: 'h1, h2, h3, h4',
        // For headings inside relative or absolute positioned containers within content.
        hasInnerContainers: true,
        positionFixedSelector: '.toc-bar',
        includeHtml: true,
        orderedList: false,
        collapseDepth: 6,
        fixedSidebarOffset: $('.toc-bar').offset().top,
    });
</script>
