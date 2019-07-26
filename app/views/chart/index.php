<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<div class="position-relative">
    <div class="d-none2">
        <div class="container">
            <h1 class="text-white mt-5 pb-5">Таблица лидеров</h1>
            <div class="card pl-4 pr-4 shadow-none pb-5">
                <div class="card-body">
                    <p class="mt-3">Описание работы лидерборда, самым успешным выдача сувениров и магнитиков на
                        холодильник.</p>
                    <p class="mb-5">(1 * кол-во завершенных) - (10 * кол-во просрочек) + (0,1 * кол-во комментов и
                        сообщений) = Балл эффективности</p>
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <button class="btn btn-light mb-2 mr-2" id="allTimeChart" style="border-radius: 20px;">
                                За всё время
                            </button>
                            <button class="btn btn-light mr-2 mb-2" id="thisYearChart" style="border-radius: 20px;">
                                За год
                            </button>
                            <button class="btn btn-light mb-2" id="thisMonthChart" style="border-radius: 20px;">
                                За месяц
                            </button>
                        </div>
                        <div class="col-12 col-lg-4">
                            <span class="text-warning"><i class="fas fa-trophy"></i></span> <span class="text-muted">Ваша позиция:</span>
                            1
                        </div>
                    </div>
                    <div style="padding: 0.8rem;" class="d-sm task-box">
                        <div>
                            <div class="row sort">
                                <div class="col-1 text-center">
                                    <span class="pl-2">#</span>
                                </div>
                                <div class="col-4">
                                    <span>Компания</span>
                                </div>
                                <div class="col-1 text-center">
                                    <div class="logIcon check" data-toggle="tooltip"
                                         data-placement="bottom" title="Завершено">
                                        <i class="fas fa-check"></i>
                                    </div>
                                </div>
                                <div class="col-1 text-center">
                                    <div class="logIcon exclamation" data-toggle="tooltip"
                                         data-placement="bottom" title="Просрочено">
                                        <i class="fas fa-exclamation"></i>
                                    </div>
                                </div>
                                <div class="col-1 text-center">
                                    <div class="logIcon comment" data-toggle="tooltip"
                                         data-placement="bottom" title="Комментариев">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                </div>
                                <div class="col-1 text-center">
                                    <div class="logIcon plane" data-toggle="tooltip"
                                         data-placement="bottom" title="Сообщений">
                                        <i class="fas fa-paper-plane"></i>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <span>Итог</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="charts-container">


                        <div class="card chart-card mt-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-1 col-lg-1 text-center">
                                        <span class="text-secondary chart-align">
                                            1
                                        </span>
                                    </div>
                                    <div class="col-10 col-lg-4">
                                    <span class="chart-align name-company">
                                        Demo
                                    </span>
                                    </div>
                                    <div class="col-3 col-lg-1">
                                    <span class="text-success chart-align pl-2">
                                        50
                                    </span>
                                    </div>
                                    <div class="col-3 col-lg-1">
                                    <span class="chart-align text-danger pl-2">
                                        12
                                    </span>
                                    </div>
                                    <div class="col-3 col-lg-1">
                                    <span class="chart-align pl-2">
                                        10
                                    </span>
                                    </div>
                                    <div class="col-3 col-lg-1">
                                    <span class="chart-align pl-2">
                                        10
                                    </span>
                                    </div>
                                    <div class="col-3 col-lg-3 text-center">
                                    <span class="chart-align">
                                        10
                                    </span>
                                    </div>

                                </div>
                            </div>
                            <span class="position-absolute about-company" data-toggle="tooltip"
                                  data-placement="bottom" title="Подробнее">
                                    <i class="fas fa-caret-down"></i>
                        </span>
                            <div class="collapse" id="collapseExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-8">
                                            <h5>
                                                Демо полное название компании
                                            </h5>
                                        </div>
                                        <div class="col-12 col-lg-4 mb-2">
                                            <span class="text-muted">Количество сотрудников:</span>
                                            <span>50</span>
                                        </div>
                                    </div>
                                    <p><a href="#">http://localhost:8888/ru/chart/</a></p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but
                                        also
                                        the leap into electronic typesetting, remaining essentially unchanged.
                                        It
                                        was popularised in the 1960s with the release of Letraset sheets
                                        containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card chart-card mt-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-1 col-lg-1 text-center">
                                        <span class="text-secondary chart-align">
                                            1
                                        </span>
                                    </div>
                                    <div class="col-10 col-lg-4">
                                    <span class="chart-align name-company">
                                        Demo
                                    </span>
                                    </div>
                                    <div class="col-3 col-lg-1">
                                    <span class="text-success chart-align pl-2">
                                        50
                                    </span>
                                    </div>
                                    <div class="col-3 col-lg-1">
                                    <span class="chart-align text-danger pl-2">
                                        12
                                    </span>
                                    </div>
                                    <div class="col-3 col-lg-1">
                                    <span class="chart-align pl-2">
                                        10
                                    </span>
                                    </div>
                                    <div class="col-3 col-lg-1">
                                    <span class="chart-align pl-2">
                                        10
                                    </span>
                                    </div>
                                    <div class="col-3 col-lg-3 text-center">
                                    <span class="chart-align">
                                        10
                                    </span>
                                    </div>

                                </div>
                            </div>
                            <span class="position-absolute about-company" data-toggle="tooltip"
                                  data-placement="bottom" title="Подробнее">
                                    <i class="fas fa-caret-down"></i>
                        </span>
                            <div class="collapse" id="collapseExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-8">
                                            <h5>
                                                Демо полное название компании
                                            </h5>
                                        </div>
                                        <div class="col-12 col-lg-4 mb-2">
                                            <span class="text-muted">Количество сотрудников:</span>
                                            <span>50</span>
                                        </div>
                                    </div>
                                    <p><a href="#">http://localhost:8888/ru/chart/</a></p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but
                                        also
                                        the leap into electronic typesetting, remaining essentially unchanged.
                                        It
                                        was popularised in the 1960s with the release of Letraset sheets
                                        containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.btn').on('click', function () {
        $('.btn').removeClass('active');
        $(this).addClass('active');
    });

    $('#allTimeChart').on('click', function () {
        $('.charts-container').html('<div class="text-center mt-5">\n' +
            '                            <div class="spinner-border" style="width: 3rem; height: 3rem;color: #f2f2f2;"\n' +
            '                                 role="status">\n' +
            '                                <span class="sr-only">Loading...</span>\n' +
            '                            </div>\n' +
            '                        </div>');
        $.ajax({
            url: '/ajax.php',
            type: 'POST',
            data: {
                ajax: 'all-time-chart'
            },
            success: function (data) {
                setTimeout(function () {
                    $('.charts-container').html(data);
                }, 1000)
            },
        });
    });

    $('#thisYearChart').on('click', function () {
        $('.charts-container').html('<div class="text-center mt-5">\n' +
            '                            <div class="spinner-border" style="width: 3rem; height: 3rem;color: #f2f2f2;"\n' +
            '                                 role="status">\n' +
            '                                <span class="sr-only">Loading...</span>\n' +
            '                            </div>\n' +
            '                        </div>');
        $.ajax({
            url: '/ajax.php',
            type: 'POST',
            data: {
                ajax: 'this-year-chart'
            },
            success: function (data) {
                setTimeout(function () {
                    $('.charts-container').html(data);
                }, 1000)
            },
        });
    });

    $('#thisMonthChart').on('click', function () {
        $('.charts-container').html('<div class="text-center mt-5">\n' +
            '                            <div class="spinner-border" style="width: 3rem; height: 3rem;color: #f2f2f2;"\n' +
            '                                 role="status">\n' +
            '                                <span class="sr-only">Loading...</span>\n' +
            '                            </div>\n' +
            '                        </div>');
        $.ajax({
            url: '/ajax.php',
            type: 'POST',
            data: {
                ajax: 'this-month-chart'
            },
            success: function (data) {
                setTimeout(function () {
                    $('.charts-container').html(data);
                }, 1000)
            },
        });
    });
    $('.about-company').on('click', function () {
        $(this).next('.collapse').collapse('toggle');
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    $(document).ready(function () {
        // $('#thisMonthChart').trigger('click');
    })
</script>