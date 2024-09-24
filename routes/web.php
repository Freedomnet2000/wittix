<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Models\Customer;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index')
        ->middleware('auth');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create')
        ->middleware('auth');
Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show')
        ->middleware('auth');
        // ->middleware('auth');

Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store')
->middleware('auth');


Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit')
->middleware('auth');



Route::patch('/customers/{customers}', [CustomerController::class, 'update'])->name('customers.update')
->middleware('auth');

Route::delete('/customers/{customers}', [CustomerController::class, 'destroy'])->name('customers.destroy')
->middleware('auth');




Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);