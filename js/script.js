$(document).ready(function () {
    var article_width = $('.article').width();
    $('.article').css({
        'height': article_width / 2 + 'px'
    });

    $('.aside-menu-li').css({
        'line-height': $('.aside-menu-li').height() + 'px',
    })

    const articles = document.querySelectorAll('.article');

    for (var i = 0; i < articles.length; i++) {
        var article = articles[i].querySelector('.underline');

        var array = Array.from(articles[i].classList);

        article.classList.add(array[array.length-1]);
    }

    var aside = document.querySelector('.aside-menu');
    aside.style.minHeight = aside.offsetHeight + 'px';


})

$(window).resize(function () {
    var article_width = $('.article').width();
    $('.article').css({
        'height': article_width / 2 + 'px'
    });

    $('.aside-menu-li').css({
        'line-height': $('.aside-menu-li').height() + 'px'
    })

    if (window.innerWidth > 800) {
        $('.small-mobile-nav').css('display', 'none');
    }
})

$('.toggle-mobile-menu').click(function () {
    $('.small-mobile-nav').toggle(0, '.hide');
});
