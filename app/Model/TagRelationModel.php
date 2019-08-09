<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TagRelationModel extends Model
{
    protected $table='tag_relation';
    protected $fillable = ['tag_id','new_id'];
    public $timestamps=false;
}
