<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    public $timestamps = false;
    protected $table = "posts";
    protected $primaryKey = "ID";
    protected $casts = ["ID" => "INT"];
}
