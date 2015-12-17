<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aikido_Event extends Model {
	use SoftDeletes;

    protected $table = 'aikido_events';

    protected $dates = ['deleted_at'];

    protected $fillable = array('event_title', 'event_type', 'event_img_url', 'event_url', 'event_address', 'event_start_time', 'event_end_time', 'event_lat', 'event_lon', 'event_description', 'event_note');
}
