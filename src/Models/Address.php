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

    public function getFullStringAttribute()
    {
        $fields = [];
        foreach (self::$addressFields as $addressField) {
            if ($this->{$addressField}) {
                $fields[] = $this->{$addressField};
            }
        }
        return implode(', ', $fields);
    }

}