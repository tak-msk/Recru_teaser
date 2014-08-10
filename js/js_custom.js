// scrolling to page sections
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


// PROGRAM
// drop down toggle
$(function () {
	$('.sub-section-button').click(function () {
		$(this).next('div').slideToggle();

		$(this).parent().siblings().children().next().slideUp();
		return false;
	});
});

// Enable Submit button when the checkbox is checked
$(function () {
  $('#checkme').click(function () {
    
    //check if checkbox is checked
    if ($(this).is(':checked')) {
      $('#submit_form').removeAttr('disabled'); //enable input
    } else {
      $('#submit_form').attr('disabled', true); //disable input
    }
  });
});
