

$(function(){


  //first-image
    $('.first-image').delay(1200).slideUp(700);

    $('.typist').delay(10000).fadeOut('slow');


  //slick
    $('.slider').slick({
      fade: true,
      arrows: false,
      autoplay:true,
      infinite:true,
      speed:5000,
      autoplaySpeed:3000,
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false
    });

  //icon
  $(window).on('scroll', function (){

  var elem = $('.elem');
  var p_elem = $('.p_elem');
  var isAnimate = 'isAnimate';
  var p_isAnimate = 'p_isAnimate';
  var profile = $('.from-right');

  elem.each(function () {

    var elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if(scrollPos > elemOffset - wh + (wh / 4) ){
      $(this).addClass(isAnimate);
    }


  });
  p_elem.each(function () {

    var p_elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if(scrollPos > p_elemOffset - wh + (wh / 4) ){
      $(this).addClass(p_isAnimate);
    }
  });

});







});
