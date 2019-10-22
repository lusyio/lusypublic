<div class="container pb-5 mb-5 content position-relative">
    <h1 class="text-center mb-5">Задачи</h1>
    <div class="row">
        <div class="col-lg-3 d-lg-block d-none">
            <a class="help-back-btn" href="/ru/help/"><i class="fas fa-arrow-left"></i></a>
            <div id="tocBar" class="pl-3 toc-bar position-absolute"></div>
        </div>
        <div class="col-12 col-lg-9 toc-content pl-5">
            <div>
                <h3 id="members">Участники</h3>
                <p>В каждой задаче всегда имеются Менеджер - пользователь, создавший задачу, и исполнитель -
                    пользователь, ответственный за выполнение задачи. Допускается назначать задачи самому себе. Также
                    можно добавить соисполнителей - они увидят задачу, но не имеют возможности работать с ней -
                    запрашивать перенос срока и завершать её.</p>
                <h3 id="deadline">Срок выполнения</h3>
                <p>Срок, после которого задача получит статус “просрочено”, менеджер и исполнитель задачи получат
                    уведомление об изменении статуса.
                </p>
                <p>Задача не становится просроченной, если имеет статус “На рассмотрении”, “Перенос срока”, “Завершена”,
                    “Отменена”, “Запланирована”</p>
                <h3 id="description">Название, описание, файлы</h3>
                <p>Каждая задача должна иметь название. У задачи может не быть описания и прикрепленных файлов</p>
                <h3 id="repeat">Повторяющиеся задачи</h3>
                <p>Задачи, назначенные самому себе, можно сделать повторяющимися: они будут создаваться с заданной
                    периодичностью, а срок выполнения будет устанавливаться как длительность текущей задачи. </p>
                <p><i>Например, 1 января создаем задачу со сроком выполнения 4 января и периодичностью повторения “каждый
                    день” - тогда 2 января системой будет создана задача со сроком выполнения 5 января, 3 января - со
                    сроком выполнения 6 января и т.д.</i></p>
                <h3 id="premium">Дополнительные возможности</h3>
                <div class="m-auto pt-3 pb-3">
                    <img src="/public/images/dopolnitelnye-funkcii.jpg" alt="dopolnitelnye-funkcii">
                </div>
                <p>Следующие функции доступны только для пользователей с премиум-тарифом</p>
                <h4 id="parentTask">Надзадача</h4>
                <p>Текущая задача станет подзадачей для выбранной задачи, В списке задач они будут отображаться
                    сгруппированно, в надзадаче будет отображен список всех подзадач, а завершение надзадачи станет
                    возможным, только когда каждая из подзадач завершена либо отменена</p>
                <p>Более подробно о создании надзадачи можно узнать в разделе <a href="/ru/help/questions/#howToCreateSubtask">частых вопросов</a></p>
                <h4 id="plannedTask">Отложенный старт</h4>
                <p>Дата, в которую задача будет опубликована. С момента создания задачи с отложенным стартом и до
                    момента её публикации она будет видно только создавшему её пользователю.</p>
                <h4 id="checkList">Подпункты</h4>
                <p>По-другому - чеклист - список, каждый пункт которого можно отметить, при этом будут указаны дата
                    отметки и имя отметившего пункт пользователя. Менеджер задачи может в любой момент снять чужие
                    отметки с пунктов списка, остальные пользователи могут снять только свою отметку и только в течении
                    5 минут с момента, как они её поставили.</p>
                <h2 id="statuses">Статусы задачи</h2>
                <ul>
                    <li><b>"новая"</b> - задача, с которой исполнитель ещё не ознакомился;</li>
                    <li><b>"в работе"</b> - задача, с которой исполнитель уже ознакомился;</li>
                    <li><b>"просрочено"</b> - этот статус присваивается задачам со статусом "новая", "в работе" или
                        "возвращенная", на следующий день после дедлайна;
                    </li>
                    <li><b>"на рассмотрении"</b> - задача, которую исполнитель отметил как завершенную, и ожидается
                        ответ менеджера;
                    </li>
                    <li><b>"возвращенная"</b> - этот статус присваивается задаче со статусом "на рассмотрении" после
                        отклонения менеджером завершения задачи; после просмотра исполнителем "возвращенной задачи" её
                        статус меняется на "в работе";
                    </li>
                    <li><b>"перенос срока"</b> - задача, в который исполнитель запросил перенос дедлайна и ожидается
                        ответ менеджера;
                    </li>
                    <li><b>"запланированная"</b> - неопубликованная задача, которая будет опубликована в дату, указанную
                        при создании задачи в поле "Отложенный старт";
                    </li>
                    <li><b>"завершенная"</b> - задача, которая была успешно завершена;</li>
                    <li><b>"отмененная"</b> - задача, которая была отменена менеджером.</li>
                </ul>
                <h2 id="control">Управление созданной задачей</h2>
                <h3 id="deadlineChange">Изменение срока</h3>
                <p>Менеджер задачи может изменить дату дедлайна, нажав на дедлайн и указав новую дату. Исполнитель
                    получит уведомление о переносе срока.
                </p>
                <p>Исполнитель может попросить перенос срока аналогичным образом, но с указанием причины запроса
                    переноса дедлайна. Менеджер получит уведомление о запросе на перенос срока и сможет одобрить или
                    отказать в переносе на странице этой задачи</p>
                <h3 id="membersChange">Изменение участников</h3>
                <p>Менеджер задачи имеет возможность изменить исполнителя и соисполнителей в меню исполнителей - нужно
                    навести на блок с менеджером и ответственным (в мобильной версии - нажать на него) и нажать на
                    кнопку "+", которая появится справа от блока. В этом меню при нажатии на иконку с карандашом
                    появляется возможность редактирования исполнителя и соисполнителей. При смене исполнителя и новый и
                    прежний исполнители получат уведомление об этом.</p>
                <h3 id="taskFinish">Завершение и отмена задачи</h3>
                <p>Менеджер задачи имеет возможность немедленно завершить либо отменить задачу, нажав соответствующую
                    кнопку на странице задачи.
                </p>
                <p>Исполнитель может отправить отчет о завершении задачи, нажав кнопку "Завершить задачу", далее
                    следует заполнить поле "Отчет о проделанной работе", при необходимости прикрепить файлы, и затем
                    нажать кнопку "Отправить на рассмотрение".</p>
                <p>Менеджер задачи получит уведомление об этом, а на странице задачи он увидит отчет исполнителя и
                    сможет либо принять задачу, и тогда она получит статус "завершенная", либо вернуть на доработку,
                    заполнив поле “Причина возврата” и указав новый дедлайн. При возврате задачи ей будет присвоен
                    статус "Возвращенная", исполнитель получит об этом уведомление и на странице задачи увидит причину
                    возврата.</p>
                <h3 id="stopRepeatTask">Отмена повторения задачи</h3>
                <p>Для отмены повторения задачи нужно в любой из созданных повторяющихся задач нажать на кнопку "Отменить повторение".</p>
                <h3 id="premiumControl">Дополнительные возможности</h3>
                <h4 id="editTask">Редактирование задачи</h4>
                <p>Для пользователей с премиум-тарифом доступна возможность редактирования задачи. В режиме
                    редактирования задачи так же, как и при ёё просмотре, можно изменить дедлайн, состав участников.
                    Помимо этого можно:
                <ul>
                    <li>изменить название и описание,</li>
                    <li>изменить параметры повторения задачи,</li>
                    <li>выбрать, изменить или отменить привязку к надзадаче,</li>
                    <li>изменить дату отложенного старта, если задача еще не опубликована,</li>
                    <li>изменить состав подпунктов,</li>
                    <li>удалить или прикрепить файлы.</li>
                </ul>
                </p>
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
