<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DesignationTable extends Model
{
    use SoftDeletes;
    protected $table = 'designation_tables';
    protected $fillable = ['designation_name', 'status'];
}

