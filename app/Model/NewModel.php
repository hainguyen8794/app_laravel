<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    protected $table = 'news';
    protected $fillable = ['title', 'category_id', 'game_id', 'description', 'content', 'link_image_cover'];
    public $timestamps = true;

}
