<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<div class="container content">
    <div class="row mb-4">
        <div class="col-sm-7 col-md-6 col-lg-8">
            <h1 class="chartH">Битва месяца! Кто сделает больше?</h1>
            <p>Мы проводим ежемесячное состязание между компаниями, кто больше наберет активностей. Победителю - приз!
                Расчет идет по
                формуле:</p>
            <p class="mb-5">(<strong>1</strong> * кол-во завершенных) - (<strong>10</strong> * кол-во просрочек) +
                (<strong>0,1</strong> * кол-во комментов и
                сообщений) = <span class="allCount">Балл эффективности</span></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-5">
            <img src="/public/images/winner.jpg">
        </div>
    </div>
    <div class="charts-container">
        <div class="card card-body headchart">
            <div class="row">
                <div class="col-1 col-lg-1 text-center">
                </div>
                <div class="col-10 col-lg-4">
                                    <span class="chart-align name-company">
                                        Название компании
                                    </span>
                </div>
                <div class="col-3 col-lg-1 text-center">
                                    <span class="text-success chart-align pl-2">
                                        <i class="fas fa-check"></i>
                                    </span>
                </div>
                <div class="col-3 col-lg-1 text-center">
                                    <span class="chart-align text-danger pl-2">
                                        <i class="fas fa-fire-alt"></i>
                                    </span>
                </div>
                <div class="col-3 col-lg-1 text-center">
                                    <span class="chart-align pl-2">
                                        <i class="fas fa-comments"></i>
                                    </span>
                </div>
                <div class="col-3 col-lg-1 text-center">
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
                        <div class="col-1 col-lg-1 chart-align">
                                        <span class="text-secondary">
                                            <?php if ($n == 1) { ?>
                                                <i class="fas fa-crown text-warning font-weight-bold h4 mb-0"></i>
                                            <?php } else {
                                                echo $n;
                                            }
                                            $n++;
                                            ?>
                                        </span>
                        </div>
                        <div class="col-7 col-lg-4 chart-align text-left">
                                    <span class="name-company">
                                        <?= $company['name']; ?>
                                    </span>
                        </div>
                        <div class="col-2 col-lg-1 chart-align d-none d-md-block">
                                    <span class="text-success pl-2">
                                        <?= $company['taskDone']; ?>
                                    </span>
                        </div>
                        <div class="col-2 col-lg-1 chart-align d-none d-md-block">
                                    <span class="text-danger pl-2">
                                        <?= $company['overdue']; ?>
                                    </span>
                        </div>
                        <div class="col-2 col-lg-1 chart-align d-none d-md-block">
                                    <span class="pl-2">
                                        <?= $company['comment']; ?>
                                    </span>
                        </div>
                        <div class="col-2 col-lg-1 chart-align d-none d-md-block">
                                    <span class="pl-2">
                                        <?= $company['message']; ?>
                                    </span>
                        </div>
                        <div class="col-3 col-lg-3 chart-align">
                                    <span>
                                        <?= $company['score']; ?>
                                    </span>
                        </div>

                    </div>
                </div>
                <span class="position-absolute about-company" data-toggle="tooltip"
                      data-placement="bottom" title="Подробнее">
                                    <i class="fas fa-caret-down"></i>
                            </span>
                <div class="collapse" id="collapseCompany">
                    <div class="card-body pt-0">
                        <hr class="mt-0">
                        <div class="row">
                            <div class="col-sm-1 text-center d-none d-md-block"><i
                                        class="fas fa-info-circle text-secondary <?php if (!empty($company['fullName'])): ?>mt-1<?php endif; ?>"></i>
                            </div>
                            <div class="col-sm-11">
                                <div><?php if (!empty($company['fullName'])): ?><span
                                            class="h6"><?= $company['fullName']; ?></span> / <?php endif; ?>
                                    <small><span class="text-muted">Количество сотрудников:</span>
                                        <span><?= $company['users']; ?></span></small>
                                </div>
                                <p><a href="http://<?= $company['site']; ?>"><?= $company['site']; ?></a></p>
                                <p class="mb-0"><?= nl2br($company['description']); ?></p>

                            </div>
                        </div>
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