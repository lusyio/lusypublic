<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<div class="container content">
    <div class="row mb-4">
        <div class="col-sm-8 pt-3">
            <h1>Битва месяца! Кто сделает больше?</h1>
            <p>Мы проводим ежемесячное состязание между компаниями, кто больше наберет активностей. Победителю - приз!
                Рассчет идет по
                формуле:</p>
            <p class="mb-5">(<strong>1</strong> * кол-во завершенных) - (<strong>10</strong> * кол-во просрочек) +
                (<strong>0,1</strong> * кол-во комментов и
                сообщений) = <span class="allCount">Балл эффективности</span></p>
        </div>
        <div class="col-sm-4">
            <img src="/public/images/winner.jpg">
        </div>
    </div>
    <div class="charts-container">
        <div class="card card-body">
            <div class="row">
                <div class="col-1 col-lg-1 text-center">
                </div>
                <div class="col-10 col-lg-4">
                                    <span class="chart-align name-company">
                                        Название компании
                                    </span>
                </div>
                <div class="col-3 col-lg-1">
                                    <span class="text-success chart-align pl-2">
                                        <i class="fas fa-check"></i>
                                    </span>
                </div>
                <div class="col-3 col-lg-1">
                                    <span class="chart-align text-danger pl-2">
                                        <i class="fas fa-fire-alt"></i>
                                    </span>
                </div>
                <div class="col-3 col-lg-1">
                                    <span class="chart-align pl-2">
                                        <i class="fas fa-comments"></i>
                                    </span>
                </div>
                <div class="col-3 col-lg-1">
                                    <span class="chart-align pl-2">
                                        <i class="fas fa-paper-plane"></i>
                                    </span>
                </div>
                <div class="col-3 col-lg-3 text-center">
                                    <span class="chart-align font-weight-bold">
                                        Итог
                                    </span>
                </div>

            </div>
        </div>
        <?php $n = 1; ?>
        <?php foreach ($companyData as $company): ?>
            <div class="card chart-card mt-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1 col-lg-1 text-center">
                                        <span class="text-secondary chart-align">
                                            <?= $n++; ?>
                                        </span>
                        </div>
                        <div class="col-10 col-lg-4">
                                    <span class="chart-align name-company">
                                        <?= $company['name']; ?>
                                    </span>
                        </div>
                        <div class="col-3 col-lg-1">
                                    <span class="text-success chart-align pl-2">
                                        <?= $company['taskDone']; ?>
                                    </span>
                        </div>
                        <div class="col-3 col-lg-1">
                                    <span class="chart-align text-danger pl-2">
                                        <?= $company['overdue']; ?>
                                    </span>
                        </div>
                        <div class="col-3 col-lg-1">
                                    <span class="chart-align pl-2">
                                        <?= $company['comment']; ?>
                                    </span>
                        </div>
                        <div class="col-3 col-lg-1">
                                    <span class="chart-align pl-2">
                                        <?= $company['message']; ?>
                                    </span>
                        </div>
                        <div class="col-3 col-lg-3 text-center">
                                    <span class="chart-align">
                                        <?= $company['score']; ?>
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
                                    <?= $company['fullName']; ?>
                                </h5>
                            </div>
                            <div class="col-12 col-lg-4 mb-2">
                                <span class="text-muted">Количество сотрудников:</span>
                                <span><?= $company['users']; ?></span>
                            </div>
                        </div>
                        <p><a href="<?= $company['site']; ?>"><?= $company['site']; ?></a></p>
                        <p><?= nl2br($company['description']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
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