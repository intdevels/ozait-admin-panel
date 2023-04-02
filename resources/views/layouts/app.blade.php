<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ozait приложения и сайты для вашего бизнеса</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    @stack('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="icon" type="fonts/png" href="fonts/Group.png">

</head>

<body>

<header class="wrapper">
    <a class="menu__logo element-animation" href><img class="logo_img" src="fonts/Group.png" alt> <span
            style="color: black;">ozait</span></a>
    <a class="item__menu element-animation" href="#services">Услуги</a>
    <a class="item__menu element-animation" href="#team">Специалисты</a>
    <a class="item__menu element-animation" href="#advantage">О нас</a>
    <a class="menu__btn  element-animation" href="#we">Кейсы</a>
</header>

<div class="wrapper hamburger-menu">
    <div>

        <input id="menu__toggle" type="checkbox">
        <label class="menu__btn_burger" for="menu__toggle">
            <span></span>
        </label>
        <a class="menu__logo element-animation" href><img class="logo_img" src="fonts/Group.png" alt> <span
                style="color: black;">ozait</span></a>
        <ul class="menu__box">
            <li><a class="item__menu menu__item" href="#services">Услуги</a></li>
            <li><a class="item__menu menu__item" href="#team">Специалисты</a></li>
            <li><a class="item__menu menu__item" href="#advantage">О нас</a></li>
            <li><a class="item__menu menu__item" href="#we">Кейсы</a></li>
        </ul>
    </div>
    <div style="width: 26px;"></div>
</div>

@yield('content')

<footer>
    <div class="wrapper footer">

        <div class="popl">Оставились вопросы? <span style="color:black" ; class="sddv">напишите нам в Поддержку</span>
        </div>
        <div class="ft_icon">
            <a href="https://t.me/oz0it"><img src="images/free-icon-telegram-3670070.png" alt></a>
            <a href="https://vk.com/ozait"><img src="images/vrk.png" alt></a>


        </div>
    </div>
</footer>
<section class="section77 ">
    <div class="container332">
        <div class="sdcsdc">Политика конфиденциальности ozait</div>


    </div>
</section>


<div class="popup-fade">
    <div class="popup">
        <a class="popup-close">Закрыть</a>
        <img src="images/img1.png" alt>
        <p>Всплывающие окна c информацией</p>
        <a class="site_port" href="https://letsart.ru/">https://letsart.ru/</a>
    </div>
</div>

<div class="popup-fade_2">
    <div class="popup_2">
        <a class="popup-close_2">Закрыть</a>
        <img src="images/img2.png" alt>
        <p>Всплывающие окна c информацией</p>
        <a class="site_port" href="http://lines.chromeexperiments.com/">http://lines.chromeexperiments.com/</a>
    </div>
</div>

<div class="popup-fade_3">
    <div class="popup_3">
        <a class="popup-close_3">Закрыть</a>
        <img src="images/img3.png" alt>
        <p>Всплывающие окна c информацией</p>
        <a class="site_port" href="https://storm-chess.com/en/">https://storm-chess.com/en/</a>
    </div>
</div>

<div class="popup-fade_4">
    <div class="popup_4">
        <a class="popup-close_4">Закрыть</a>
        <img src="images/img4.png" alt>
        <p>Всплывающие окна c информацией</p>
        <a class="site_port" href="https://findclone.ru/">https://findclone.ru/</a>
    </div>
</div>

<div class="popup-fade_5">
    <div class="popup_5">
        <a class="popup-close_5">Закрыть</a>
        <img src="fonts/logoufhguf.svg" alt>
        <p>Всплывающие окна c информацией</p>
        <a class="site_port" href="https://click-storm.com/">https://click-storm.com/</a>
    </div>
</div>

<div class="popup-fade_6">
    <div class="popup_6">
        <a class="popup-close_6">Закрыть</a>
        <img src="images/logojgjjjhg.png" alt>
        <p>Всплывающие окна c информацией</p>
        <a class="site_port" href="http://shoptest.epizy.com/">http://shoptest.epizy.com/</a>
    </div>
</div>


<script src="{{ asset('assets/js/jquery-2.2.0.min.js') }}" type="text/javascript"></script>
{{--<script src="js/jquery.min.js"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/js.js') }}"></script>
<script type="text/javascript">
    function slyLink() {

        var istS = 'Источник:'; // Слово заключать в кавычки

        var copyR = '© сайт'; // Название сайта – нужно заключать в кавычки

        var body_element = document.getElementsByTagName('body')[0];

        var choose;

        choose = window.getSelection();

        var myLink = document.location.href;

        var authorLink = `${istS} + ${myLink} + ${copyR}`;

        var copytext = choose + authorLink;

        var addDiv = document.createElement('div');

        addDiv.style.position = 'absolute';

        addDiv.style.left = '-99999px';

        body_element.appendChild(addDiv);

        addDiv.innerHTML = copytext;

        choose.selectAllChildren(addDiv);

        window.setTimeout(function () {

            body_element.removeChild(addDiv);

        }, 0);

    }

    document.oncopy = slyLink;

</script>
<script>
    document.ondragstart = noselect;

    document.onselectstart = noselect;

    document.oncontextmenu = noselect;

    function noselect() {
        return false;
    }

</script>
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $("form").submit(function () {--}}
{{--            // Получение ID формы--}}
{{--            var formID = $(this).attr('id');--}}
{{--            // Добавление решётки к имени ID--}}
{{--            var formNm = $('#' + formID);--}}
{{--            $.ajax({--}}
{{--                type: "POST",--}}
{{--                url: '/send.php',--}}
{{--                data: formNm.serialize(),--}}
{{--                beforeSend: function () {--}}
{{--                    // Вывод текста в процессе отправки--}}
{{--                    $(formNm).html('<p style="text-align:center">Отправка...</p>');--}}
{{--                },--}}
{{--                success: function (data) {--}}
{{--                    // Вывод текста результата отправки--}}
{{--                    $(formNm).html('<p style="text-align:center">' + data + '</p>');--}}
{{--                },--}}
{{--                error: function (jqXHR, text, error) {--}}
{{--                    // Вывод текста ошибки отправки--}}
{{--                    $(formNm).html(error);--}}
{{--                }--}}
{{--            });--}}
{{--            return false;--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
</body>

</html>
