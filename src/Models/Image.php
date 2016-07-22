<?php

namespace Websecret\Panel\Models;

use Illuminate\Database\Eloquent\Model;
use File;
use GlideImage;

class Image extends Model
{

    protected $table = 'images';

    protected $fillable = ['path', 'main', 'type', 'description', 'order'];

    public function imageable()
    {
        return $this->morphTo();
    }

    public function scopeMain($query)
    {
        return $query->where('main', '=', 1);
    }

    public function scopeOfType($query, $type)
    {
        return $query->where('type', '=', $type);
    }

    public function load($params = 'original')
    {
        $model = $this->imageable;
        $path = $model->getImagePath($this->type, $params, $this->path);

        if (!File::exists($path)) {
            if ($params != 'original') {
                $this->resize($params);
            }
        }
        return '/' . $path;
    }

    public function resize($params)
    {
        $model = $this->imageable;
        $path = $model->getImagePath($this->type, 'original', $this->path);
        if (!File::exists($path)) {
            return $path;
        }
        $paramsArray = $model::getImageParams($this->type, $params);
        if (empty($paramsArray)) {
            return $model->getImagePath($this->type, 'original', $this->path);
        }
        $newPath = $model->getImagePath($this->type, $params);
        $newPathWithFile = $model->getImagePath($this->type, $params, $this->path);
        if (!File::exists($newPath)) {
            File::makeDirectory($newPath, 0777, true);
        }
        GlideImage::load($path)->useAbsoluteSourceFilePath()->modify($paramsArray)->save($newPathWithFile);
        return $newPathWithFile;
    }

    public static function slug2Model($slug)
    {
        $modelsPath = config('panel.models_path');
        $classElements = explode('-', $slug);
        $classElements = array_map(function ($value) {
            return studly_case($value);
        }, $classElements);
        $class = implode('\\', $classElements);
        $class = $modelsPath . '\\' . $class;
        $class = ltrim($class, '\\');
        return $class;
    }

}
