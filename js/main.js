$(document).ready(function () {
  location.hash && $(location.hash + '.collapse').collapse('show');
});


$(document).on('click', 'a[href*=#]', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});