<?php

use Illuminate\Support\Facades\route;
use App\Http\Controllers\Admin\LoginController;

//routing for admin

route::prefix('admin')->as('admin.')->group(function(){
    route::get('login', [LoginController::class,'index'])->name('login');
    route::post('handle-login',[LoginController::class,'handle'])->name('handle.login');

    route::get('dashboard',[LoginController::class, 'index'])->name('dashboard');
});