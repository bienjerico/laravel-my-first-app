<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Projects extends Eloquent
{
    protected $fillable = ['title','description'];
    protected $table = "projects";
}
