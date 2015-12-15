<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['street', 'city', 'state', 'zip'];

    public static $addressFields = ['street', 'city', 'state', 'zip'];

    public function addressable()
    {
        return $this->morphTo();
    }

}