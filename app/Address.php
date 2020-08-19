<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['address'];
    protected $guarded = ['zone_statucs'];

    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
