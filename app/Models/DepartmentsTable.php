<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DepartmentsTable extends Model
{
    use SoftDeletes;
    protected $table = 'departments_tables';
    protected $fillable = ['department_name', 'status'];

}
