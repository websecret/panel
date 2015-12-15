<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Traits\Autocompleteable;

class Address extends Model
{
    use Autocompleteable;

    protected $fillable = ['street', 'city', 'state', 'zip'];

    public static $addressFields = ['street', 'city', 'state', 'zip'];

    public function addressable()
    {
        return $this->morphTo();
    }

}