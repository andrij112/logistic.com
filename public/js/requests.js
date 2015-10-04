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