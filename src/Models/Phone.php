<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['phone'];

    public function phoneable()
    {
        return $this->morphTo();
    }

}