<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['city', 'street', 'zip'];

    public static $addressFields = ['city', 'street', 'zip'];

    public function addressable()
    {
        return $this->morphTo();
    }

}