$('.page-title').each(function(){
  var titleWidth = $(this).children('h1').outerWidth() + 6;
  var lineWidth = titleWidth - 7.5;
  
  $(this).find('.title-svg').attr('width', titleWidth);
  $(this).find('.title-line').attr('x2', lineWidth);
  $(this).find('.title-circle').attr('cx', lineWidth);
});

// Start CSS animation
$(document).ready(function() {
  $('.underline').addClass('animate');
  $('.page-intro').delay(500).addClass('fade-in');
});