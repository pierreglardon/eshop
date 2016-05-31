// menu

var toggleMenu = $('.toggleMenu'),
    blackBG = $('.blackBG'),
    showSearch = $('.showSearch');

toggleMenu.click(function() {
    $('#navigation').toggleClass('active');
    $('body').toggleClass('openMenu');
    $('.blackbg').fadeToggle();
});
blackBG.click(function() {
    $('#navigation').toggleClass('active');
    $('body').toggleClass('openMenu');
    $('.blackbg').fadeToggle();
});
showSearch.click(function() {
    event.preventDefault();
    $('.search').fadeToggle();
});
