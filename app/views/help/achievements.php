<div class="container pb-5 mb-5 content position-relative">
    <h1 class="text-center mb-5">Достижения</h1>
    <div class="row">
        <div class="col-lg-3 d-lg-block d-none">
            <a class="help-back-btn" href="/ru/help/"><i class="fas fa-arrow-left"></i></a>
            <div id="tocBar" class="pl-3 toc-bar position-absolute"></div>
        </div>
        <div class="col-12 col-lg-9 toc-content">
            <div>
                <h3 id="achievements">Достижения</h3>
                <p>На странице отображается общий прогресс выполнения достижений.</p>
                <p>Первые идут выполненные достижения - показаны их название, описание и дата.</p>
                <p>Путь ответственного - достижения, которые показывают вас как активного работника. Чтобы преуспеть в этом направлении завершайте задачи как ответственный или соисполнитель</p>
                <p>Путь руководителя - достижения, раскрывающие вас как руководителя, правильно разбивайте крупные цели на небольшие задачи.</p>
                <p>Разовые - особые достижения на общую тематику.
                </p>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.4.2/tocbot.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.4.2/tocbot.css">
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
