<?php

namespace Second2None\EasyForms\App\Models\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

use Log;
// use Second2None\EasyForms\App\Models\Casts\Auto;
// Second2None\EasyForms\App\Models\Casts\Auto::class
class Auto implements CastsAttributes {
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return array
     */
    public function get( $model , $key , $value , $attributes ){
        return json_decode( $value ) ?? $value;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  array  $value
     * @param  array  $attributes
     * @return string
     */
    public function set( $model , $key , $value , $attributes ){
        return is_array( $value ) || is_object( $value ) ? json_encode( $value ) : $value;
    }

}