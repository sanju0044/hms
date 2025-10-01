<?php

namespace App\Livewire;

use Livewire\Component;

class DepartmentsTable extends Component
{
    public function render()
    {
        return view('admin.departments')->layout('layouts.admin', ['title' => 'Add New Department']);
    }
}
