<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HostModel extends Model
{
    protected $table = 'host';
    protected $fillable = ['title', 'category_id', 'game_id', 'user_id', 'coffe_id'
        , 'village_id', 'date', 'time_start', 'time_end'];
    public $timestamps = true;
}
