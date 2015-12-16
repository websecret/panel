<?php
namespace Websecret\Panel\Models;

use Illuminate\Database\Eloquent\Model;

use Websecret\Panel\Models\Traits\AutocompleteableTrait;

class Address extends Model
{
    use AutocompleteableTrait;

    protected $fillable = ['street', 'city', 'state', 'zip'];

    public static $addressFields = ['street', 'city', 'state', 'zip'];

    public function addressable()
    {
        return $this->morphTo();
    }

}