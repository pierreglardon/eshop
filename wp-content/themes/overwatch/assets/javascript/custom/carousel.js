$(document).ready(function(){
    $('.owl-carousel-header').owlCarousel();
    $('.owl-carousel-marques').owlCarousel({
        loop:true,
        margin:10,
        items:4,
        dots:true,
        dotClass:"fa fa-circle",
        autoplay:true
    })
});
