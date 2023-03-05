<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

//initial route for welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});

//made route for items through controller resource 
Route :: resource('items',ItemController::class);