<div class="container pb-5 mb-5 content position-relative">
    <h1 class="text-center mb-5">Частые вопросы</h1>
    <div class="row">
        <div class="col-3">
            <a class="help-back-btn" href="/ru/help/"><i class="fas fa-arrow-left"></i></a>
            <div id="tocBar" class="pl-3 toc-bar position-absolute"></div>
        </div>
        <div class="col-9 toc-content">
            <div>
                <h3 id="achievements">Как создавать подзадачи?</h3>
                <p>Вот два шага, которые приведут вас к задаче с подзадачей:</p>
                <ol>
                    <li>Создаем задачу, которая будет базовой - у нас она называется "надзадача": при её создании во вкладке "Дополнительные функции" под словом "Надзадача" должно быть написано "Не выбрана".
                    <div class="m-auto pt-3 pb-3">
                        <img src="/public/images/kak-sozdat-podzadachu.jpg" alt="kak-sozdat-podzadachu">
                    </div>
                    </li>
                    <li>Создаем подзадачу, при её создании во вкладке "Дополнительные функции" в выпадающем списке "Надзадача" выбираем задачу, которую создали в предыдущем пункте.
                        <div class="m-auto pt-3 pb-3">
                            <img src="/public/images/kak-sozdat-podzadachu-2.jpg" alt="kak-sozdat-podzadachu-2">
                        </div>
                    </li>
                </ol>
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
