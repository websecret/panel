<?php

namespace Websecret\Panel\Models\Traits;

use GlideImage;

trait PhotoableTrait
{
    public function images()
    {
        $photoClass = config('panel.photo_model');
        return $this->morphMany($photoClass, 'imageable');
    }

    public function mainImage()
    {
        $photoClass = config('panel.photo_model');
        return $this->morphOne($photoClass, 'imageable')->main();
    }

    public static function getImageParams($type, $params = '')
    {
        if(!$params) {
            return [];
        }
        $imageParams = defined('static::IMAGES_PARAMS') ? static::IMAGES_PARAMS : [];
        return array_get($imageParams, $type.'.params.'.$params, []);
    }

    public static function getImageIsMultiple($type)
    {
        $imageParams = defined('static::IMAGES_PARAMS') ? static::IMAGES_PARAMS : [];
        return array_get($imageParams, $type.'.multiple', true);
    }

    public function loadImage($image, $params = '') {
        $photoClass = config('panel.photo_model');
        if($image instanceof $photoClass) {
            $path = $image->path;
            $type = $image->type;
        } else {
            $path = $image;
            $paramsArray = explode('.', $params);
            $type = array_shift($paramsArray);
            $params = implode('.', $paramsArray);
        }
        return GlideImage::load($path, static::getImageParams($type, $params));
    }

    public function getImagesView($type, $params = '') {
        return view('panel::partials.form.images', [
            'model' => $this,
            'type' => $type,
            'params' => $params,
        ]);
    }

    public function syncImages($data) {
        $images = array_get($data, 'images', []);
        if (empty($images)) {
            $this->images()->delete();
            return;
        }
        foreach(array_keys($images) as $type) {
            $this->syncImagesByType($data, $type);
        }
    }

    public function syncImagesByType($data, $type) {
        $photoClass = config('panel.photo_model');
        $this->images()->ofType($type)->delete();
        foreach(array_get($data, 'images.'.$type.'.path', []) as $key => $path) {
            $image = new $photoClass();
            $image->path = $path;
            $image->main = array_get($data, 'images.'.$type.'.main', 0) == $key ? 1 : 0;
            $image->type = $type;
            $this->images()->save($image);
        }
    }
}
