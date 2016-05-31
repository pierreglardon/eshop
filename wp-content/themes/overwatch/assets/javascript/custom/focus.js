// menu

var toggleMenu = $('.toggleMenu'),
    showSearch = $('.showSearch'),
    blackbg = $('.blackbg');

toggleMenu.click(function() {
    $('#navigation').toggleClass('active');
    $('body').toggleClass('openMenu');
    if ($('body').hasClass('openSearch')) {
        $('.search').slideToggle();
        $('body').toggleClass('openSearch');
    } else {
        $('.blackbg').fadeToggle();
    }
});
showSearch.click(function() {
    event.preventDefault();
    $('.search').slideToggle();
    $('body').toggleClass('openSearch');
    if ($('body').hasClass('openMenu')) {
        $('#navigation').removeClass('active');
        $('body').toggleClass('openMenu');
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
