// menu

var toggleMenu = $('.toggleMenu'),
    showSearch = $('.showSearch');

toggleMenu.click(function() {
    $('#navigation').toggleClass('active');
    $('body').toggleClass('openMenu blackBG');
    if ($('body').hasClass('openSearch')) {
        //do nothing if search open
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
        //do nothing if menu open
    } else {
        $('.blackbg').fadeToggle();
    }
});
