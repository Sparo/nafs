<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aikido_Club extends Model {

    public function aikido_coache() {
        return $this->hasMany(Aikido_Coache::class);
    }
}
