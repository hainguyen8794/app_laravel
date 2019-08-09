<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GameModel extends Model
{
    protected $table='game';
    protected $fillable=['name','instruction','links_image_cover'];
    public $timestamps = false;

}
