<?php

namespace App\Models\Traits;

trait Autocompleteable
{
    protected static function autocomplete($field, $query)
    {
        $models = static::all()->unique($field)->pluck($field);
        $models = $models->filter(function($item) use($query) {
            $item = trim($item);
            if($item != '' && $query != '') {
                return str_contains($item, $query);
            }
            return false;
        });
        $suggestions = $models->values()->all();

        return response()->json([
            'query' => $query,
            'suggestions' => $suggestions,
        ]);
    }

    public static function getAutocompleteUrl($field) {
        return route('panel::autocomplete', ['model' => static::class, 'field' => $field]);
    }
}