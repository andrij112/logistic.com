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
    <link rel="stylesheet"     href="public/css/fonts.css" />
    <link rel="stylesheet"     href="public/css/reset.css" />
    <link rel="stylesheet"     href="public/css/main.css" />
    <link rel="stylesheet"     href="public/css/jquery.bxslider.css" />
    <link rel="stylesheet"     href="public/css/media.css" />
</head>
<body>
<div id="top_background"></div>
<div class="wrapper">
    <header>
        <div class="header_topline">
            <div id="top_background_wrapper" class="default">
                <img id="logo" src="public/img/logo.png" alt="logo"/>
                <div id="main_label">
                    <h1>Logistic Line LTD </h1>
                </div>
                <div id="main_menu">
                    <ul>
                        <li id="menu_button_main"><span <?php
                            echo ($page == 'main' || $page == '') ? 'class="active_li"': ''?>>Главная</span></li>
                        <li id="menu_button_custom"><span <?php
                            echo $page == 'custom' ? 'class="active_li"': ''?>>Заказ</span></li>
                        <li id="menu_button_services"><span <?php
                            echo $page == 'services' ? 'class="active_li"': ''?>>Услуги</span></li>
                        <li id="menu_button_information"><span <?php
                            echo $page == 'information' ? 'class="active_li"': ''?>>Информация</span></li>
                        <li id="menu_button_contacts"><span <?php
                            echo $page == 'contacts' ? 'class="active_li"': ''?>>Контакты</span></li>
                        <li id="menu_button_careers"><span <?php
                            echo $page == 'careers' ? 'class="active_li"': ''?>>Вакансии</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="after_header">
            <div id="custom_form_wrapper" <?php
                if ($page != 'custom')
                    echo 'class="hide_element"';
            ?>>
                <form id = "custom_form" action="">
                    <div class="form_column">
                        <div class="label_form_column_left">
                            <h2>Параметры доставки</h2>
                        </div>
                        <div class="label_input_form_row">
                            <p>Адрес отправителя</p>
                        </div>
                        <textarea id = "address_out" class="input_form_row input_form_row_for_address"
                                  rows="2" ></textarea>
                        <div class="label_input_form_row">
                            <p>Адрес доставки</p>
                        </div>
                        <textarea id = "address_in" class="input_form_row input_form_row_for_address"
                                  rows="2"></textarea>
                        <div class="label_input_form_row">
                            <p>Вид груза</p>
                        </div>
                        <input id = "cargo_type" class="input_form_row" type="text">
                        <div class="form_row">
                            <div class="form_column_smaller right_margin-30">
                                <div   class="label_input_form_row_smaller">Вес груза</div>
                                <input id = "cargo_weight" class="input_form_row_smaller" type="text" />
                            </div>
                            <div class="form_column_smaller">
                                <div   class="label_input_form_row_smaller">Обьем груза</div>
                                <input id = "cargo_volume" class="input_form_row_smaller" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form_column">
                        <div   class="label_form_column_right">
                            <h2>Сопроводительное письмо</h2>
                        </div>
                        <div   class="label_input_form_feedback_dark form_row top_margin-34 margin_bottom_5px"> Автор
                        </div>
                        <input id = "feedback_author" class="input_form_feedback form_row top_margin-34
                        margin_bottom_5px" type="text" />
                        <div   class="label_input_form_feedback_dark form_row"> E-mail/Телефон</div>
                        <input id="feedback_contacts" class="input_form_feedback            form_row" type="text" />
                        <div   class="label_input_form_feedback form_row feedback_text_label">Текст :</div>
                        <textarea name="" id="feedback_text"></textarea>
                    </div>
                </form>
            </div>
            <div id="slider">
                <ul class="bxslider <?php
                    echo $page == 'information'?
                        'hide_element' : ''
                ?>">
                    <li>
                        <img src="public/img/1.png" alt = "auto"/>
                    </li>
                    <li>
                        <img src="public/img/2.png" alt = "ship"/>
                        <div class="slide-2">
                            <p>Мы можем гарантировать сохранность вашего груза</p>
                        </div>
                    </li>
                    <li>
                        <img src="public/img/3.png" alt = "airplane"/>
                        <div class="slide-3">
                            <p>Все будет доставленно по тщательно прощитаному </p>
                            <p>маршруту с минимальными издержками</p>
                        </div>
                    </li>
                </ul>
                <img class="page_individual_img <?php
                    echo $page == 'information'?
                        '' : 'hide_element'
                ?>" src="public/img/5.png" alt="info">
            </div>
        </div>
        <div class="wrapper_content">
            <div class="content">
                <div class="get_price">
                    <h2>Лучшее качество на рынке логистики</h2>
                    <div class="get_price_button <?php
                        echo $page == 'custom' ? 'get_price_button_inverted' : ''?>">
                        <h2>
                            <span id="request_button_text"  <?php
                                echo $page == 'custom' ? 'class="hide_element"' : ''?>>Расчет стоимости</span>
                            <span id="request_button_text_inverted" <?php
                                echo $page == 'custom' ? '' : 'class="hide_element"'?>>Отправить запрос</span>
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
<script src="public/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
<script src="public/js/common.js"></script>
<script src="public/js/requests.js"></script>
</body>
</html>
