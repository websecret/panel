<?php

namespace Websecret\Panel\Models\Traits;

use File;
use GlideImage;

trait ImageableTrait
{
    public $imagesFolder = 'uploads' . DIRECTORY_SEPARATOR . 'images';

    public function images()
    {
        $imageClass = config('panel.image_model');
        return $this->morphMany($imageClass, 'imageable')->orderBy('order');
    }

    public function mainImage()
    {
        $imageClass = config('panel.image_model');
        return $this->morphOne($imageClass, 'imageable')->orderBy('order')->main();
    }

    public static function getImageParams($type = '', $params = '')
    {
        if (!$type || !$params) {
            return [];
        }
        $imageParams = defined('static::IMAGES_PARAMS') ? static::IMAGES_PARAMS : [];
        return array_get($imageParams, $type . '.params.' . $params, []);
    }

    public static function getImageIsMultiple($type)
    {
        $imageParams = defined('static::IMAGES_PARAMS') ? static::IMAGES_PARAMS : [];
        return array_get($imageParams, $type . '.multiple', true);
    }

    public function loadImage($image, $params = '')
    {
        $path = $image->path;
        $type = $image->type;
        return GlideImage::load($path, static::getImageParams($type, $params));
    }

    public function getImagesView($type, $name = null)
    {
        $nameAfter = '[' . $type . ']';
        if ($name) {
            $nameAfter = '[images]' . $nameAfter;
        } else {
            $name = 'images';
        }
        $view = config('panel.images_view');
        return view($view, [
            'model' => $this,
            'type' => $type,
            'nameAfter' => $nameAfter,
            'name' => $name,
        ]);
    }

    public function getImagePath($type, $params = 'original', $image = null)
    {
        $path = $this->imagesFolder . DIRECTORY_SEPARATOR . self::model2Slug() . DIRECTORY_SEPARATOR . $this->id . DIRECTORY_SEPARATOR . $type . DIRECTORY_SEPARATOR . $params;
        if ($image) {
            $path = $path . DIRECTORY_SEPARATOR . $image;
        }
        return $path;
    }

    public function syncImages($data, $force = false)
    {
        $images = array_get($data, 'images', []);
        if (empty($images)) {
            $this->images()->delete();
            return;
        }
        $types = array_keys($images);
        if ($force) {
            $types = array_keys(static::IMAGES_PARAMS);
        }
        foreach ($types as $type) {
            $this->syncImagesByType($data, $type);
        }
    }

    public function syncImagesByType($data, $type)
    {
        $imageClass = config('panel.image_model');
        $this->images()->ofType($type)->delete();
        $isMultiple = self::getImageIsMultiple($type);
        foreach (array_get($data, 'images.' . $type . '.path', []) as $key => $path) {
            if ($path) {
                $isMain = array_get($data, 'images.' . $type . '.main', 0) == $key ? 1 : 0;
                $isNew = array_get($data, 'images.' . $type . '.is_new.' . $key, 1);
                if (!$isMultiple) $isMain = 1;
                if ($isNew) {
                    $newPath = $this->getImagePath($type);
                    do {
                        $filename = str_random() . '.' . pathinfo($path, PATHINFO_EXTENSION);
                    } while (File::exists($newPath . DIRECTORY_SEPARATOR . $filename));
                    if (!File::exists($newPath)) {
                        File::makeDirectory($newPath, 0777, true);
                    }
                    File::copy($path, $newPath . DIRECTORY_SEPARATOR . $filename);
                    $path = $filename;
                }
                $image = new $imageClass();
                $image->path = $path;
                $image->main = $isMain;
                $image->type = $type;
                $image->description = array_get($data, 'images.' . $type . '.description.' . $key, '');
                $image->order = array_get($data, 'images.' . $type . '.order.' . $key, '');
                $this->images()->save($image);
            }
        }
    }

    public static function model2Slug()
    {
        $modelsPath = config('panel.models_path');
        $class = static::class;
        $slug = ltrim(str_replace($modelsPath, '', $class), '\\');
        $slugElements = explode('\\', $slug);
        $slugElements = array_map(function ($value) {
            return snake_case($value);
        }, $slugElements);
        $slug = implode('-', $slugElements);
        return $slug;
    }
}
