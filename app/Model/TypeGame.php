<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TypeGame extends Model
{
    protected $table ='type_game';
    protected $fillable = ['name','description'];
    public $timestamps = true;
}
