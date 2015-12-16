<?php

namespace Websecret\Panel\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $table = 'images';

    protected $fillable = ['path', 'main', 'type'];

    public function imageable()
    {
        return $this->morphTo();
    }

    public function scopeMain($query)
    {
        $query->where('main', '=', 1);
    }

    public function scopeOfType($query, $type)
    {
        $query->where('type', '=', $type);
    }

}
