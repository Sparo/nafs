<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aikido_Event extends Model {
    protected $table = 'aikido_events';
    protected $fillable = array('event_title', 'event_img_url', 'event_url', 'event_address', 'event_time', 'event_lat', 'event_lon', 'event_description', 'event_note');
}
