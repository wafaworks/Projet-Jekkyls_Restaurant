// Ouverture fiche restaurants quand link par footer

$(document).ready(function () {
  location.hash && $(location.hash + '.collapse').collapse('show');
  setInterval(function(){chgmt(1)},3000);
});

// Changement automatique du carousel toutes les 2s.