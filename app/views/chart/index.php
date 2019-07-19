<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<div class="position-relative">
    <div class="d-none2">
        <div class="container">
            <h1 class="text-white mt-5 pb-5">Таблица лидеров</h1>
            <div class="card pl-4 pr-4 shadow-none pb-5">
                <div class="card-body">
                    <p class="mt-3 mb-5">Описание работы лидерборда, самым успешным выдача сувениров и магнитиков на
                        холодильник.</p>
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-secondary" style="border-radius: 20px;">
                                За всё время
                            </button>
                            <button class="btn btn-light ml-2" style="border-radius: 20px;">
                                За год
                            </button>
                            <button class="btn btn-light ml-2" style="border-radius: 20px;">
                                За месяц
                            </button>
                        </div>
                        <div class="col-6">
                            Ваша позиция в лидерборде: 123 / если залогинен
                        </div>
                    </div>
                    <div class="card mt-5">
                        <div class="card-body chart-body">
                            <div class="row">
                                <div class="col-1">
                                    <span class="text-secondary chart-align">1</span>
                                </div>
                                <div class="col-1">
                                    <span class="chart-align">
                                        <img src="/public/images/about-icon.svg"
                                             style="border-radius: 12px;width:40px; height: 40px">
                                    </span>
                                </div>
                                <div class="col-2">
                                    <span class="chart-align">Demo</span>
                                </div>
                                <div class="col-2">
                                    <span class="chart-align">500p</span>
                                </div>
                                <div class="col-2">
                                    <span class="text-success chart-align">
                                        + 10 %
                                    </span>
                                </div>
                                <div class="col-3">
                                    <div class="leader-container">

                                    </div>
<!--                                    <canvas id="myChart" class="my-chart"></canvas>-->
                                </div>
                                <div class="col-1">
                                    <span class="chart-align"
                                          style="transition: 200ms;padding-left: 10px;padding-right: 10px;">
                                        <i class="fas fa-caret-down"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-1">
                                    <span class="text-secondary chart-align">2</span>
                                </div>
                                <div class="col-1">
                                    <span class="chart-align">
                                        <img src="/public/images/about-icon.svg"
                                             style="border-radius: 12px;width:40px; height: 40px">
                                    </span>
                                </div>
                                <div class="col-2">
                                    <span class="chart-align">Demo</span>
                                </div>
                                <div class="col-2">
                                    <span class="chart-align">450p</span>
                                </div>
                                <div class="col-2">
                                    <span class="text-danger chart-align">
                                        - 10 %
                                    </span>
                                </div>
                                <div class="col-3">
                                    <div class="leader-container">

                                    </div>
<!--                                    <canvas id="myChart1" class="my-chart"></canvas>-->
                                </div>
                                <div class="col-1">
                                    <span class="chart-align"
                                          style="transition: 200ms;padding-left: 10px;padding-right: 10px;">
                                        <i class="fas fa-caret-down"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // var ctx = document.getElementById('myChart').getContext('2d');
    // var ctx1 = document.getElementById('myChart1').getContext('2d');
    // var chart1 = new Chart(ctx1,

    function createConfig(leaderBoard, data) {
        return {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data:
                {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets:
                        [{
                            fill: false,
                            backgroundColor: 'rgb(255,255,255)',
                            borderColor: leaderBoard,
                            data: data
                        }]
                }
            ,

            // Configuration options go here
            options: {
                responsive: true,
                layout:
                    {
                        padding: {}
                    }
                ,
                title: {
                    display: false,
                }
                ,
                label: {
                    display: false
                }
                ,
                legend: {
                    display: false
                }
                ,
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes:
                        [{
                            display: false,
                            ticks: {
                                suggestedMin: -2
                            }
                        }]
                }
                ,
                elements: {
                    line: {
                        borderWidth: 5
                    }
                    ,
                    point: {
                        radius: 0,
                        hitRadius:
                            10,
                    }
                }
            }
        };
    }

    window.onload = function () {
        [
            'rgb(13,166,82)',
            'rgb(166,16,31)'
        ].forEach(function (leaderBoard, data) {
            data = [0, 10, 5, 2, 20, 22, 41];
            var container = document.querySelector('.leader-container');
            var div = document.createElement('div');
            div.classList.add('chart-container');

            var canvas = document.createElement('canvas');
            div.appendChild(canvas);
            container.appendChild(div);

            var ctx = canvas.getContext('2d');
            var config = createConfig(leaderBoard, data);
            new Chart(ctx, config);

        })
    };

    // var chart = new Chart(ctx, {
    //     // The type of chart we want to create
    //     type: 'line',
    //
    //     // The data for our dataset
    //     data: {
    //         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    //         datasets: [{
    //             fill: false,
    //             backgroundColor: 'rgb(255,255,255)',
    //             borderColor: 'rgb(45,166,77)',
    //             data: [0, 10, 5, 2, 20, 30, 45]
    //         }]
    //     },
    //
    //     // Configuration options go here
    //     options: {
    //         responsive: true,
    //         layout: {
    //             padding: {}
    //         },
    //         title: {
    //             display: false,
    //         },
    //         label: {
    //             display: false
    //         },
    //         legend: {
    //             display: false
    //         },
    //         scales: {
    //             xAxes: [{
    //                 display: false
    //             }],
    //             yAxes: [{
    //                 display: false,
    //                 ticks: {
    //                     suggestedMin: -2
    //                 }
    //             }]
    //         },
    //         elements: {
    //             line: {
    //                 borderWidth: 5
    //             },
    //             point: {
    //                 radius: 0,
    //                 hitRadius: 10,
    //             }
    //         }
    //     }
    // });
</script>
