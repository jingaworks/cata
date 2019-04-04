<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cui', 'phone', 'region', 'place', 'address', 
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
