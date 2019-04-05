<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Region;
use App\Place;

class ValidPlace implements Rule
{

    private $region;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($region)
    {
        $this->region = $region;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $place = Place::where('denloc', $value)->first();
        $reg = Region::where('denj', $this->region)->first();

        return ($reg && $place) && ($place->jud == $reg->id) ? true : false;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Localitatea aleasa nu face parte din Judetul ' . $this->region;
    }
}
