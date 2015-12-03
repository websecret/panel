Laravel 5 admin panel template
==============================

Installation
------------
This package is very easy to set up. There are only couple of steps.

Composer
--------
Pull this package in through Composer (file composer.json).

    {
        "require": {
            "websecret/panel": "dev-master"
        }
    }

Run this command inside your terminal.

    composer update


Service Provider
----------------

Add the package to your application service providers in config/app.php file.

    'providers' => [
        Websecret\Panel\PanelServiceProvider::class,
    ],
    

Views And Assets
----------------

Publish the package views and assets to your application. Run these commands inside your terminal.

    php artisan vendor:publish --provider="Websecret\Panel\PanelServiceProvider" --tag=views
    php artisan vendor:publish --provider="Websecret\Panel\PanelServiceProvider" --tag=assets

Use `--force` to overwrite files

Usage
=====

Helpers.js
-------

Classes
-------
`.js_panel_form-ajax` - forms will be submited by AJAX. U can use `.js_form-ajax-redirect` to redirect on repsonse data.link page

`.js_panel_delete-table-row` - attach prompt (y/n) popup on delete action

`.js_panel_input-date`  - use for init [bootsrap datepicker](https://bootstrap-datepicker.readthedocs.org/) on input 

`.js_panel_input-time` - use for init [bootstrap timicker](http://jdewit.github.io/bootstrap-timepicker/) on input 
 
 `.js_panel_input-mask` - use for init mask on input via input `data-mask` attribute
 
 `.js_panel_input-phone` - working same as .js_panel_input-mask. Mask is  '+375 (99) 999-99-99'
 
 `.js_panel_input-chosen` - use it on selects to init [chosen](https://harvesthq.github.io/chosen/)
 
 `.js_panel_input-redactor` - use it to init [redactor.js](https://imperavi.com/redactor/) wysiwyg

Functions
---------

`showNotification(text, title, type)`

Helpers.less
-----------
`.td-actions` - set row min width and remove text wrap

`.mb-5` - `.mb-25` - use to add margin-bottom