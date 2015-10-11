$(document).ready(function(){
    /**
     * Скріпт роботи слайдера ******************************************************************
     */
    var slider = $('.bxslider').bxSlider({
        controls: false,
        pager: false,
        auto: true
    });
    /**
     * Скріпт фіксування верхнього меню ********************************************************
     * @type {*|jQuery|HTMLElement}
     */
    var $menu = $("#top_background_wrapper");
    $(window).scroll(function(){
        if ( $(this).scrollTop() > 22 && $menu.hasClass("default") ){
            $menu.removeClass("default").addClass("fixed");
        } else if($(this).scrollTop() <= 22 && $menu.hasClass("fixed")) {
            $menu.removeClass("fixed").addClass("default");
        }
    });//scroll
    /**
     * Реакція на клік кнопок головного меню (навигации) ***********************************************
     */
    $('#main_menu').on("click", "li span", function(){
        $("body,html").animate({"scrollTop":0},"slow");
        var page = $(this).parent().attr("id").split('_')[2];
        $('#main_menu li span').removeClass('active_li');
        $(this).addClass('active_li');
        switch ($(this).parent().attr("id")){
            case 'menu_button_custom' :
                $('#slider').slideDown('slow');
                $('#custom_form_wrapper').slideDown('slow',function(){
                    $('#slider').hide();
                });
                //$('#slider').hide();
                $('#request_button_text').hide();
                $('#request_button_text_inverted').show();
                $('.content .get_price .get_price_button').addClass('get_price_button_inverted');
                getArticle('custom', function(response){
                    if(response.ststus = 'OK'){
                        $('.wrapper_article').html(response.content);
                    }
                    else
                        console.log('Error in request to custom article');
                });
                break;
            case 'menu_button_information':
                if($('#custom_form_wrapper').css("display") != 'none'){
                    $('#slider').show();
                    $('#slider .bx-wrapper').hide();
                    $('#slider .page_individual_img').show();
                    //slider.reloadSlider();
                    $('#custom_form_wrapper').slideUp('slow',function() {
                        $('#slider .bx-wrapper .bx-controls-direction').show();
                    });
                    $('#request_button_text').show();
                    $('#request_button_text_inverted').hide();
                    $('.content .get_price .get_price_button').removeClass('get_price_button_inverted');
                }
                else{
                    $('#slider .bx-wrapper').slideUp('slow', function () {
                        $('#slider .bx-wrapper').hide();
                    });
                    $('#slider .page_individual_img').show();
                }
                getArticle(page, function(response){
                    if(response.ststus = 'OK'){
                        $('.wrapper_article').html(response.content);
                    }
                    else
                        console.log('Error in request to custom article');
                });

                break;
            default :
                if($('#custom_form_wrapper').css("display") != 'none'){
                    $('#slider').show();
                    $('#slider .bx-wrapper').show();
                    $('#slider .page_individual_img').hide();
                    slider.reloadSlider();
                    $('#custom_form_wrapper').slideUp('slow');
                    $('#request_button_text').show();
                    $('#request_button_text_inverted').hide();
                    $('.content .get_price .get_price_button').removeClass('get_price_button_inverted');
                }
                else {
                    if ($('#slider').css("display") == 'none') {
                        $('#slider').show();
                    }
                    if($('#slider .bxslider').hasClass('hide_element')){
                        $('#slider .bxslider').removeClass('hide_element');
                        slider.reloadSlider();
                    }
                    if ($('#slider .bx-wrapper').css("display") == 'none') {
                        slider.reloadSlider();
                        $('#slider .bx-wrapper').slideDown('slow', function () {
                            $('#slider .page_individual_img').hide();
                            console.log('here');
                        });
                    }
                    getArticle(page, function (response) {
                        if (response.ststus = 'OK') {
                            $('.wrapper_article').html(response.content);
                        }
                        else
                            console.log('Error in request to custom article');
                    });
                }
                break;
        }
        /*if($(this).parent().attr("id") == 'menu_button_custom'){
            $('#slider .bx-wrapper .bx-controls-direction').hide();
            $('#slider').slideDown('slow');
            $('#custom_form_wrapper').slideDown('slow',function(){
                $('#slider').hide();
            });
            //$('#slider').hide();
            $('#request_button_text').hide();
            $('#request_button_text_inverted').show();
            $('.content .get_price .get_price_button').addClass('get_price_button_inverted');
            getArticle('custom', function(response){
                if(response.ststus = 'OK'){
                    $('.wrapper_article').html(response.content);
                }
                else
                    console.log('Error in request to custom article');
            })
        }
        else if($('#custom_form_wrapper').css("display") != 'none'){
            $('#slider').show();
            slider.reloadSlider();
            $('#custom_form_wrapper').slideUp('slow',function() {
                $('#slider .bx-wrapper .bx-controls-direction').show();
            });
            $('#request_button_text').show();
            $('#request_button_text_inverted').hide();
            $('.content .get_price .get_price_button').removeClass('get_price_button_inverted');
            getArticle(page, function(response){
                if(response.ststus = 'OK'){
                    $('.wrapper_article').html(response.content);
                }
                else
                    console.log('Error in request to custom article');
            })
        }
        else{
            getArticle(page, function(response){
                if(response.ststus = 'OK'){
                    $('.wrapper_article').html(response.content);
                }
                else
                    console.log('Error in request to custom article');
            })

        }*/
        window.history.pushState(null, null, '/' + page);
    })
    /**
     * Реакція на клік кнопки "Розрахувати вартість" ************************************************
     */
    $('#request_button_text').on('click', function(){
        $(this).hide();
        $('#request_button_text_inverted').show();
        $(this).parents('.get_price_button').addClass('get_price_button_inverted');
        $('#main_menu li span').removeClass('active_li');
        $('#main_menu #menu_button_custom span').addClass('active_li');
        $('#slider').slideDown('slow');
        $('#custom_form_wrapper').slideDown('slow');
        getArticle('custom', function(response){
            if(response.ststus = 'OK'){
                $('.wrapper_article').html(response.content);
            }
            else
                console.log('Error in request to custom article');
        })
    })
    /**
     * Функція для роботи кнопок браузера переходу "вперед" та "назад" ********************************
     */
    $(window).bind('popstate', function() {
        var page = location.href.split('/').slice(1)[2];
        if (!page)
            page = 'main';
        $('#main_menu li span').removeClass('active_li');
        $('#menu_button_' + page+ ' span').addClass('active_li');
       if(page == 'custom'){
           $('#slider').slideDown('slow');
           $('#custom_form_wrapper').slideDown('slow');
           $('#request_button_text').hide();
           $('#request_button_text_inverted').show();
           $('.content .get_price .get_price_button').addClass('get_price_button_inverted');
           getArticle('custom', function(response){
               if(response.ststus = 'OK'){
                   $('.wrapper_article').html(response.content);
               }
               else
                   console.log('Error in request to custom article');
           })
       }
        else if($('#custom_form_wrapper').css("display") != 'none'){
            $('#custom_form_wrapper').slideUp('slow');
            $('#request_button_text').show();
            $('#request_button_text_inverted').hide();
            $('.content .get_price .get_price_button').removeClass('get_price_button_inverted');
            getArticle(page, function(response){
                if(response.ststus = 'OK'){
                    $('.wrapper_article').html(response.content);
                }
                else
                    console.log('Error in request to custom article');
            })
        }
        else{
            getArticle(page, function(response){
                if(response.ststus = 'OK'){
                    $('.wrapper_article').html(response.content);
                }
                else
                    console.log('Error in request to custom article');
            })

        }
    });
    /**
     * Функція валідації форми відправки заявки на розрахунок послуг ********************************
     */
    $('body').on('click', '#request_button_text_inverted', function(){
       var error = false;
       if(!$('#address_out').val()) {
           $('#address_out').attr('placeholder', 'Введите, пожалуйста, адрес отпраки груза');
           $('#address_out').css('background', '#fdd');
           error = true;
       }
       else{
           $('#address_out').css('background', '#dfd');
       }

       if(!$('#address_in').val()){
           $('#address_in').attr('placeholder', 'Введите, пожалуйста, адрес доставки груза');
           $('#address_in').css('background', '#fdd');
           error = true;
       }
       else{
           $('#address_in').css('background', '#dfd');
       }

       if(!$('#cargo_type').val()){
           $('#cargo_type').attr('placeholder', 'Введите, пожалуйста, тип груза');
           $('#cargo_type').css('background', '#fdd');
           error = true;
        }
       else{
           $('#cargo_type').css('background', '#dfd');
       }

       if(!$('#cargo_weight').val()){
           $('#cargo_weight').attr('placeholder', 'Вес груз не указан');
           $('#cargo_weight').css('background', '#fdd');
           error = true;
       }
       else{
           $('#cargo_weight').css('background', '#dfd');
       }

       if(!$('#cargo_volume').val()){
           $('#cargo_volume').attr('placeholder', 'Обьем груза не указан');
           $('#cargo_volume').css('background', '#fdd');
           error = true;
       }
       else{
           $('#cargo_volume').css('background', '#dfd');
       }

       if(!$('#feedback_author').val()){
           $('#feedback_author').attr('placeholder', 'Введите Ваше контактное Имя');
           $('#feedback_author').css('background', '#fdd');
           error = true;
       }
       else{
           $('#feedback_author').css('background', '#dfd');
       }

       if(!$('#feedback_contacts').val()){
           $('#feedback_contacts').attr('placeholder', 'Введите Ваши контактные данные ');
           $('#feedback_contacts').css('background', '#fdd');
           error = true;
       }
       else{
           $('#feedback_contacts').css('background', '#dfd');
       }
       if(!error) {
          var data = {address_out  	     : $('#address_out').val(),
                      address_in   	     : $('#address_in').val(),
                      cargo_type   	     : $('#cargo_type').val(),
                      cargo_weight 	     : $('#cargo_weight').val(),
                      cargo_volume       : $('#cargo_volume').val(),
                      feedback_author    : $('#feedback_author').val(),
                      feedback_contacts  : $('#feedback_contacts').val(),
                      feedback_text      : $('#feedback_text').val()
          };
          sendCustom(data, function(r){
               if(r.status == "OK"){
                   $('.get_price h2').html('Мы свяжемся с Вами ближайшим временем');
                   $('.get_price .get_price_button').css("background","#34D800");
                   $('.get_price .get_price_button h2').html('Запрос отправлен');
                   $('#request_button_text_inverted').hide();
                   $('#request_button_text').show();
                   $('.content .get_price .get_price_button').removeClass('get_price_button_inverted');
                   $('#address_out, #address_in, #cargo_type, #cargo_weight, ' +
                      '#cargo_volume, #feedback_author, #feedback_contacts, #feedback_text')
                       .val('')
                       .css("background", '')
                       .attr('placeholder','');
               }
               else{
                   $('.get_price h2').html('Вы неверно ввели данные.');
                   $('.get_price .get_price_button h2').html('Повторый запрос');
               }
           });
       }
    });
});