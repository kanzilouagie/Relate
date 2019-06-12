$('.navTrigger').click(function() {
  $(this).toggleClass('active');
  console.log('Clicked menu');
  $('#mainListDiv').toggleClass('show_list');
  $('.nav').toggleClass('nav_bg');
  $('#mainListDiv').fadeIn();
});
