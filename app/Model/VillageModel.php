<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VillageModel extends Model
{
    protected $table='village';
    protected $fillable=['name','coffe_id','description'];
    public $timestamps =false;
}
