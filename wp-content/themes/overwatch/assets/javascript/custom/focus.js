// menu

var toggleMenu = $('.toggleMenu'),
    showSearch = $('.showSearch'),
    blackbg = $('.blackbg');

toggleMenu.click(function() {
    $('#navigation').toggleClass('active');
    $('body').toggleClass('openMenu blackBG');
    if ($('body').hasClass('openSearch')) {
        // ne change pas le fond noir s'il est déjà là
    } else {
        $('.blackbg').fadeToggle();
    }
});
showSearch.click(function() {
    event.preventDefault();
    $('.search').slideToggle();
    $('body').toggleClass('openSearch blackBG');
    // $('.blackbg').fadeToggle();
    if ($('body').hasClass('openMenu')) {
        // ne change pas le fond noir s'il est déjà là
    } else {
        $('.blackbg').fadeToggle();
    }
});
blackbg.click(function() { // ferme tout au clic sur le fond noir
    $('#navigation').removeClass('active');
    $('.search').slideUp();
    $('body').removeClass('openSearch openMenu');
    $('body').toggleClass('blackBG');
    $('.blackbg').fadeToggle();
});
