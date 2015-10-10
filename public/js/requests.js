/**
 * Функція отримання вмісту статтей відповідної сторінки *************************************************
 * @param article
 * @param callback
 */
function getArticle(article, callback) {
    if (article)
        var url = '/get_' + article;
    else
        var url = '/get_main';
    $.ajax({
        url: url,
        dataType: 'json',
        cache: true,
        contentType: false,
        processData: false,
        type: 'post',
        success: function (response) {
            if (callback)
                callback(response);
        }
    })
};
/**
 * Функція передачі даних ведених в полях форми для створення листа консультанту **************************
 * @param data
 * @param callback
 */
function sendCustom(data, callback) {
    console.log(data);
    $.ajax({
        url: '/send_custom',
        dataType: 'json',
        data: data,
        cache: true,
        type: 'post',
        success: function (response) {
            if (callback)
                callback(response);
        }
    })
};
