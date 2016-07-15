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
        if (!$params) {
            return $this->path;
        }
        $model = $this->imageable;
        $path = $model->getImagePath($this->type, $params, $this->path);

        if (!File::exists($path)) {
            if ($params == 'original') {
                abort(404);
            } else {
                $this->resize($params);
            }
        }
        return '/' . $path;
    }

    public function resize($params)
    {
        $model = $this->imageable;
        $path = $model->getImagePath($this->type, 'original', $this->path);
        $paramsArray =  $model::getImageParams($this->type, $params);
        if(empty($paramsArray)) {
            return $model->getImagePath($this->type, 'original', $this->path);
        }
        $newPath = $model->getImagePath($this->type, $params);
        $newPathWithFile = $model->getImagePath($this->type, $params, $this->path);
        if(!File::exists($newPath)) {
            File::makeDirectory($newPath, '777', true);
        }
        GlideImage::load($path)->useAbsoluteSourceFilePath()->modify($paramsArray)->save($newPathWithFile);
        return $newPathWithFile;
    }

}
