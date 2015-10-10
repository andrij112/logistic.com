$(document).ready(function(){
    //console.log(window.location);
    /**
     * Реакция на клик главного меню (навигации) ***********************************************
     */
    $('#main_menu').on("click", "li span", function(){
        var page = $(this).parent().attr("id").split('_')[2];
        $('#main_menu li span').removeClass('active_li');
        $(this).addClass('active_li');
        if($(this).parent().attr("id") == 'menu_button_custom'){
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
        window.history.pushState(null, null, '/' + page);
    })
    /**
     * Реакция на клик кнопки "Розрахувати вартість" ************************************************
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
     * Функція для роботи кнопок браузера переходу "вперед" та "азад" ********************************
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
               if(r.status == "OK")
                    $('.get_price h2').val('Наш специалист відет с Вами на связь ближаешим временем.');
               else
                   $('.get_price h2').val('Вы неверно ввели данные. Заполните, пожалуста все поля формы.');
           });
       }
    });
});