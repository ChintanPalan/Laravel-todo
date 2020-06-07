<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    public $table = "todos";

    protected $fillable = [
        "title",
        "completed"
    ];

//    protected $guarded = [
//        "id"
//    ];
}
