var elixir = require('laravel-elixir');

elixir(function(mix) {
    var bower_components = './bower_components/';
    var resources_assets = './resources/assets/';
    mix.styles([
        bower_components + 'bootstrap/dist/css/bootstrap.css',
        bower_components + 'jQuery.mmenu/dist/core/css/jquery.mmenu.all.css',
        resources_assets + 'css/climacons-font.css',
        resources_assets + 'css/filetypes.css',
        resources_assets + 'css/font-awesome.css',
        resources_assets + 'css/glyphicons.css',
        resources_assets + 'css/halflings.css',
        resources_assets + 'css/simple-line-icons.css',
        resources_assets + 'css/social.css',
        resources_assets + 'css/style.css',
        resources_assets + 'css/add-ons.css',
        bower_components + 'PACE/themes/purple/pace-theme-flash.css',
        bower_components + 'chosen/chosen.min.css',
        bower_components + 'select2/dist/css/select2.css',
        bower_components + 'nestable2/jquery.nestable.css',
        bower_components + 'gritter/css/jquery.gritter.css',
    ], './public/css/vendor.css');
    mix.scripts([
        bower_components + 'jquery/dist/jquery.js',
        bower_components + 'bootstrap/dist/js/bootstrap.js',
        bower_components + 'jQuery.mmenu/dist/core/js/jquery.mmenu.min.all.js',
        bower_components + 'jquery-ui/jquery-ui.js',
        bower_components + 'PACE/pace.js',
        bower_components + 'chosen/chosen.jquery.min.js',
        bower_components + 'select2/dist/js/select2.full.js',
        bower_components + 'nestable2/jquery.nestable.js',
        bower_components + 'gritter/js/jquery.gritter.js',
    ], './public/js/vendor.js');
    mix.copy([
        bower_components + 'bootstrap/dist/fonts',
        resources_assets + 'fonts',
    ], './public/fonts');
    mix.copy([
        bower_components + 'gritter/images',
        resources_assets + 'images',
    ], './public/images');
});
