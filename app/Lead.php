<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['full_name', 'email_address', 'postal_code'];

    protected static function boot() {
        parent::boot();
        static::deleting(function($lead) {
            $lead->telephone_number()->delete();
        });
    }



    public function telephone_number()
    {
        return $this->hasOne('App\TelephoneNumber');
    }
}
