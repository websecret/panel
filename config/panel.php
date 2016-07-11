<?php

return [

    'models_path' => app_path(),

    'address_model' => \Websecret\Panel\Models\Address::class,
    'phone_model' => \Websecret\Panel\Models\Phone::class,
    'photo_model' => \Websecret\Panel\Models\Photo::class,

    'autocomplete_url' => 'autocomplete',
    'upload_url' => 'upload/images',
    'upload_redactor_url' => 'upload/redactor/images',

    'address_view' => 'panel::partials.form.address',
    'addresses_view' => 'panel::partials.form.addresses',

];