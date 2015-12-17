<?php

namespace Websecret\Panel;

use Illuminate\Support\Traits\Macroable;

class FormHelperBuilder {

    use Macroable;

    public static function formGroupClass($field, $data, $class = 'error', $array = NULL) {
        if((!is_object($data) && !empty($data))) {
            if($field === NULL || isset($data[$field])) {
                return 'has-'.$class;
            }
        } elseif($class == 'error') {
            if($array) {
                foreach($array as $value) {
                    if($data->get($field.'.'.$value)) {
                        return 'has-'.$class;
                    }
                }
            } elseif($data != NULL && $data->get($field)) {
                return 'has-'.$class;
            }
        }
    }

    public static function formGroupLabel($field, $data){
        if(!is_object($data) && !empty($data)) {
            return view('panel::helpers.label', [
                'text' => $data,
            ]);
        } else {
            if($data != NULL && $data->get($field)){
                return view('panel::helpers.label', [
                    'text' => $data->first($field),
                ]);
            }
        }
    }
}