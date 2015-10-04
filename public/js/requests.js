function getArticle(article, callback) {
    console.log(article);
    $.ajax({
        url: '/' + article,
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