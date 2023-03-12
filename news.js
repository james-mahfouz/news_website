$(document).ready(function(){
    $.ajax({
        url: "http://localhost/news_website/news_website_be/news.php",
        dataTYPE: "json",
        success: function(news){
            $.each(news, function(index,article){
                var html = '<div class="article">' +
                    '<h2 class="title">' + article.title + '</h2>' +
                    '<p class="author">By ' + article.author + '</p>' +
                    '<p class="content">' + article.content + '</p>' +
                    '<p class="date">' + article.date + '</p>' +
                    '</div>';
                $('.news').append(html);
            })
        }
    })
})