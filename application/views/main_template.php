<?php
    //$form
    $form = 1;

?>


<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Logistic Line LTD</title>
    <meta name="description"           content="Услуги в сфере логистики" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"              content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon"  href="favicon.png" />
    <link rel="stylesheet"     href="public/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
    <!--<link rel="stylesheet" href="public/libs/font-awesome-4.2.0/css/font-awesome.min.css" />-->
    <link rel="stylesheet"     href="public/libs/fancybox/jquery.fancybox.css" />
    <!-- <link rel="stylesheet" href="public/libs/owl-carousel/owl.carousel.css" />
     <link rel="stylesheet"     href="public/libs/countdown/jquery.countdown.css" />-->
    <link rel="stylesheet"     href="public/css/fonts.css" />
    <link rel="stylesheet"     href="public/css/reset.css" />
    <link rel="stylesheet"     href="public/css/main.css" />
    <link rel="stylesheet"     href="public/css/media.css" />
</head>
<body>
<div id="top_background"></div>
<div class="wrapper">
    <header>
        <div class="header_topline">
            <img id="logo" src="public/img/logo.png" alt="logo"/>
            <div id="main_label">
                <h1>Logistic Line LTD </h1>
            </div>
            <div id="main_menu">
                <ul>
                    <li class="menu_button_main"><span class="active">Головна</span></li>
                    <li class="menu_button_custom"><span>Замовлення</span></li>
                    <li class="menu_button_services"><span>Послуги</span></li>
                    <li class="menu_button_information"><span>Інформація</span></li>
                    <li class="menu_button_contacts"><span>Контакти</span></li>
                    <li class="menu_button_сareers"><span>Вакансії</span></li>
                </ul>
            </div>
        </div>
    </header>
    <section>
        <div class="after_header">
            <?php if(!$form) {?>
            <div class="slider">
                <img src="public/img/main.png" alt="main_image">
            </div>
            <?php
            }
            else{ ?>
            <div id="custom_form_wrapper">
                <form action="">
                    <div class="form_column">
                        <div class="label_form_column">
                            <p>Параметри доставки</p>
                        </div>
                       <!-- <div class="form_row">
                            <input type="text">
                        </div>-->
                        <div class="label_input_form_row">
                            <p>Адреса відправлення</p>
                        </div>
                        <input class="input_form_row" type="text">
                        <div class="label_input_form_row">
                            <p>Адреса доставки</p>
                        </div>
                        <input class="input_form_row" type="text">
                        <div class="label_input_form_row">
                            <p>Вид вантажу</p>
                        </div>
                        <input class="input_form_row" type="text">
                        <div class="form_row">
                            <div class="form_column_smaller right_margin-30">
                                <div class="label_input_form_row_smaller">Вага вантажу</div>
                                <input class="input_form_row_smaller" type="text">
                            </div>
                            <div class="form_column_smaller">
                                <div class="label_input_form_row_smaller">Об’єм вантажу</div>
                                <input class="input_form_row_smaller" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form_column">
                        <div   class="label_form_column">
                            <p>Супроводжувальній лист</p>
                        </div>
                        <div   class="label_input_form_feedback form_row">Автор :</div>
                        <input class="form_row" type="text">
                        <div   class="label_input_form_feedback">E-mail/Telephone :</div>
                        <input class="form_row" type="text">
                        <textarea name="" id="" cols="30" rows="10">
                        </textarea>
                    </div>
                </form>
            </div>
            <?php } ?>
        </div>
        <div class="wrapper_content">
            <div class="content">
                <div class="get_price">
                    <h2>Найвища якість на ринку логістики</h2>
                    <div class="get_price_button">
                        <h2>Розрахувати вартість</h2>
                    </div>
                </div>
                <div class="wrapper_article">
                    <h1>Logistic Line LTD </h1>
                    <p>
                        Транспортная компания  основана в далеком 1998 году. За время пребывания 	на  данном
                        рынке услуг 	мы смогли зарекомендовать себя как надежный партнер,
                        при работе с которым всегда можно быть уверенным в том, что доставка груза пройдет на
                        достойном уровне. За более чем 15 лет работы мы смогли доказать, что автоперевозки - это                             один из самых быстрых, безопасных и качественных способов доставки грузов.
                        Международная грузоперевозка с нами – это выгодно и надежно!
                    </p>

                    <p>
                        Преимущество международных грузоперевозок с нашей компанией состоит в том, что мы
                        можем обеспечить перевозку грузов собственным транспортом. Основной сегмент нашей
                        деятельности занимает доставка грузов по территории Европы, а так же доставка грузов
                        по территории СНГ.
                    </p>

                    <p>
                        Мы являемся членами АсМАП (Ассоциация международных автомобильных перевозчиков Украины).
                        Как и другие компании грузоперевозок, являемся владельцами TIR Carnet с 2000 года. Этот
                        рынок постоянно требует совершенствования, и, следую этому правилу, мы постоянно
                        занимаемся обновлением и пополнением техники. В нашем парке есть как стандартные
                        тентованные автомобили от 86 до 120 м3, так и рефрижераторы, техника для перевозки
                        негабаритных грузов, опасных грузов, а так же автовозы для перевозки легковых автомобилей.
                    </p>

                    <p>
                        Транспортная компания Вива-Авто предлагает услуги по международным перевозкам грузов
                        в/из Украины, России, стран Прибалтики (Литва, Латвия, Эстония), Европы (Финляндия,
                        Польша, Чехия, Германия, Словакия, Словения, Италия), Турции, Грузии, Азербайджана.
                    </p>
                    <p>
                        В комплекс наших услуг входит:
                    </p>

                    <p>
                        - Предоставление информации о сроках международнойперевозки, стоимости и оптимальных
                        логистических схемах;
                    </p>
                    <p>
                        - Организация и доставка грузов автотранспортом, в том числе сборных и негабаритных
                        грузов, международнаяперевозка опасных грузов, легковых автомобилей из стран Европы,
                        России, Прибалтики, Юго-Восточной Азии;
                    </p>
                    <p>
                        - Информирование клиента о статусе международнойгрузоперевозки;
                    </p>
                    <p>
                        - Консультирование по вопросам, связанным с ведением внешнеэкономической деятельности и
                        таможенным оформлением. Предварительный расчет платежей и иных затрат;
                    </p>

                    <p>
                        - Консолидация и хранение по необходимости товаров на складах в Европе.
                    </p>

                    <p>За много лет работы мы смогли наладить крепкие партнерские взаимоотношения с
                        отечественными и зарубежными перевозчиками. Смогли проявить себя как надежные и
                        ответственные партнеры в работе с международными заказчиками. Наша транспортная компания
                        –  это оперативность, надежность, индивидуальный подход к каждому клиенту.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div id="footer_company_label">© Logistic Line LTD</div>
        <div id="footer_contacts">Тел.: (044) 22-11-824 e-mail: lll@ltd.ua Все права защищены</div>
        <div id="footer_developed">Powered by <span class="red">A</span>.MUR <span class="red">S</span>TUDIO</div>
    </footer>
</div>
<!--    <div id="bottom_background"></div>-->
<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->
<script src="libs/jquery/jquery-1.11.1.min.js"></script>
<script src="libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
<script src="libs/waypoints/waypoints-1.6.2.min.js"></script>
<script src="libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="libs/owl-carousel/owl.carousel.min.js"></script>
<script src="libs/countdown/jquery.plugin.js"></script>
<script src="libs/countdown/jquery.countdown.min.js"></script>
<script src="libs/countdown/jquery.countdown-ru.js"></script>
<script src="libs/landing-nav/navigation.js"></script>
<script src="js/common.js"></script>
<!-- Yandex.Metrika counter --><!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter25346996 = new Ya.Metrika({id:25346996, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/25346996" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>
