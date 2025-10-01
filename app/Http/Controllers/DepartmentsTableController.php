<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentsTableController extends Controller
{
    public function index()
    {
        $title = 'Add New Department';
        return view('admin.departments',compact('title'));
    }

    public function store()
    {

    }
}
