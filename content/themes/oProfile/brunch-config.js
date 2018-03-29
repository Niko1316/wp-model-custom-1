// See http://brunch.io for documentation.
exports.files = {
  // Je demande à Brunch de rassembler mon JS dans
  javascripts: {
    joinTo: {
      // app.js si il provient de mon dossier app
      'js/app.js': /^app/,
      // vendors.js si il ne provient pas de mon dossier app
      'js/vendors.js': /^(?!app)/,
    }
  },
  // Je demande à Brunch de rassembler mon CSS dans
  stylesheets: {
    joinTo: {
      // app.css si il provient de mon dossier app
      'css/app.css': /^app/,
      // vendors.css si il ne provient pas de mon dossier app
      'css/vendors.css': /^(?!app)/,
    }
  }
};

exports.plugins = {
  sass: {
    options: {
      includePaths: ['node_modules/font-awesome/scss']
    }
  },
  copycat: {
    'fonts': ['node_modules/font-awesome/fonts']
  },
  browserSync: {
    files: ['*']
  }
};

exports.npm = {
	styles: {
    // J'ajoute mon normalize dans mon css généré
		'normalize.css': ['normalize.css'],
    // J'ajoute font-awesome dans mon css généré
		// 'font-awesome': ['css/font-awesome.css']
	},
  // Je demande à brunch de déclarer ces variables globales
  // Reviens à faire dans mon js "var $ = jQuery = require('jquery');"
  globals: {
    '$': 'jquery', // $ = jquery
    'jQuery': 'jquery', // jQuery = jquery
  }
};

exports.modules = {
  // Je demande à brunch de venir require automatiquement initialize.
  autoRequire: {
    'js/app.js': ['initialize']
  }
};
