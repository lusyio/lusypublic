<div class="container pb-5 mb-5 content position-relative">
    <h1 class="text-center mb-5">Руководителю</h1>
    <div class="row">
        <div class="col-3">
            <div id="tocBar" class="pl-3 toc-bar position-absolute"></div>
        </div>
        <div class="col-9 toc-content pl-5">
            <div>
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
