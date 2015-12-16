<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aikido_Coache extends Model {

    protected $table = 'aikido_coaches';

    protected $fillable = array('coach_first_name', 'coach_last_name', 'coach_img_url', 'coach_title', 'coach_level', 'coach_club_id', 'coach_cv', 'coach_note');

    public function aikido_clubs() {
        return $this->belongsTo('Aikido_Club', 'coach_club_id', 'id');
    }

    protected $dates = ['deleted_at'];
}
