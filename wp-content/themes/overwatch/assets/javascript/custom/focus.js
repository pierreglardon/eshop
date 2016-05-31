// menu

var toggleMenu = $('.toggleMenu'),
    showSearch = $('.showSearch');

toggleMenu.click(function() {
  $('#navigation').toggleClass('active');
  $('body').toggleClass('openMenu');
  if ($('.blackbg').length){
        $('.blackbg').remove();
    }
  $("body").append("<div class='blackbg'></div>");
  $('.blackbg').fadeToggle();

});
showSearch.click(function() {
    event.preventDefault();
    $('.search').fadeToggle();
});
