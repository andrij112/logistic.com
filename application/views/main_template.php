<?php
    //$form
//    $form = 1;

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
    <!--<link rel="shortcut icon"  href="favicon.png" />-->
    <link rel="stylesheet"     href="public/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
    <!--<link rel="stylesheet" href="public/libs/font-awesome-4.2.0/css/font-awesome.min.css" />-->
   <!-- <link rel="stylesheet"     href="public/libs/fancybox/jquery.fancybox.css" />-->
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
                    <li id="menu_button_main"><span class="active_li">Головна</span></li>
                    <li id="menu_button_custom"><span>Замовлення</span></li>
                    <li id="menu_button_services"><span>Послуги</span></li>
                    <li id="menu_button_information"><span>Інформація</span></li>
                    <li id="menu_button_contacts"><span>Контакти</span></li>
                    <li id="menu_button_careers"><span>Вакансії</span></li>
                </ul>
            </div>
        </div>
    </header>
    <section>
        <div class="after_header">
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
                        <textarea class="input_form_row input_form_row_for_address" rows="2"></textarea>
                        <div class="label_input_form_row">
                            <p>Адреса доставки</p>
                        </div>
                        <textarea class="input_form_row input_form_row_for_address" rows="2"></textarea>
                        <div class="label_input_form_row">
                            <p>Вид вантажу</p>
                        </div>
                        <input class="input_form_row" type="text">
                        <div class="form_row">
                            <div class="form_column_smaller right_margin-30">
                                <div   class="label_input_form_row_smaller">Вага вантажу</div>
                                <input class="input_form_row_smaller" type="text">
                            </div>
                            <div class="form_column_smaller">
                                <div   class="label_input_form_row_smaller">Об’єм вантажу</div>
                                <input class="input_form_row_smaller" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form_column">
                        <div   class="label_form_column">
                            <p>Супроводжувальній лист</p>
                        </div>
                        <div   class="label_input_form_feedback_dark form_row top_margin-34 margin_bottom_5px"> Автор
                        </div>
                        <input class="input_form_feedback            form_row top_margin-34 margin_bottom_5px" type="text">
                        <div   class="label_input_form_feedback_dark form_row"> E-mail/Telephone</div>
                        <input class="input_form_feedback            form_row" type="text">
                        <div   class="label_input_form_feedback      form_row feedback_text_label">Текст :</div>
                        <textarea name="" id="feedback_text">
                        </textarea>
                    </div>
                </form>
            </div>
            <div id="slider">
                <img src="public/img/main.png" alt="main_image">
            </div>
        </div>
        <div class="wrapper_content">
            <div class="content">
                <div class="get_price">
                    <h2>Найвища якість на ринку логістики</h2>
                    <div class="get_price_button">
                        <h2>
                            <span id="request_button_text">Розрахувати вартість</span>
                            <span id="request_button_text_inverted">Надіслати запит</span>
                        </h2>
                    </div>
                </div>
                <div class="wrapper_article">
                   <?php echo $article ?>
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
<script src="public/libs/html5shiv/es5-shim.min.js"></script>
<script src="public/libs/html5shiv/html5shiv.min.js"></script>
<script src="public/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="public/libs/respond/respond.min.js"></script>
<![endif]-->
<script src="public/libs/jquery/jquery-1.11.1.min.js"></script>
<!--<script src="public/libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
<script src="public/libs/fancybox/jquery.fancybox.pack.js"></script>
<script src="public/libs/waypoints/waypoints-1.6.2.min.js"></script>
<script src="public/libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="public/libs/owl-carousel/owl.carousel.min.js"></script>
<script src="public/libs/countdown/jquery.plugin.js"></script>
<script src="public/libs/countdown/jquery.countdown.min.js"></script>
<script src="public/libs/countdown/jquery.countdown-ru.js"></script>
<script src="public/libs/landing-nav/navigation.js"></script>-->
<script src="public/js/common.js"></script>
<script src="public/js/requests.js"></script>
</body>
</html>
