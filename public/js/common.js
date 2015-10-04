$(document).ready(function(){
    //console.log(window.location);
    /**
     * Реакция на клик главного меню (навигации)
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
     * Реакция на клик кнопки "Розрахувати вартість"
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
});