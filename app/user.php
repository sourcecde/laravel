<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    public function passport() {
        return $this->hasOne(Passport::class);
    }

    public function mobile() {
        return $this->hasMany(Mobile::class);
    }
}
