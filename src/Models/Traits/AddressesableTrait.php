<?php

namespace Websecret\Panel\Models\Traits;

trait AddressesableTrait
{
    public function addresses()
    {
        $addressClass = config('panel.address_model');
        return $this->morphMany($addressClass, 'addressable');
    }

    public function syncAddresses($data = [])
    {
        $addressClass = config('panel.address_model');
        $addresses = array_get($data, 'addresses', []);
        if (empty($addresses)) {
            $this->addresses()->delete();
            return;
        }
        foreach($addresses as $addressArray) {
            $address = $this->addresses()->firstOrNew($addressArray);
            foreach ($addressClass::$addressFields as $addressField) {
                $address->{$addressField} = array_get($addressArray, $addressField, '');
            }
            $address->save();
        }
    }

    protected static function bootAddressesable()
    {
        static::deleted(function ($model) {
            $model->addresses()->delete();
        });
    }

    public function getAddressesViewAttribute()
    {
        $addressClass = config('panel.address_model');
        $addressesView = config('panel.address_view');
        return view($addressesView, [
            'addresses' => $this->addresses ? $this->addressess : collect([]),
            'fields' => $addressClass::$addressFields
        ]);
    }
}