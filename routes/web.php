<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified','user.status'])->group(function () {
    Route::get('/',[HomeController::class,'index'])->middleware('permission:dashboard.view')->name('website.home.index');

    Route::resource('categories',CategoryController::class);
    Route::get('/test-mail', function () {
        Mail::raw('Brevo SMTP is working!', function ($message) {
            $message->to('arifhasanj080@gmail.com')
                ->subject('Brevo Test');
        });

        return 'Mail Sent!';
    });
    Route::get('/account-dashboard',[AccountController::class,'index'])->name('website.account.index');
    Route::get('/account-setting',[AccountController::class,'setting'])->name('website.account.setting');

    Route::resource('roles',RoleController::class);

    Route::get('/roles/{role}/permissions',[RoleController::class,'permission'])->name('roles.permission');
    Route::post('/roles/{role}/permissions', [RoleController::class, 'permissionStore'])->name('roles.permission.store');

    Route::resource('/users',UserController::class);
    Route::resource('/brands',BrandController::class);
    Route::resource('/units',UnitController::class);
    Route::resource('/suppliers',SupplierController::class);
    Route::resource('/products',ProductController::class);

});
