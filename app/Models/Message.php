<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = ["body","color","image","board_id"];
    protected $guarded = ["id"];
}
