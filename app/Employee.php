<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Employee extends Eloquent{

    protected $primaryKey = "emp_id";
    protected $fillable = ['emp_firstname','emp_middlename','emp_lastname','emp_gender','emp_email'];
    protected $table = "tbl_employee";
}