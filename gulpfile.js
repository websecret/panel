var elixir = require('secret-elixir');

elixir(function (mix) {

    var resourcesFolder = './resources/assets/';
    var publicFolder = './public/assets/';

    mix.less([
        resourcesFolder + 'less/fonts.less',
        resourcesFolder + 'css/bootstrap.css',
        resourcesFolder + 'css/font-awesome.css',
        resourcesFolder + 'css/plugins/dataTables/dataTables.bootstrap.css',
        resourcesFolder + 'css/plugins/dataTables/dataTables.tableTools.min.css',
        resourcesFolder + 'css/plugins/froala/froala_editor.pkgd.css',
        resourcesFolder + 'css/plugins/froala/froala_style.css',
        resourcesFolder + 'css/plugins/froala/themes/*.css',
        resourcesFolder + 'css/plugins/**/*.css',
        resourcesFolder + 'css/animate.css',
        resourcesFolder + 'less/style.less'
    ], publicFolder + 'css/panel.css');

    mix.babel(resourcesFolder + 'js/helpers.js', resourcesFolder + 'js/build.js');

    mix.scripts([
        resourcesFolder + 'js/jquery-2.2.2.js',
        resourcesFolder + 'js/bootstrap.js',
        resourcesFolder + 'js/plugins/metisMenu/jquery.metisMenu.js',
        resourcesFolder + 'js/plugins/slimscroll/jquery.slimscroll.min.js',
        resourcesFolder + 'js/plugins/pace/pace.min.js',
        resourcesFolder + 'js/inspinia.js',
        resourcesFolder + 'js/plugins/dataTables/jquery.dataTables.js',
        resourcesFolder + 'js/plugins/dataTables/dataTables.bootstrap.js',
        resourcesFolder + 'js/plugins/dataTables/dataTables.responsive.js',
        resourcesFolder + 'js/plugins/dataTables/dataTables.tableTools.min.js',
        resourcesFolder + 'js/plugins/fullcalendar/moment.min.js',
        resourcesFolder + 'js/plugins/flot/jquery.flot.js',
        resourcesFolder + 'js/plugins/rickshaw/vendor/d3.v3.js',
        resourcesFolder + 'js/plugins/codemirror/codemirror.js',
        resourcesFolder + 'js/plugins/flot/jquery.flot.js',
        resourcesFolder + 'js/plugins/redactor/redactor-all.min.js',
        resourcesFolder + 'js/plugins/redactor/plugins/*.js',
        resourcesFolder + 'js/plugins/redactor/langs/*.js',
        resourcesFolder + 'js/plugins/froala/froala_editor.pkgd.min.js',
        resourcesFolder + 'js/plugins/froala/plugins/*.js',
        resourcesFolder + 'js/plugins/**/*.js',
        resourcesFolder + 'js/build.js'
    ], publicFolder + 'js/panel.js');

    mix.copy([
        resourcesFolder + 'js/plugins/**/*.swf'
    ], publicFolder + 'swf');

    mix.copy([
        resourcesFolder + 'fonts/**',
        resourcesFolder + 'css/plugins/**/*.eot',
        resourcesFolder + 'css/plugins/**/*.woff',
        resourcesFolder + 'css/plugins/**/*.ttf'
    ], publicFolder + 'fonts');

    mix.copy([
        resourcesFolder + 'img/**',
        resourcesFolder + 'css/plugins/**/*.png',
        resourcesFolder + 'css/plugins/**/*.jpg',
        resourcesFolder + 'css/plugins/**/*.gif',
        resourcesFolder + 'css/plugins/**/*.svg'
    ], publicFolder + 'img');
});
