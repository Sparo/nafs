<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aikido_Club extends Model {

    protected $table = 'aikido_clubs';

    protected $fillable = array('club_name', 'club_logo_url', 'club_url', 'club_fb_url', 'club_email', 'club_phone', 'club_address', 'club_lat', 'club_lon', 'club_note', 'club_coach_id');

    public function aikido_coache() {
        return $this->hasMany(Aikido_Coache::class);
    }
}
