<?php
$email = '';
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="/public/js/jquery.steps.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<div class="">
    <div class="container pt-5">
        <h1 class="lead-text text-dark text-center mb-3">
            Регистрация
        </h1>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 mb-4">
                <form id="regForm" onsubmit="ym(53097463, 'reachGoal', 'reg'); return true;" name="regForm" action="https://s.lusy.io/reg/" method="POST">
                    <h5></h5>
                    <section>
                        <div class="form-group">
                            <div class="lead-text-under text-center mb-3 mt-0">
                                Отлично! Для регистрации введите Ваш email, а пароль мы отправим вам на почту
                            </div>
                            <input id="emailAdmin" type="text" value="<?=$email?>" name="email" class="form-control required email"
                                   placeholder="E-mail">
                        </div>
                    </section>
                    <div class="row">
                        <div class="col text-center">
                            <button id="registrationBtn" class="btn btn-primary" disabled>
                                Зарегистрироваться
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center pb-3">
            <p class="text-dark text-center">
                Уже зарегистрированы? <a href="https://s.lusy.io/login/" class="text-dark">Авторизация</a>
            </p>
        </div>
    </div>

</div>

<div class="modal fade" id="spinnerRegModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-0" style="margin-top: 60%;background-color: transparent;">
            <div class="modal-body text-center">
                <div class="spinner-border" style="width: 3rem; height: 3rem;color: #f2f2f2;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // получаем из браузера часовой пояс, город пояса и смещение от UTC
        var currentTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;
        var currentCity = currentTimeZone.split('/')[1];
        //часовой пояс на основе смещения

        // Получаем селект с такой зоной в value и селект с таким городом в тексте
        var timeZoneFromSelect = $('#timezone [value="' + currentTimeZone + '"]');
        var cityFromSelect = $('#timezone option:contains("' + currentCity + '")');
        if (timeZoneFromSelect.length > 0) {
            // если находим зону, то выбираем
            timeZoneFromSelect.attr('selected', true);
        } else if (cityFromSelect.length > 0) {
            // если нет - то выбираем option по совпадению города часовой зоны в тексте
            cityFromSelect.attr('selected', true);
        } else {
            // Последняя попытка определить часовой пояс - на основе смещения времени от UTC  минутах
            var timeOffset = new Date().getTimezoneOffset();

            // функция формирует строку вида 'GMT+HH:MM' или 'GMT-HH:MM'
            function timeZoneByOffset(offset) {
                var hoursOffset = Math.floor(Math.abs(offset / 60));
                var minutesOffset = Math.abs(offset % 60);
                var result = 'GMT';
                (offset <= 0) ? result += '+' : result += '-';
                result += (hoursOffset < 10 ? '0' : '') + hoursOffset;
                result += ':';
                result += (minutesOffset < 10 ? '0' : '') + minutesOffset;
                return result;
            }

            // Ищем в тексте селекта строку GMT....
            $('#timezone option:contains("' + timeZoneByOffset(timeOffset) + '")').attr('selected', true);
        }

        $('[data-toggle="tooltip"]').tooltip();
        $("a[href=\"#previous\"]").addClass('d-none');
        $("a[role=\"menuitem\"]").css({
            'text-align': 'center',
            'margin-bottom': '3%',
            'width': '20rem'
        });

        var securityMail = 0;

        if (securityMail  != 1){
            $("#registrationBtn").prop('disabled', true);
        }

        var email = $('#emailAdmin').val();

        var regMail = /^[0-9a-z-\.]+\@[0-9a-z-]{1,}\.[a-z]{2,}$/i;
        var checkMail = regMail.exec(email);

        if (checkMail == null){
            $('#registrationBtn').prop('disabled', true);
            securityMail = 0;
        } else {
            $('#registrationBtn').prop('disabled', false);
            securityMail = 1;
        }

        $('#emailAdmin').on('keyup', function () {
           var $this = $(this);

            email = $this.val();
            regMail = /^[0-9a-z-\.]+\@[0-9a-z-]{1,}\.[a-z]{2,}$/i;
            checkMail = regMail.exec(email);

            if (checkMail == null){
                $this.css({
                    'border': '1px solid #fbc2c4',
                    'color': '#8a1f11'
                });
                $('#registrationBtn').prop('disabled', true);
                securityMail = 0;
            } else {
                $this.css({
                    'border': '1px solid #ccc',
                    'color': '#495057'
                });
                $('#registrationBtn').prop('disabled', false);
                securityMail = 1;
            }
        });

        $('#registrationBtn').on('click', function () {
            $('#spinnerRegModal').modal('show');
        });
    });
</script>



