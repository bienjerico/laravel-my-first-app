<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Song extends Eloquent{

    protected $primaryKey = "song_id";
    protected $fillable = ['title','lyrics'];
}