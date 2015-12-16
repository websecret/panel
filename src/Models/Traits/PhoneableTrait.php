<?php

namespace Websecret\Panel\Models\Traits;

trait PhoneableTrait
{
    public function phones()
    {
        $phoneClass = config('panel.phone_model');
        return $this->morphMany($phoneClass, 'phoneable');
    }

    public function syncPhones($data = []) {
        $this->phones()->delete();
        foreach(array_get($data, 'phones', []) as $phone) {
            $this->phones()->create(['phone' => $phone]);
        }
    }

    public function getPhonesStringAttribute() {
        return $this->phones->implode('phone', ', ');
    }


    protected static function bootPhoneable()
    {
        static::deleted(function($model){
            $model->phones()->delete();
        });
    }

    public function getPhonesViewAttribute() {
        return view('panel::partials.form.phones', ['phones' => $this->phones]);
    }
}