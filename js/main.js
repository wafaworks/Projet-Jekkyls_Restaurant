// Ouverture fiche restaurants quand link par footer

$(document).ready(function () {
  location.hash && $(location.hash + '.collapse').collapse('show');

 // Changement automatique du carousel toutes les 2s.
  setInterval(function(){chgmt(1)},2000);

  
  $('.smoothtrans').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

});

// Changement automatique du carousel toutes les 2s.