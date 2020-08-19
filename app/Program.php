<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    // This will enable mass assigment
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
