<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    protected $table ='tag';
    protected $fillable = ['name','description'];
    public $timestamps = true;


}
