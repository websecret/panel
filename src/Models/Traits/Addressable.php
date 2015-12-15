<?php

namespace App\Models\Traits;

use App\Models\Address;

trait Addressable
{
    public function address()
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function saveAddress($data = []) {
        $address = $this->address;
        if(!$address) {
            $address = new Address();
            $address->addressable()->associate($this);
        }
        foreach(Address::$addressFields as $addressField) {
            $address->{$addressField} = array_get($data, 'address.'.$addressField, '');
        }
        $address->save();
    }

    public function getAddressStringAttribute() {
        $address = $this->address;
        $fields = [];
        foreach(Address::$addressFields as $addressField) {
            if($address->{$addressField}) {
                $fields[] = $address->{$addressField};
            }
        }
        return implode(', ', $fields);
    }


    protected static function bootAddressable()
    {
        static::created(function($model){
            $address = new Address();
            $address->addressable()->associate($model);
            $address->save();
        });

        static::deleted(function($model){
            $model->address()->delete();
        });
    }

    public function getAddressViewAttribute() {
        return view('panel::partials.form.address', ['address' => $this->address]);
    }
}