var elixir = require('laravel-elixir');

elixir(function(mix) {
    var bower_components = './bower_components/';
    var resources_assets = './resources/assets/';
    var resources_assets_plugins = resources_assets + 'plugins/';
    mix.less([
        bower_components + 'bootstrap/less/bootstrap.less',
        bower_components + 'PACE/themes/purple/pace-theme-flash.css',
        bower_components + 'chosen/chosen.min.css',
        bower_components + 'select2/dist/css/select2.css',
        bower_components + 'bootstrap-datepicker/dist/css/bootstrap-datepicker3.css',
        bower_components + 'bootstrap-daterangepicker/daterangepicker.css',
        bower_components + 'bootstrap-timepicker/less/timepicker.less',
        bower_components + 'nestable2/jquery.nestable.css',
        bower_components + 'gritter/css/jquery.gritter.css',
        bower_components + 'At.js/dist/css/jquery.atwho.css',
        bower_components + 'datatables/media/css/dataTables.bootstrap.css',
        bower_components + 'x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css',
        resources_assets_plugins + 'redactorjs/css/redactor.css',
        resources_assets + 'css/climacons-font.css',
        resources_assets + 'css/filetypes.css',
        resources_assets + 'css/font-awesome.css',
        resources_assets + 'css/glyphicons.css',
        resources_assets + 'css/halflings.css',
        resources_assets + 'css/simple-line-icons.css',
        resources_assets + 'css/social.css',
        resources_assets + 'css/style.css',
        resources_assets + 'css/add-ons.css',
        resources_assets + 'less/helpers.less'
    ], './public/css/panel.css');
    mix.scripts([
        bower_components + 'jquery/dist/jquery.js',
        bower_components + 'bootstrap/dist/js/bootstrap.js',
        bower_components + 'jquery-ui/jquery-ui.js',
        bower_components + 'PACE/pace.js',
        bower_components + 'jquery-form/jquery.form.js',
        bower_components + 'moment/min/moment-with-locales.js',
        bower_components + 'chosen/chosen.jquery.min.js',
        bower_components + 'select2/dist/js/select2.full.js',
        bower_components + 'bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
        bower_components + 'bootstrap-datepicker/dist/locales/*.js',
        bower_components + 'bootstrap-daterangepicker/daterangepicker.js',
        bower_components + 'bootstrap-timepicker/js/bootstrap-timepicker.js',
        bower_components + 'nestable2/jquery.nestable.js',
        bower_components + 'gritter/js/jquery.gritter.js',
        bower_components + 'Caret.js/dist/jquery.caret.js',
        bower_components + 'At.js/dist/js/jquery.atwho.js',
        bower_components + 'bootbox.js/bootbox.js',
        bower_components + 'autosize/dist/autosize.js',
        bower_components + 'd3/d3.js',
        bower_components + 'datatables/media/js/jquery.dataTables.min.js',
        bower_components + 'datatables/media/js/dataTables.bootstrap.js',
        bower_components + 'jquery.inputmask/dist/jquery.inputmask.bundle.js',
        bower_components + 'Flot/jquery.flot.js',
        bower_components + 'x-editable/dist/bootstrap3-editable/js/bootstrap-editable.js',
        resources_assets_plugins + 'redactorjs/js/redactor.js',
        resources_assets_plugins + 'redactorjs/js/table.js',
        resources_assets_plugins + 'redactorjs/js/ru.js',
        resources_assets + 'js/core.js',
        resources_assets + 'js/helpers.js'
    ], './public/js/panel.js');
    mix.copy([
        bower_components + 'bootstrap/dist/fonts',
        resources_assets + 'fonts'
    ], './public/fonts');
    mix.copy([
        bower_components + 'gritter/images',
        resources_assets + 'images'
    ], './public/images');
});
