<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CoffeModel extends Model
{
    protected $table='coffe';
    protected $fillable=['name','link'];
    public $timestamps = false;
}
