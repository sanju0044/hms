<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin-dashboard', function () {
    return view('admin.admin-dashboard');
});

#doctor
Route::get('/doctor-dashboard', function () {
    return view('doctor.doctor-dashboard');
});

Route::get('doctor', function () {
    return view('doctor.doctors');
});

Route::get('add-doctor', function () {
    return view('doctor.add-doctor');
});

Route::get('doctor-details', function () {
    return view('doctor.doctor-details');
});

Route::get('doctor-appointments', function () {
    return view('doctor.doctor-appointments');
});
#doctor


#patients
Route::get('patients', function () {
    return view('patients.patients');
});

Route::get('add-patient', function () {
    return view('patients.add-patient');
});

Route::get('add-doctor', function () {
    return view('doctor.add-doctor');
});

Route::get('patients-details', function () {
    return view('patients.patient-details');
});
#patients


Route::get('appointments', function () {
    return view('admin.appointments');
});

Route::get('new-appointment', function () {
    return view('admin.new-appointment');
});

Route::get('staff-list', function () {
    return view('admin.staff-list');
});

Route::get('add-staff', function () {
    return view('admin.add-staff');
});

Route::get('bad-mangment', function () {
    return view('admin.bad-mangment');
});

Route::get('ip-billing', function () {
    return view('admin.ip-billing');
});


Route::get('op-billing', function () {
    return view('admin.op-billing');
});

Route::get('purchas', function () {
    return view('pharmacy.purchase');
});

Route::get('purchase-return', function () {
    return view('pharmacy.purchase-return');
});

Route::get('sales', function () {
    return view('pharmacy.sales');
});

Route::get('sales-return', function () {
    return view('pharmacy.sales-return');
});


#leb test
Route::get('test-name', function () {
    return view('lab.test-name');
});

#leb test
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

#Departments
//Route::get('/departments', [\App\Http\Controllers\DepartmentsTableController::class, 'index'])->name('departments.index');

Route::get('/departments', \App\Livewire\DepartmentsTable::class);

