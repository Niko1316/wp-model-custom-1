var scrollex = require('jquery.scrollex');

var app = {

  init: function() {

    console.log('app.init');

    // Je créé mes variables pour cibler mes éléments
    $body = $('body');
    $header = $body.find('.header');
    $banner = $body.find('.banner');

    // Je cible tout les a dont le href vaut #
    $('a[href*="#"]:not([href="#"])').on('click', app.smoothScroll);

    // Je viens ajouter un evenement au click sur ".ui-button"
    $body.on('click', '.ui-button', app.toggleMenu);
    // La différence avec :
    // $('.ui-button').on('click', app.toggleMenu);
    // est dans mon cas, je demande à l'élément "body" de surveiller le click.

    // J'active scrollex sur mon élément banner
    $banner.scrollex({

      // L'évenement déclancheur sera calculé en fonction du bas de mon élément banner + la hauteur de mon header
      bottom: $header.height() + 12,

      // A l'entrée sur banner, je supprime la class fixed
      enter: function() {
        $header.removeClass('fixed');
      },

      // A la disparition de banner sur l'écran, le header a la class fixed
      leave: function() {
        $header.addClass('fixed');
      }

    });
  },
  toggleMenu: function(evt) {

    console.log('toggleMenu');

    // Je preventDefault mon click (pour ne pas recharger la page)
    evt.preventDefault();

    // J'ajoute ou retire la class menu-visible sur mon élément body.
    $body.toggleClass('menu-visible');
  },
  smoothScroll: function(evt) {

    // Je supprime l'evenement par défaut de l'ancre
    evt.preventDefault();

    // Je transforme la cible en objet jquery
    // hash: https://developer.mozilla.org/en-US/docs/Web/API/HTMLHyperlinkElementUtils/hash
    var target = $(this.hash);

    // Je récupere la position de mon element par rapport au haut de la page
    var targetPosition = target.offset().top - $header.height();

    if (target.length) {
      $('html, body').animate({
        scrollTop: targetPosition
      }, 1500);
    }
  }
};

$(app.init);
