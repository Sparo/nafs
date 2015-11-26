<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aikido_Coache extends Model {
    public function aikido_club() {
        return $this->belongsTo(Aikido_Club::class);
    }
}
