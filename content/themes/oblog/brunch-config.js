// See http://brunch.io for documentation.
exports.files = {
  javascripts: {joinTo: 'app.js'},
  // Je demande à Brunch de rassembler mon css dans
  stylesheets: {
    joinTo: {
      // app.css si il provient de mon dossier app
      'css/app.css': /^app/,
      // vendors.css si il provient de mon dossier node_modules
      'css/vendors.css': /^node_modules/
    }
  }
};

exports.plugins = {

  // Copycat va me créer un dossier fonts dans public et déposer les fichiers de fonts présent dans node_modules/font-awesome
  copycat: {
    'fonts': ['node_modules/font-awesome/fonts']
  },

  // Je demande à browserSync de prendre en compte tous les fichiers
  browserSync: {
    files: ['*']
  }
};

exports.npm = {
  // J'ajoute mon normalize dans mon css généré
  styles: {
    'normalize.css': ['normalize.css'],
    'font-awesome': ['css/font-awesome.css']
  }
};
