// menu

var toggleMenu = $('.toggleMenu'),
    showSearch = $('.showSearch');

toggleMenu.click(function() {
    $('#navigation').toggleClass('active');
    $('body').toggleClass('openMenu noOverflowX blackBG');
    if ($('body').hasClass('blackBG')) {
        //do nothing if search open
    } else {
        $('.blackbg').fadeToggle();
    }
});
showSearch.click(function() {
    event.preventDefault();
    $('.search').slideToggle();
    $('body').toggleClass('openSearch noOverflowX blackBG');
    // $('.blackbg').fadeToggle();
    if ($('body').hasClass('blackBG')) {
        //do nothing if search open
    } else {
        $('.blackbg').fadeToggle(); 
    }
});
