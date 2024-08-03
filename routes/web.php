<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;

use App\Http\Controllers\LoginControllers;

use App\Http\Controllers\UserController;

Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users', [UserController::class, 'store'])->name('users.store');

Route::get('/', function () {
    return view('index');
});

// เส้นทางสำหรับฟอร์มเข้าสู่ระบบ (GET)
Route::post('/login', [App\Http\Controllers\LoginControllers::class, 'store'])->name('login');

// เส้นทางสำหรับการเข้าสู่ระบบ (POST)

Route::get('/admin', [HomeController::class, 'index'])->name('admin');

Route::get('/user', [HomeController::class, 'index1'])->name('user');


// ตัวอย่าง role_id สำหรับผู้ใช้
Route::get('/login1', function () {
    return view('login');
})->name('login1');

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');


